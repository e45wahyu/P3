@extends('manager.manager_master')
@section('content')
<a href="{{ route('manager.barang.create') }}" class="btn btn-primary mb-4">[+] Tambah Menu Baru</a>
<table class="table table-bordered">
   <thead>
      <tr>
         <th>No</th>
         <th>Nama Menu</th>
         <th>Kategori</th>
         <th>Status Ketersediaan Produk</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($barang as $item)
          <tr>
             <td>{{ $loop->iteration }}</td>
             <td>{{ $item->namabarang }}</td>
             <td>{{ $item->kategoribarang }}</td>
             <td>{{ $item->ketersediaan }}</td>
             <td>
                  <a href="{{ route('manager.barang.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                  <form action="{{ route('manager.barang.destroy', $item->id) }}" method="POST" class="d-inline">
                     @method('delete')
                     @csrf
                     <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
             </td>
          </tr>
      @endforeach
   </tbody>
</table>
@endsection
@push('script')
    <script>
         $(document).ready(function () {
               $('.table').DataTable()
         });   
    </script>
@endpush