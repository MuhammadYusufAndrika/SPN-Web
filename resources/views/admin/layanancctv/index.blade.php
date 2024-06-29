@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Manage Layanan CCTV Sections</h1>
        <a href="{{ route('admin.layanancctv.create') }}" class="btn btn-primary mb-3">Add New Section</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sections as $section)
                    <tr>
                        <td>{{ $section->id }}</td>
                        <td>{{ $section->type }}</td>
                        <td>{{ $section->title }}</td>
                        <td>{{ Str::limit($section->description, 50) }}</td>
                        <td>
                            @if ($section->image)
                                <img src="{{ asset('storage/' . $section->image) }}" alt="Image" style="width: 50px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $section->price }}</td>
                        <td>
                            <a href="{{ route('admin.layanancctv.edit', $section) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.layanancctv.destroy', $section) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
