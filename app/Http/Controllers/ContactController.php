<?php

namespace App\Http\Controllers;

use App\Models\get_in_touch;
use App\Models\message_us;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $get_in=get_in_touch::all();
        return view('website-bages.contact.index',compact('get_in'));
    }
    public function store( Request $request){
        $request->validate([
            'fullname' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'write_message' => [],
        ]);
        $message = new message_us();
        $message->fullname = $request->post('fullname');
        $message->email = $request->post('email');
        $message->phone = $request->post('phone');
        $message->write_message = $request->post('write_message');
        $message->save();
        return redirect()->route('contact.view');
    }
}
