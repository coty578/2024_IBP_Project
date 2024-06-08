@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Create Message</h1>
    <form action="{{ route('admin.messages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="receiver_id">Receiver</label>
            <select name="receiver_id" id="receiver_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
@endsection
