@extends('manager.manager_master')
@section('content')
<h2>Tambah Data Menu</h2>
<form method="POST" action="{{route('manager.meja.store')}}">
    @csrf
    <div class="form-group">
        <label for="nomor_meja">Nama Menu : </label>
        <input type="Text" class="form-control" name="nama_menu" id="nama_menu" aria-describedby="helpId"
            placeholder="Masukkan Nama Menu">
        <small id="helpId" class="form-text text-muted">Masukan Nama Menu</small>
    </div>
    <div class="form-group">
        <label for="nomor_meja">Harga Menu : </label>
        <input type="number" class="form-control" name="harga_menu" id="harga_menu" aria-describedby="helpId"
            placeholder="Masukan Harga Menu">
        <small id="helpId" class="form-text text-muted">Harga Menu</small>
    </div>
    <div class="form-group">
        <select class="form-control mb-3">
            <option selected>Ketersediaan Menu</option>
            <option value="1">Tersedia</option>
            <option value="2">Tidak Tersedia</option>
        </select>
        <small id="helpId" class="form-text text-muted">Ketersediaan Menu</small>
    </div>
    <div class="form-group">
        <label for="nomor_meja">Gambar Menu : </label>
        <input type="file" class="form-control" name="gambar_menu" id="gambar_menu" aria-describedby="helpId"
            placeholder="Gambar Menu">
        <small id="helpId" class="form-text text-muted">Gambar Menu</small>
    </div>
    <div class="form-group">
        <label for="nomor_meja">Deskripsi Menu : </label>
        <input type="text" class="form-control" name="deskripsi_menu" id="deskripsi_menu" aria-describedby="helpId"
            placeholder="Deskripsi Menu">
        <small id="helpId" class="form-text text-muted">Deskripsi Menu</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@push('script')
<script>
    $(document).ready(function () {
        $('.table').DataTable();
    });

</script>
@endpush
