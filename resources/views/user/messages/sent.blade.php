@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Sent Messages</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Receiver</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->receiver->name }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->created_at }}</td>
                    <td><a href="{{ route('user.messages.view', $message->id) }}" class="btn btn-primary">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
