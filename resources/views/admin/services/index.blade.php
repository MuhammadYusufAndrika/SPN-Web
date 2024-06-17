<!-- resources/views/admin/services/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manage Services</h1>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add New Service</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->description }}</td>
                <td>
                    <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline;">
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
