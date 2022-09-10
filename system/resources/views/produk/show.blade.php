@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        Detail Data Produk
                    </div>
                    <div class="card-body">
                        <h4>{{ $produk->nama }}</h4>
                        <hr>
                        <p> $.{{ $produk->harga }} |
                            Stok : {{ $produk->stok }} |
                            Berat : {{ $produk->berat }} gr |
                            Seller : {{ $produk->seller->nama }} |
                            Tanggal Ditambahkan : {{ $produk->created_at->diffForHumans() }}
                        </p>
                        <p>
                            {!! nl2br($produk->deskripsi) !!}
                        </p>
                        <p>
                            <img src="{{ url('public', $produk->foto) }}" alt="">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
