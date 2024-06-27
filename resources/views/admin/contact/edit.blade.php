@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Services</h1>
    <form action="{{ route('admin.contact.update', $pengaduan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Name</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pengaduan->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $pengaduan->email }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pengaduan->alamat }}" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $pengaduan->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi_keluhan" class="form-label">Deskripsi Keluhan</label>
            <input type="text" class="form-control" id="deskripsi_keluhan" name="deskripsi_keluhan" value="{{ $pengaduan->deskripsi_keluhan }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_pengaduan" class="form-label">Tanggal Pengaduan</label>
            <input type="date" class="form-control" id="tanggal_pengaduan" name="tanggal_pengaduan" value="{{ $pengaduan->tanggal_pengaduan }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Pengaduan</button>
    </form>
</div>
@endsection
