@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Add New Section</h1>
        <form action="{{ route('admin.layanancctv.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="type" id="type" r required>
                    <option selected>Pilih Type</option>
                    <option value="cctv-text">cctv-text</option>
                    <option value="cctv-package">cctv-package</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <button type="submit" class="btn btn-success">Add Section</button>
        </form>
    </div>
@endsection
