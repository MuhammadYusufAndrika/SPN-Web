<!-- resources/views/admin/contact/index.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manage Services</h1>
    <a href="{{ route('admin.contact.create') }}" class="btn btn-primary">Add New Service</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Hp</th>
                <th>Deskripsi Keluhan</th>
                <th>Tanggal Pengaduan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengaduans as $pengaduan)
            <tr>
                <td>{{ $pengaduan->id }}</td>
                <td>{{ $pengaduan->nama }}</td>
                <td>{{ $pengaduan->email }}</td>
                <td>{{ $pengaduan->alamat }}</td>
                <td>{{ $pengaduan->no_hp }}</td>
                <td>{{ $pengaduan->deskripsi_keluhan }}</td>
            <td>{{ $pengaduan->tanggal_pengaduan }}</td>
                <td>
                    <a href="{{ route('admin.contact.edit', $pengaduan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.contact.destroy', $pengaduan->id) }}" method="POST" style="display:inline;">
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
