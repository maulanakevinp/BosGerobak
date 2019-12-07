@extends('layouts.master')

@section('title')
    {{ $title }} - {{ config('app.name') }}
@endsection

@section('content')
<!-- breadcam_area_start -->
    <div class="breadcam_area parallax zigzag_bg_2 text-dark" style="background-image: url({{ asset('img/categories/'.$category->foto) }})">
        <div class="breadcam_inner">
            <div class="breadcam_text">
                <h3>{{ $category->nama_kategori }}</h3>
                <div class="container text-white">
                    {!! $category->deskripsi !!}
                    @if (auth()->user())
                        <a href="{{ route('products.create',$category) }}" class="genric-btn primary mt-5">Tambah Produk</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
<!-- breadcam_area_end -->

<!-- order_area_start -->
    <div class="order_area">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-xl-4 col-md-6">
                        <div class="single_order">
                            <div class="order_thumb">
                                <a href="{{ route('products.show',['product' => $product, 'nama_produk' => str_replace(' ','-', $product->nama_produk)]) }}">
                                    <img src="{{ asset('img/products/'.$product->images[0]->foto) }}" alt="{{ $product->images[0]->foto }}">
                                </a>
                                <div class="order_prise">
                                    <span>Rp. {{ number_format($product->harga, 2, ',', '.') }}</span>
                                </div>
                            </div>
                            <div class="order_info">
                                <h3 class="judul"><a href="{{ route('products.show',['product' => $product, 'nama_produk' => str_replace(' ','-', $product->nama_produk)]) }}">{{ $product->nama_produk }}</a></h3>
                                <a target="_blank" href="https://api.whatsapp.com/send?phone={{ whatsapp(\App\Contact::find(1)->nomor_whatsapp) }}&text=Halo,%20Saya%20ingin%20pesan%20Gerobak%20{{ $product->nama_produk }}%0A{{ route('products.show',['product' => $product, 'nama_produk' => str_replace(' ','-', $product->nama_produk)]) }}" class="boxed_btn">Pesan sekarang!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $products->links() }}
        </div>
    </div>
<!-- order_area_end -->

<!-- breadcam_area_start -->
    <div class="breadcam_area parallax zigzag_bg_2 text-dark" style="background-image: url({{ asset('img/categories/'.$category->foto) }})">
        <div class="breadcam_inner">
            <div class="breadcam_text">
                <h3>Keunggulan</h3>
                <div class="container text-white">
                    {!! $category->keunggulan !!}
                </div>
            </div>
        </div>
    </div>
<!-- breadcam_area_end -->

<!-- brand_area-start -->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>{{ \App\Utility::find(1)->judul_brands }}</h3>
                        {!! \App\Utility::find(1)->deskripsi_brands !!}
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ( \App\Brand::all() as $brand)
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="single_brand">
                            <img src="{{asset('/img/brands/'.$brand->foto)}}" alt="{{ $brand->foto }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- brand_area-end -->
@endsection