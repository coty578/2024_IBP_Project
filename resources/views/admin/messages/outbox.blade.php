@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Outbox</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Receiver</th>
                <th>Subject</th>
                <th>Date</th>
                <th>Read</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->receiver->name }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->created_at }}</td>
                    <td>{{ $message->is_read ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('admin.messages.view', $message->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('admin.messages.edit', $message->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this message?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
