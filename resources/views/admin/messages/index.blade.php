@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>All Messages</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sender</th>
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
                    <td>{{ $message->sender->name }}</td>
                    <td>{{ $message->receiver->name }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->created_at }}</td>
                    <td>{{ $message->is_read ? 'Yes' : 'No' }}</td>
                    <td>
                        <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this message?');">Delete</button>
                        </form>
                       
                        @if (!$message->is_read)
                            <form action="{{ route('admin.messages.markAsRead', $message->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-info">Mark as Read</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
