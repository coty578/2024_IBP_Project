@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>View Message</h1>
    <div class="card">
        <div class="card-header">
            <h3>{{ $message->subject }}</h3>
        </div>
        <div class="card-body">
            <p><strong>From:</strong> {{ $message->sender->name }}</p>
            <p><strong>To:</strong> {{ $message->receiver->name }}</p>
            <p><strong>Date:</strong> {{ $message->created_at }}</p>
            <hr>
            <p>{{ $message->message }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('user.messages.inbox') }}" class="btn btn-secondary">Back to Inbox</a>
        </div>
    </div>
</div>
@endsection
