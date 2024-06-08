<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class AdminMessageController extends Controller
{
    public function index()
    {
        $messages = Message::with(['sender', 'receiver'])->get();
        return view('admin.messages.index', compact('messages'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.messages.create', compact('users'));
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

        return redirect()->route('admin.messages.index')->with('success', 'Message sent successfully.');
    }

    public function edit(Message $message)
    {
        $users = User::all();
        return view('admin.messages.edit', compact('message', 'users'));
    }

    public function update(Request $request, Message $message)
    {
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

        return redirect()->route('admin.messages.index')->with('success', 'Message updated successfully.');
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.messages.index')->with('success', 'Message deleted successfully.');
    }

    public function inbox()
    {
        $messages = Message::where('receiver_id', auth()->id())->with('sender')->get();
        return view('admin.messages.inbox', compact('messages'));
    }

    public function outbox()
    {
        $messages = Message::where('sender_id', auth()->id())->with('receiver')->get();
        return view('admin.messages.outbox', compact('messages'));
    }

    public function view($message)
    {
        $message = Message::findOrFail($message);
        return view('admin.messages.view', compact('message'));
    }
    
    public function reply(Message $message)
    {
        return view('admin.messages.reply', compact('message'));
    }

    public function markAsRead(Request $request, Message $message)
    {
        $message->update(['is_read' => true]);
        return redirect()->back()->with('success', 'Message marked as read.');
    }
}





