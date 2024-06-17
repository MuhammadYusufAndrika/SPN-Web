<!-- resources/views/admin/descriptions/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manage Descriptions</h1>
    <a href="{{ route('admin.descriptions.create') }}" class="btn btn-primary">Add New Description</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($descriptions as $description)
            <tr>
                <td>{{ $description->id }}</td>
                <td>{{ $description->title }}</td>
                <td>{{ $description->content }}</td>
                <td>
                    <a href="{{ route('admin.descriptions.edit', $description) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.descriptions.destroy', $description) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
