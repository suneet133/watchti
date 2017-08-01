<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class ChannelsController extends Controller
{
    public function index(){
        $channels= Channel::latest()->get();
        return view('update-channels',compact('channels'));
    }

    public function create(){
        Channel::create(request()->all());
        return back();
    }

    public function update($id){
        $channel = Channel::find($id)->first();
        $channel->update([
            'name' => request()->name,
            'link' => request()->link
            ]);
        return back();
    }
}
