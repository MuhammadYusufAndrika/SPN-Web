<!-- resources/views/admin/carousels/edit.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Carousel</h1>
    <form action="{{ route('admin.carousels.update', $carousel) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <small class="text-muted">Current Image: <img src="{{ asset('storage/' . $carousel->image) }}" width="100" alt=""></small>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $carousel->title }}" required>
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $carousel->subtitle }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Carousel</button>
    </form>
</div>
@endsection
