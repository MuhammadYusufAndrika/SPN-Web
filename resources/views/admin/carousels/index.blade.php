<!-- resources/views/admin/carousels/index.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Manage Carousels</h1>
        <a href="{{ route('admin.carousels.create') }}" class="btn btn-primary">Add New Carousel</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carousels as $carousel)
                    <tr>
                        <td>{{ $carousel->id }}</td>
                        <td><img src="{{ asset('storage/' . $carousel->image) }}" width="100" alt=""></td>
                        <td>{{ $carousel->title }}</td>
                        <td>{{ $carousel->subtitle }}</td>
                        <td>
                            <a href="{{ route('admin.carousels.edit', $carousel) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.carousels.destroy', $carousel) }}" method="POST"
                                style="display:inline;">
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
