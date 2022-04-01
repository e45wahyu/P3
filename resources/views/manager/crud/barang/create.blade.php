@extends('manager.manager_master')
@section('content')
<h2>Tambah Data Menu</h2>
<form method="POST" action="{{route('manager.barang.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="namabarang">Nama Menu : </label>
        <input type="Text" class="form-control" name="namabarang" id="namabarang" aria-describedby="helpId"
            placeholder="Masukkan Nama Menu" required>
        <small id="helpId" class="form-text text-muted">Masukan Nama Menu</small>
    </div>
    <div class="form-group">
        <label for="hargabarang">Harga Menu : </label>
        <input type="number" class="form-control" name="hargabarang" id="hargabarang" aria-describedby="helpId"
            placeholder="Masukan Harga Menu" required>
        <small id="helpId" class="form-text text-muted">Harga Menu</small>
    </div>
    <div class="form-group">
        <label for="ketersediaan">Ketersediaan Menu : </label>
        <select class="form-control mb-3" id="ketersediaan" name="ketersediaan" required>
            <option selected value="" required>Ketersediaan Menu</option>
            <option value="tersedia">Tersedia</option>
            <option value="tidak tersedia">Tidak Tersedia</option>
        </select>
        <small id="helpId" class="form-text text-muted">Ketersediaan Menu</small>
    </div>
    <div class="form-group">
        <label for="gambarbarang">Gambar Menu : </label>
        <input type="file" class="form-control" name="gambarbarang" id="gambarbarang" aria-describedby="helpId"
            placeholder="Gambar Menu" accept="image/*">
        <small id="helpId" class="form-text text-muted">Gambar Menu</small>
    </div>
    <div class="form-group">
        <label for="kategoribarang">Kategori : </label>
        <select class="form-control mb-3" id="kategoribarang" name="kategoribarang" required>
            <option selected value="">Kategori</option>
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
        </select>
        <small id="helpId" class="form-text text-muted">Ketersediaan Menu</small>
    </div>
    <div class="form-group">
        <label for="deskripsibarang">Deskripsi Menu : </label>
        <textarea name="deskripsibarang" id="deskripsibarang" class="form-control" cols="30" rows="2" required></textarea>
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
