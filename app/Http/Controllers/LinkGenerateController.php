<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\LinkGenerate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use function Illuminate\Session\userAgent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;
use function Symfony\Component\Mime\cc;
use Throwable;

class LinkGenerateController extends Controller
{
    public function index(){
        $links = LinkGenerate::all();
        return view("SmsLinks",compact('links'));
    }

    public function create(Request $request){
        $links = LinkGenerate::query()->create([
            'content' => $request['content'],
            'reading' => $request->reading,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'link_name' => $request->link_name,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
//        if ($links->email != null){
//            $details = [
//                'email' => $request->email,
//                'return date' => $request['return date']
//            ];
//
//            Mail::to($request->email)->send(new SendMail($details));
//        }
        if ($links){
            return redirect()->route('show_link')->with("success",'its your link');

        }else{
            return redirect()->route('show_link')->with('fail','fail');
        }
    }
    public function show_link(){
        $links = LinkGenerate::query()->latest()->first();
        if (isset($links)) {
            return view('show', compact('links'));
        }else {
            return redirect()->route('SmsLinks');
        }
    }

    public function show_message($id){
        $show_message = LinkGenerate::query()->findOrFail($id);
        try{
            if ($show_message->reading != null)
            LinkGenerate::query()->where('created_at', '<', Carbon::now()->subHours($show_message->reading))->delete($id);
            else{
                $show_message->delete();
            }
        }catch (Throwable  $e){

        }
        return view('show_message',compact('show_message'));
    }
    public function login()
    {
        return view('login');
    }

    public function login_store(Request $request){
        $user_data = $request->only('password');
        if(Auth::attempt($user_data)) {
            return redirect()->route('show_message');
        } else {
            return abort(404);
        }
    }



    public function destroy($id){
        $links = LinkGenerate::query()->findOrFail($id);
        $link_delete = $links->delete();
        if ($link_delete)
        return redirect()->route('show_link')->with("success",'your message is dellete');
        else{
            return redirect()->route('show_link')->with('fail','fail');
        }
    }
}
