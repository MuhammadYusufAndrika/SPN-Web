<!-- resources/views/admin/descriptions/edit.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Description</h1>
    <form action="{{ route('admin.descriptions.update', $description) }}" method="POST">
        @csrf <!-- Tambahkan CSRF protection -->
        @method('PUT') <!-- Mengindikasikan bahwa ini adalah request PUT -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $description->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $description->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update Description</button>
    </form>
</div>
@endsection
