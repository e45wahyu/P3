@extends('kasir.kasir_master')
@section('content')
@push('style')
    <style>
        .card-img-top {
    width: 100%;
    height: 10vw;
    object-fit: cover;
}
    </style>
@endpush
<div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="row">
            @foreach ($barang as $produk)
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        {{-- {{ $produk }} --}}
                        <img class="card-img-top" src="{{ $produk->foto }}" alt="Foto">
                        <h4>{{ $produk->namabarang }}</h4>
                        <h4>Rp. {{ number_format($produk->hargabarang) }}</h4>
                        <hr>
                        <h4>{{ ucfirst($produk->kategoribarang) }}</h4>
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="jumlah">Quantity : </label>
                              <input type="number"
                                class="form-control" name="quantity" id="quantity" min="1" value="1" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="text-muted">Quantity</small>
                            </div>
                            <button type="submit" class="btn btn-success"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <div class="card">
            <div class="card-body">
                @foreach ( as $item)
                    
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection