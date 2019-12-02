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
                <div class="container">
                    <p>{!! $category->deskripsi !!}</p>
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
                                <img src="{{ asset('img/products/'.$product->images[0]->foto) }}" alt="{{ $product->images[0]->foto }}">
                                <div class="order_prise">
                                    <span>{{ number_format($product->harga, 2, ',', '.') }}</span>
                                </div>
                            </div>
                            <div class="order_info">
                                <h3 class="judul"><a href="#">{{ $product->nama_produk }}</a></h3>
                                <a href="#" class="boxed_btn">Order Now!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $products->links() }}
            </div>
        </div>
    </div>
<!-- order_area_end -->

<!-- breadcam_area_start -->
    <div class="breadcam_area parallax zigzag_bg_2 text-dark" style="background-image: url({{ asset('img/categories/'.$category->foto) }})">
        <div class="breadcam_inner">
            <div class="breadcam_text">
                <h3>Keunggulan</h3>
                <p>{!! $category->keunggulan !!}</p>
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
                        <h3>Brands love to take Our Services</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                            standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($brands as $brand)
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