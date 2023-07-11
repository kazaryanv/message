<?php

namespace App\Http\Controllers;

use App\Models\LinkGenerate;
use Illuminate\Http\Request;

class LinkGenerateController extends Controller
{
    public function index(){
        return view("SmsLinks");
    }

    public function create(Request $request){
        $links = LinkGenerate::query()->create([
            'content' => $request['content'],
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        if ($links){
            return redirect()->route('SmsLinks')->with("success",'its your link'." " . route('show_id'));
        }else{
            return redirect()->route('SmsLinks')->with('fail','fail');
        }
    }
    public function show(){
        $links = LinkGenerate::all();
        return view('show', compact('links'));
    }

    public function destroy($id){
        $links = LinkGenerate::destroy($id);
        if ($links)
        return redirect()->route('show_id')->with("success",'your message is dellete');
        else{
            return redirect()->route('show_id')->with('fail','fail');
        }
    }
}
