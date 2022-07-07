<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function chat()
    {
        $chat_data = Chat::query()
            ->get();

        $user_id = Auth::id();

        return view('chat',compact('chat_data','user_id'));
    }

    public function sendMessage(Request $request)
    {

        $model = new Chat;
        $model->user_id = Auth::id();
        $model->message_time = date('Y-m-d H:i:s');

        // To check if the file is uploaded or message is text.

        if(isset($request->file) && !empty($request->file)){

            $filename = $request->file->getClientOriginalName();
            $extension = $request->file->getClientOriginalExtension();
            $filename = md5(rand(0,999999999).time());
            $newFileName = $filename.'.'.$extension;
            $dir = 'public/upload/';
            Storage::disk('local')->put($dir.$newFileName, \File::get($request->file('file')));

            $model->file_path = $newFileName;
            $data_object = $pusher_data = "";

            // To check if the file uploaded is image. If its image then show the preview. 
            if(strtolower($extension) == 'jpeg' || strtolower($extension) == 'png' || strtolower($extension) == 'jpg' || strtolower($extension) == 'gif'){

                // this variable is used to push the html in the pusher
                $pusher_data = '<div class="messages message-data received">
                    <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                    <span class="message other-message"><a target="_blank" href="'.asset('/storage/upload/'.$model->file_path).'"><img src='.asset('/storage/upload/'.$model->file_path).'></a></span>
                </div>';

                // this variable is used to preview for the sender.
                $data_object = '<div class="messages message-data sent">
                    <span class="message other-message"><a target="_blank" href="'.asset('/storage/upload/'.$model->file_path).'"><img src='.asset('/storage/upload/'.$model->file_path).'></a></span>
                    <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                </div>';



            }else{

                $pusher_data = '<div class="messages message-data received">
                    <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                    <span class="message other-message"><a target="_blank" href="'.asset('/storage/upload/'.$model->file_path).'"><i class="fa fa-file"></i></a></span>
                </div>';

                $data_object = '<div class="messages message-data sent">
                    <span class="message other-message"><a target="_blank" href="'.asset('/storage/upload/'.$model->file_path).'"><i class="fa fa-file"></i></a></span>
                    <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                </div>';

            }
        }else{
            $model->message_text = $request->input_text;    
            $pusher_data = '<div class="messages message-data received">
                <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
                <span class="message other-message">'.$model->message_text.'</span>
            </div>';

            $data_object = '<div class="messages message-data sent">
                <span class="message other-message">'.$model->message_text.'</span>
                <img src="https://travelquoter.com/assets/img/agents/25.png" alt="Agent Name">
            </div>';
        }
        
        
        $model->save();        

        $pusher_data_array = [];
        $pusher_data_array['html'] = $pusher_data;
        $pusher_data_array['sender_user_id'] = $model->user_id;

        $this->pusherOrderUpdate(json_encode($pusher_data_array));

        $result = ['status' => true, 'message' => "Status update failed", 'data' => $data_object];
        return response()->json($result);
    }

    public function pusherOrderUpdate($data)
    {
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true
        );

        $pusher = new \Pusher\Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $pusher->trigger('order-status-updated-channel', 'order-status-updated', $data);
    }
}
