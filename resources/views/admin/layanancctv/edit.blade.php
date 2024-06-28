@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Section</h1>
    <form action="{{ route('admin.layanancctv.update', $layanancctv) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $layanancctv->type }}" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $layanancctv->title }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="5">{{ $layanancctv->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($layanancctv->image)
                <img src="{{ asset('storage/' . $layanancctv->image) }}" alt="Image" style="width: 100px;" class="mt-3">
            @endif
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $layanancctv->price }}">
        </div>
        <button type="submit" class="btn btn-success">Update Section</button>
    </form>
</div>
@endsection
