@extends('adminlte::page')

@section('content')
<div class="container">
    <h1>Announcements</h1>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($announcements as $announcement)
                <tr>
                    <td>{{ $announcement->id }}</td>
                    <td>{{ $announcement->title }}</td>
                    <td>{{ $announcement->content }}</td>
                    <td>{{ $announcement->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
