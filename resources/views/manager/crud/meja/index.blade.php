@extends('manager.manager_master')
@section('content')
<h2>Data Meja</h2>
<form method="POST" action="{{route('manager.meja.store')}}">
    @csrf
    <div class="form-group">
        <label for="nomor_meja">Nomor Meja : </label>
        <input type="number" class="form-control" name="nomor_meja" id="nomor_meja" aria-describedby="helpId"
            placeholder="Masukkan Nomor Meja">
        <small id="helpId" class="form-text text-muted">Masukkan Nomor Meja</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Meja</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($meja as $item)
            
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td>{{$item->nomor_meja}}</td>
            <td>
                <form action="{{route('manager.meja.destroy',$item->id)}}" method="post" onsubmit="return confirm('Yakin Dek?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
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
            $('.table').DataTable();
        });
    </script>
@endpush