function sendmessage()
{
    var input_text = $(".input_box").val();  
    if(input_text!="")
    {
        $.ajax({  
            type:"POST",  
            url:sendMessage,  
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:"input_text="+input_text,
            success: function(data){  
                $('.input_box').val('');
                $('.chat-section').append(data.data);    
                $(".chat-section").stop().animate({ scrollTop: $(".chat-section")[0].scrollHeight}, 1000);
            }  
        });    
    }
}
$(document).ready(function(e){
    $('body').on('click','.submit_btn',function(e){
        sendmessage();
    });

    $('.input_box').keypress(function(event){
      var keycode = (event.keyCode ? event.keyCode : event.which);
      if(keycode == '13'){
        sendmessage();
      }
    });

    var pusher = new Pusher(pak, {
        cluster: pac  
    });

    var channel = pusher.subscribe('order-status-updated-channel');
    channel.bind('order-status-updated', function(data) {
        var obj = jQuery.parseJSON(data);
        if(obj.sender_user_id != user_id){
            $('.chat-section').append(obj.html);
            $(".chat-section").stop().animate({ scrollTop: $(".chat-section")[0].scrollHeight}, 1000);
        }
    });

    $('body').on('click','.input_file',function(e){
        $('#file_input').trigger('click');
    });

    $('body').on('change','#file_input',function(e){
        var file = this.files[0];
        var formData = new FormData();
        formData.append('file', file);

        $.ajax({  
            type:"POST",  
            url:sendMessage,  
            dataType: 'json',
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:formData,
            success: function(data){  
                $('.input_box').val('');
                $('#file_input').val(''); 
                $('.chat-section').append(data.data);    
                $(".chat-section").stop().animate({ scrollTop: $(".chat-section")[0].scrollHeight}, 1000);
            }  
        });

    });
});