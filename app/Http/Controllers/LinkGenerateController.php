<?php

namespace App\Http\Controllers;

use App\Models\LinkGenerate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Throwable;

class LinkGenerateController extends Controller
{
    public function index(){
        return view("SmsLinks");
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

    public function link_name($link_name){
    $link = LinkGenerate::query()->where('id' , '=', $link_name)->orWhere('link_name',$link_name)->firstOrFail();
    try{
        if ($link->reading != null)
            LinkGenerate::query()->where('created_at', '<', Carbon::now()->subHours($link->reading))->delete($link);
        else{
        $link->delete();
        }
    }catch (Throwable  $e){

    }
    return view('show_message', compact('link'));

    }


    public function destroy($id){
        $links = LinkGenerate::query()->findOrFail($id);
        $link_delete = $links->delete();
        if ($link_delete)
            return redirect()->route('SmsLinks')->with("success",'your message is dellete');
        else{
            return redirect()->route('SmsLinks')->with('fail','fail');
        }
    }



    public function destroyNowid($id)
    {
       $link =  LinkGenerate::query()->where($id == 'id');
        return view('delete_not_now',compact('link'));
    }

    public function destroyNow()
    {
        $link = LinkGenerate::query()->first();
        dd($link);
        return route('/show/message/link/{link_name}');
    }
}
