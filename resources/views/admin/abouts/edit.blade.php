@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit About</h1>
    <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <small class="text-muted">Current Image: <img src="{{ asset('storage/' . $about->image) }}" width="100" alt=""></small>
        </div>
        <select class="form-select mb-3" aria-label="Default select example" name="type">
            <option selected>Type Gambar</option>
            <option value="carausel">Carausel</option>
            <option value="body">Body</option>
        </select>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description">{{ $about->description }}</textarea>
            <label for="floatingTextarea2">Description</label>
        </div>
        <button type="submit" class="btn btn-success">Update About</button>
    </form>
</div>
@endsection
