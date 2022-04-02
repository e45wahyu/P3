@extends('manager.manager_master')
@section('content')
{{-- ini adalah kont- en --}}
<div class="row">
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <h2 class="fw-bolder mb-0">{{ $meja }}</h2>
                    <p class="card-text"><i class="fas fa-table"></i> Meja</p>
                </div>
                <div class="avatar bg-light-primary p-50 m-0">
                    <div class="avatar-content">
                        <i data-feather="cpu" class="font-medium-5"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-header">
                <div>
                    <h2 class="fw-bolder mb-0">{{ $barang }}</h2>
                    <p class="card-text"><i class="fas fa-utensils"></i> Menu</p>
                </div>
                <div class="avatar bg-light-primary p-50 m-0">
                    <div class="avatar-content">
                        <i data-feather="cpu" class="font-medium-5"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
