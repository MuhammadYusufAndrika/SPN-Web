<!-- resources/views/admin/services/create.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Service</h1>
    <form action="{{ route('admin.services.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add Service</button>
    </form>
</div>
@endsection
