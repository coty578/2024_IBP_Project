<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class UserMessageController extends Controller
{
    public function inbox()
    {
        $messages = Message::where('receiver_id', auth()->id())->get();
        return view('user.messages.inbox', compact('messages'));
    }

    public function sent()
    {
        $messages = Message::where('sender_id', auth()->id())->get();
        return view('user.messages.sent', compact('messages'));
    }

    public function create()
    {
        $admins = User::where('role', 'admin')->get();
        return view('user.messages.compose', compact('admins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('user.messages.sent')->with('success', 'Message sent successfully.');
    }

    public function edit(Message $message)
    {
        // Ensure the authenticated user is the sender of the message
        if ($message->sender_id !== auth()->id()) {
            return redirect()->route('user.messages.sent')->with('error', 'You are not authorized to edit this message.');
        }

        return view('user.messages.edit', compact('message'));
    }

    public function update(Request $request, Message $message)
    {
        // Ensure the authenticated user is the sender of the message
        if ($message->sender_id !== auth()->id()) {
            return redirect()->route('user.messages.sent')->with('error', 'You are not authorized to update this message.');
        }

        $request->validate([
            'receiver_id' => 'required|exists:users,id',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message->update([
            'receiver_id' => $request->receiver_id,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('user.messages.sent')->with('success', 'Message updated successfully.');
    }

    public function view($message)
    {
        $message = Message::findOrFail($message);
        return view('user.messages.view', compact('message'));
    }
}
