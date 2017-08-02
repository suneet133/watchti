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

    public function showChannel($channel){
        $channel = Channel::find($channel)->first();

        return view('channel',compact('channel'));
    }

    public function create(){
        Channel::create(request()->all());
        return back();
    }

    public function edit($id){
        $channel = Channel::find($id);
        return view('edit-channels',compact('channel'));
    }

    public function update(){
        $channel = Channel::find(request()->id);
        $channel->update([
            'name' => request()->name,
            'link' => request()->link,
            'chat' => request()->chat,
            'channel_link' => request()->channel_link
            ]);
        return redirect('/update-ti-channels');
    }
}
