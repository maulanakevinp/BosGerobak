@extends('layouts.master')

@section('title')
    {{ $title }} - {{ config('app.name') }}
@endsection

@section('content')
<!-- slider_area-start -->
    <div class="slider_area zigzag_bg_2">
        <div class="slider_sctive owl-carousel">
            <div class="single_slider" style="background-image: url({{url('/')}}//img/sliders/{{ $sliders[0]->foto }})">
                @if ($sliders[0]->judul && $sliders[0]->deskripsi)
                    <div class="single_slider-iner">
                        <div class="slider_contant text-center">
                            <h3>{{ $sliders[0]->judul }}</h3>
                                <p>{{ $sliders[0]->deskripsi }}</p>
                        </div>
                    </div>
                @endif
            </div>
            @for ($i = 0; $i < $sliders->count(); $i++)
                @if ($i == 0)
                    <?php continue; ?>
                @endif
                <div class="single_slider" style="background-image: url({{url('/')}}/img/sliders/{{ $sliders[$i]->foto }})">
                    @if ($sliders[$i]->judul && $sliders[$i]->deskripsi)
                        <div class="single_slider-iner">
                            <div class="slider_contant text-center">
                                <h3>{{ $sliders[$i]->judul }}</h3>
                                    <p>{{ $sliders[$i]->deskripsi }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            @endfor
        </div>
    </div>
<!-- slider_area-end -->

<!-- service_area-start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Kategori</h3>
                        {!! $utility->deskripsi_kategori !!}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($categories as $category)
                    <div class="col-xl-4 col-md-6">
                        <a class="card-link" href="{{ route('categories.show', ['any' => strtolower(str_replace(' ','-', $category->nama_kategori))]) }}">
                            <div class="single_service">
                                <div class="service_icon">
                                    <img class="mw-100" src="{{ asset('/img/categories/'.$category->foto) }}" alt="">
                                </div>
                                <h4 class="judul">{{ $category->nama_kategori }}</h4>
                                <p class="isi-deskripsi">{{ $category->deskripsi }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- service_area-end -->

<!-- testmonial_area_start -->
    <div class="testmonial_area parallax" style="background-image: url({{asset('/img/sliders/'.$sliders[0]->foto)}});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white mb-60">
                        <h3>{{ $utility->judul_testimoni }}</h3>
                        {!! $utility->deskripsi_testimoni !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        @foreach ($testimonials as $testimonial)
                            <div class="single_testmonial d-flex">
                                <img class="mw-100" src="{{ asset('/img/testimonials/'.$testimonial->foto) }}" alt="{{ $testimonial->foto }}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- testmonial_area_end -->

<!-- brand_area-start -->
    <div class="brand_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>{{ $utility->judul_brands }}</h3>
                        {!! $utility->deskripsi_brands !!}
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
