<!-- resources/views/admin/carousels/create.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Carousel</h1>
    <form action="{{ route('admin.carousels.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle" required>
        </div>
        <button type="submit" class="btn btn-success">Add Carousel</button>
    </form>
</div>
@endsection
