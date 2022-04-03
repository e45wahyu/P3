@extends('manager.manager_master')
@section('content')
<div class="row">
    <div class="col-12">
        <form action="{{ route('manager.petugas.store') }}" method="post">
            <div class="form-group">
                @csrf
                <label for="name">Nama Petugas : </label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="Masukkan Nama Petugas" required>
                <small id="helpId" class="form-text text-muted">Nama Petugas</small>
            </div>
            <div class="form-group">
                <label for="email">Email Petugas : </label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId"
                    placeholder="Masukkan Email Petugas" required>
                <small id="helpId" class="form-text text-muted">Email Petugas</small>
            </div>
            <div class="form-group">
                <label for="password">Password Petugas : </label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId"
                    placeholder="Masukkan Password Petugas" required>
                <small id="helpId" class="form-text text-muted">Password Petugas</small>
            </div>
            <div class="form-group">
                <label for="role">Role : </label>
                <select class="form-control" name="role" id="role" required>
                    <option value="">== Pilih Role ==</option>
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="kasir">Kasir</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Tambah User Baru</button>
            </div>
        </form>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama / Email Petugas</th>
            <th>Role Petugas</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>@foreach ($petugas as $petugas)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $petugas->name }} / {{ $petugas->email }}</td>
            <td>{{ $petugas->role }}</td>
            <td>
                <a href="{{ route('manager.petugas.edit', $petugas->id) }}"
                    class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('manager.petugas.destroy', $petugas->id) }}"
                    method="POST" class="d-inline"  onsubmit="return confirm('Hapus Data Ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
