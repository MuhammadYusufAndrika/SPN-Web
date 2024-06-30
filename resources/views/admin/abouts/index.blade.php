<!-- resources/views/admin/contact/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manage About</h1>
    <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Add New About</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>NO</th>
                <th>Image</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abouts as $about)
            <tr>
                <td>{{ $about->id }}</td>
                <td><img src="{{ asset('storage/' .  $about->image) }}" width="100" alt=""></td>
                <td>{{ $about->description }}</td>
                <td>
                    <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" style="display:inline;">
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
