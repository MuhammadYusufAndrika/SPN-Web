<!-- resources/views/admin/services/edit.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Service</h1>
    <form action="{{ route('admin.services.update', $service) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5" required>{{ $service->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update Service</button>
    </form>
</div>
@endsection
