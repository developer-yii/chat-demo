@extends('layouts.chat')

@section('content')

<body cz-shortcut-listen="true">
<div class="site-top-banner">
    <div class="header-info">
        <script data-pagespeed-no-defer="">//<![CDATA[
(function(){for(var g="function"==typeof Object.defineProperties?Object.defineProperty:function(b,c,a){if(a.get||a.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[c]=a.value)},h="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,k=["String","prototype","repeat"],l=0;l<k.length-1;l++){var m=k[l];m in h||(h[m]={});h=h[m]}var n=k[k.length-1],p=h[n],q=p?p:function(b){var c;if(null==this)throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");c=this+"";if(0>b||1342177279<b)throw new RangeError("Invalid count value");b|=0;for(var a="";b;)if(b&1&&(a+=c),b>>>=1)c+=c;return a};q!=p&&null!=q&&g(h,n,{configurable:!0,writable:!0,value:q});var t=this;function u(b,c){var a=b.split("."),d=t;a[0]in d||!d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===c?d[e]?d=d[e]:d=d[e]={}:d[e]=c};function v(b){var c=b.length;if(0<c){for(var a=Array(c),d=0;d<c;d++)a[d]=b[d];return a}return[]};function w(b){var c=window;if(c.addEventListener)c.addEventListener("load",b,!1);else if(c.attachEvent)c.attachEvent("onload",b);else{var a=c.onload;c.onload=function(){b.call(this);a&&a.call(this)}}};var x;function y(b,c,a,d,e){this.h=b;this.j=c;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=d;this.b={};this.a=[];this.c={}}function z(b,c){var a,d,e=c.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=c.offsetWidth&&0>=c.offsetHeight)a=!1;else{d=c.getBoundingClientRect();var f=document.body;a=d.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);d=d.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+d;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&d<=b.g.width)}a&&(b.a.push(e),b.c[e]=!0)}y.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&z(this,b)};u("pagespeed.CriticalImages.checkImageForCriticality",function(b){x.checkImageForCriticality(b)});u("pagespeed.CriticalImages.checkCriticalImages",function(){A(x)});function A(b){b.b={};for(var c=["IMG","INPUT"],a=[],d=0;d<c.length;++d)a=a.concat(v(document.getElementsByTagName(c[d])));if(a.length&&a[0].getBoundingClientRect){for(d=0;c=a[d];++d)z(b,c);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(c=!!b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),d=1;d<b.a.length;++d){var e=","+encodeURIComponent(b.a[d]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(B())),131072>=a.length+e.length&&(a+=e),c=!0);C=a;if(c){d=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(r){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(D){}}f&&(f.open("POST",d+(-1==d.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}function B(){var b={},c;c=document.getElementsByTagName("IMG");if(!c.length)return{};var a=c[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var d=0;a=c[d];++d){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var C="";u("pagespeed.CriticalImages.getBeaconData",function(){return C});u("pagespeed.CriticalImages.Run",function(b,c,a,d,e,f){var r=new y(b,c,a,e,f);x=r;d&&w(function(){window.setTimeout(function(){A(r)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','https://travelquoter.com/user/chat','nXzXivl0t7',true,false,'oJtrPJGFID4');
//]]></script><img src="https://travelquoter.com/assets/img/xagents-image.png.pagespeed.ic.4k8CO1QAMP.webp" alt="Travel Deals" data-pagespeed-url-hash="4256458974" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
        <span>Want to become a partner?<a href="/register-travel-agents">Join Us Now</a></span>
    </div>
</div>


<nav class="top-navigation">
    <div class="nav-wrapper">
        <a href="/" class="brand-logo">
            <img src="https://travelquoter.com/assets/img/xlogo.png.pagespeed.ic.N5n-iAWpL_.webp" alt="TravelQuoter" class="responsive-img" data-pagespeed-url-hash="2127393245" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
        </a>
        <ul id="nav-mobile" class="right">
            
            <li>
                                    <a href="https://travelquoter.com/login" class="login-register">
                        <i class="fa fa-users"></i>
                        <span>Login/Register</span>
                    </a>
                
            </li>
        </ul>
        <div id="slide-out" class="side-nav" style="transform: translateX(-100%);">
            <ul class="sidenav-inner">
                <a href="https://travelquoter.com"><li><i class="fa fa-home"></i>Home</li></a>
                                                <a href="https://travelquoter.com/list-travel-special"><li><i class="fa fa-money-check-alt"></i>Hot Deals</li></a>
                <a href="/page/about-us"><li><i class="fa fa-users"></i>About Us</li></a>
                <a href="/contact"><li><i class="fa fa-envelope"></i>Contact Us</li></a>
                <a href="/career"><li><i class="fa fa-briefcase"></i>Career</li></a>
                <a href="https://travelquoter.com/tq-news"><li><i class="far fa-newspaper"></i>TQ News</li></a>
                <a href="/blogs"><li><i class="fa fa-globe-asia"></i>Travel Stories</li></a>
                <a href="/faqs"><li><i class="far fa-question-circle"></i>FAQ</li></a>
            </ul>
            <div class="center-align">
                                    <a href="https://travelquoter.com/login"><button class="login-register">Login/Register</button></a>
                
            </div>
        </div>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars" style="margin-top: 5px;"></i></a>
    </div>
</nav>

<div class="navigation1">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <ul>
                    <a href="/"><li class="">Home</li></a>
                    <a href="/page/about-us"><li class="">About Us</li></a>
                    <a href="https://travelquoter.com/smart_traveller"><li class="">Travel Alerts</li></a>
                    <a class="modal-trigger" href="#travelItinery" style="z-index: 1009;">
                        <li style="position: relative;"><span class="badge-new"><img src="https://travelquoter.com/assets/updates/img/new.gif.pagespeed.ce.gzb0oGmsfS.gif" alt="" data-pagespeed-url-hash="3833277894" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></span>Plan &amp; Share</li></a>
                    <a href="https://travelquoter.com/list-travel-special"><li class="">Offers</li></a>
                    <a href="/contact"><li class="">Contact Us</li></a>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="app"><section id="agentUserChat"><div class="container-fluid"><div class="row"><div class="col s12"><div class="agent-user-chat-container"><div class="row flex"><div class="col s12 m3 no-padding-col"><div class="agent-list"><div class="header"><h6>Quote Recieved From</h6></div> <div class="search-agent"><input type="text" name="" id="" placeholder="Send Quote To Other Agent" class="browser-default"> <button><i class="fa fa-plus"></i></button></div> <div class="agent-card"><div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/17.png" alt="Agent Name"> <span class="title">Macedon Travel</span> <span class="message">Hi This is your quote.</span></div> <span class="pricing"><i class="fa fa-tags"></i>Aud 1420</span></div> <div class="agent-card"><div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/20.png" alt="Agent Name"> <span class="title">Ozii Travel Plan</span> <span class="message">This is a great quote.</span></div> <span class="pricing"><i class="fa fa-tags"></i>Aud 1780</span></div> <div class="agent-card active"><div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <span class="title">Beyond Vacations</span> <span class="message">Great</span></div> <span class="pricing"><i class="fa fa-tags"></i>Aud 150</span></div> <div class="agent-card"><div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/24.png" alt="Agent Name"> <span class="title">France Tourism</span> <span class="message">Hi How can we help you with your tr</span></div> <span class="pricing"><i class="fa fa-tags"></i>Aud 1500</span></div> <br> <div class="other-agents"><div class="header"><h6>Awaiting Quote</h6></div> <div class="agent-card"><div class="agent-info"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <span class="title">Asia Travels</span> <ul class="quote-status"><li>• Seen</li> <li>• Delivered</li></ul></div> <span class="timer"><i class="fa fa-clock"></i>19:10:03</span></div></div></div></div> <div class="col s12 m6 no-padding-col"><div class="agent-quote-details"><div class="header"><div class="quote-time-left"><label>Agent Should Reply In</label> <span>15 Hrs. 14 Mins.</span></div> <div class="active-agent"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <h6>Beyond Vacations</h6></div> <button data-position="top" data-delay="50" data-tooltip="View Agent Profile" class="agent-profile tooltipped" data-tooltip-id="af919cc9-316e-c3b5-6df1-61f6a782ba01"><i class="fa fa-user"></i></button></div> <div class="contents"><div class="row"><div class="col s12 m6"><h5>Travel Quote Details</h5></div> <div class="col s12 m6"><div class="add-options-container"><a data-beloworigin="true" href="#" data-activates="dropdown1" class="dropdown-button"><button class="add-travel-options tq-button-1"><i class="fa fa-plus"></i>&nbsp; Add Options</button></a><ul id="dropdown1" class="tq-dropdown dropdown-theme-1 add-options-dropdown"><a href="#"><li><i class="tq-icon">g</i> <span>Add Flight</span></li></a> <a href="#"><li><i class="tq-icon">d</i> <span>Add Accommodation</span></li></a> <a href="#"><li><i class="tq-icon">i</i> <span>Add Car Hire</span></li></a> <a href="#"><li><i class="tq-icon">e</i> <span>Add Cruise</span></li></a> <a href="#"><li><i class="tq-icon">a</i> <span>Add Insurance</span></li></a> <a href="#"><li><i class="tq-icon">h</i> <span>Add Visa</span></li></a></ul> </div></div></div> <div class="quote-table"><div class="quote-table-head"><h6 class="title">Flight</h6> <button class="i fa fa-edit"></button></div> <table><thead><td>FROM</td> <td>TO</td> <td>DAYS</td> <td>DEPARTURE</td> <td>PASSENGER</td> <td>CABIN</td> <td>VISA</td></thead> <tbody><tr><td>Sydney</td> <td>Kathmandu</td> <td>10 Days</td> <td>20 Dec. 2020</td> <td>Adult: 1, Child: 0, Infant: 1</td> <td>Economy</td> <td>No</td></tr></tbody></table></div> <div class="quote-table"><div class="quote-table-head"><h6 class="title">Car Hire</h6> <button class="i fa fa-edit"></button></div> <table><thead><td>PICKUP</td> <td>DROP OFF</td> <td>CAR TYPE</td> <td>PICKUP DATE</td> <td>DROPOFF DATE</td></thead> <tbody><tr><td>Sydney</td> <td>Kathmandu</td> <td>Sedan</td> <td>20 Dec. 2020</td> <td>22 Dec. 2020</td></tr></tbody></table></div> <div class="quote-actions right-align"><button class="tq-button-1">Resend Quote to Agent Name</button> &nbsp;


                                    <button class="tq-button-1">Resend Quote to All Agents</button></div></div></div></div> 


                                    <div class="col s12 m3 no-padding-col"><div class="agent-chat-section"><div class="agent-intro"><div class="agent-intro-left"><img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name"> <div class="agent-name"><h6>Bashistha Digital</h6> <ul class="rating"><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="fa fa-star"></i></li><li><i class="far fa-star"></i></li></ul></div></div> <div class="agent-intro-right"><div class="quoted-price"><label>Offered Price</label> <span>AUD 2939</span></div> <div class="approve-quote"><button data-position="top" data-delay="50" data-tooltip="Approve Quote" class="success-btn tooltipped" data-tooltip-id="ec512f32-10d2-748a-46b4-9c6a066e45e2"><i class="fa fa-check"></i></button> <button data-position="top" data-delay="50" data-tooltip="Decline Quote" class="decline-btn tooltipped" data-tooltip-id="13d1e182-263d-012d-e355-01b8ccec200e"><i class="fa fa-times"></i></button></div></div></div> 
                                    <div class="chat-bottom chat-section">
                                    @foreach($chat_data as $data)
                                    @php
                                        $text_right = 'received';
                                        if($data->user_id == $user_id){
                                            $text_right = 'sent';
                                        }
                                        $extension = pathinfo(public_path('storage/upload/'.$data->file_path), PATHINFO_EXTENSION);
                                        if($text_right =='sent')
                                        {
                                            if($data->file_path)
                                            {
                                                if(strtolower($extension) == 'jpeg' || strtolower($extension) == 'png' || strtolower($extension) == 'jpg' || strtolower($extension) == 'gif'){
                                                    $data_object = '<div class="messages message-data sent">
                                                        <span class="message other-message"><a target="_blank" href="'.asset('/storage/upload/'.$data->file_path).'"><img src='.asset('/storage/upload/'.$data->file_path).'></a></span>
                                                        <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                                    </div>';
                                                }else{
                                                    $data_object = '<div class="messages message-data sent">
                                                        <span class="message other-message"><a target="_blank" href="'.asset('/storage/upload/'.$data->file_path).'"><i class="fa fa-file"></i></a></span>
                                                        <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                                    </div>';
                                                }
                                            }
                                            else{
                                                $data_object = '<div class="messages message-data sent">
                                                        <span class="message other-message">'.$data->message_text.'</span>
                                                        <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                                    </div>';
                                            }
                                        }
                                        else{
                                            if($data->file_path)
                                            {
                                                if(strtolower($extension) == 'jpeg' || strtolower($extension) == 'png' || strtolower($extension) == 'jpg' || strtolower($extension) == 'gif'){
                                                    $data_object = '<div class="messages message-data received">
                                                        <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                                        <span class="message other-message">
                                                        <a target="_blank" href="'.asset('/storage/upload/'.$data->file_path).'">
                                                        <img src='.asset('/storage/upload/'.$data->file_path).'></a></span>
                                                    </div>';
                                                }else{
                                                    $data_object = '<div class="messages message-data received">
                                                        <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                                        <span class="message other-message"><a target="_blank" href="'.asset('/storage/upload/'.$data->file_path).'"><i class="fa fa-file"></i></a></span>
                                                    </div>';
                                                }
                                            }
                                            else{
                                                $data_object = '<div class="messages message-data received">
                                                        <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                                                        <span class="message other-message">'.$data->message_text.'</span>
                                                    </div>';
                                            }

                                        }

                                    @endphp
                                    {!! $data_object !!}
                                    
                                @endforeach

                                 </div> <div class="message-box">
                                    <input type="text" class="browser-default input_box" placeholder="Type Your Message Here">
                                     <button class="input_file" style="right: 40px;"><i class="fa fa-paperclip"></i></button>
                                     <button class="submit_btn"><i class="fa fa-paper-plane"></i></button>
                                 </div></div></div></div></div></div></div> <!----> <!----> <!----> <!----> <!----> <!----></div></section></div>

                                 <input type="file" style="display:none;" id="file_input">





<div id="live-chat">
    <header class="clearfix">
        <div class="chat-action">
            <a href="#" class="chat-close">x</a>
            <a href="#" class="chat-clear" title="Clear chat"><i class="fa fa-trash"></i></a>
        </div>
        <h4 class="chat-person-name">John Doe</h4>
        <span class="chat-message-counter">3</span>
    </header>
    <div class="chat">
        <div class="chat-history">
            <div class="chat-message clearfix">
                
                <div class="chat-message-content clearfix">
                    <span class="chat-time">13:35</span>
                    <h5 class="chat-person-name">Travel Quoter</h5>
                    <p>Lorem ipsum dolor sit ame</p>
                </div> <!-- end chat-message-content -->
            </div> <!-- end chat-message -->
            <hr>
        </div> <!-- end chat-history -->
        <p class="chat-feedback" style="display: none;">Your partner is typing…</p>
        
        <fieldset>
            <input id="send-message-text" type="text" class="browser-default" placeholder="Type your message…" autocomplete="off" data-emojiable="true" autofocus="">
            <input type="hidden">
            <a href="#" style="width: 30px; height: 30px; margin-left: 10px; color: #1a8a34;" id="chat-msg-send-btn"><i class="material-icons" style="font-size: 30px; line-height: 30px;">send</i></a>
        </fieldset>
        
    </div> <!-- end chat -->
</div> <!-- end live-chat -->
<!-- Transfer Questions Modal Structure -->
<div id="chat-reason-model" class="modal modal-sm modal-fixed-footer" style="z-index: 1007;">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <label for="chat-reason" style="color: black; font-weight: bolder;">Why do you want to chat?</label>
                <textarea name="chat-reason" id="chat-reason" cols="30" rows="10" style="height: 9rem; color: black"></textarea>
            </div><!--/car type-->
            <button class="modal-close chat-reason-send-btn btn light-blue darken-4 waves-effect waves-light right">Send</button>
        </div>
    </div>
</div>

<!--  Scripts-->























<div class="material-tooltip" id="af919cc9-316e-c3b5-6df1-61f6a782ba01"><span>View Agent Profile</span><div class="backdrop"></div></div><div class="material-tooltip" id="ec512f32-10d2-748a-46b4-9c6a066e45e2"><span>Approve Quote</span><div class="backdrop"></div></div><div class="material-tooltip" id="13d1e182-263d-012d-e355-01b8ccec200e"><span>Decline Quote</span><div class="backdrop"></div></div><div class="hiddendiv common"></div><div class="drag-target" data-sidenav="slide-out" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div></body><loom-container id="lo-companion-container"><loom-shadow classname="resolved"></loom-shadow></loom-container><loom-container id="lo-engage-ext-container"><loom-shadow classname="resolved"></loom-shadow></loom-container></html>


@endsection

@section('js')

<script type="text/javascript">
    var sendMessage = "{{ route('sendMessage') }}";
    var pak = "{{ env('PUSHER_APP_KEY') }}";
    var pac = "{{ env('PUSHER_APP_CLUSTER') }}";
    var user_id = "{{ $user_id }}";
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://js.pusher.com/7.1/pusher.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/custom/chat.index.js') }}"></script></script>

@endsection



