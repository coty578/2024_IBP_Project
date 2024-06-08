@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Edit Announcement</h1>
    <form action="{{ route('admin.announcements.update', $announcement->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $announcement->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" required>{{ $announcement->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
