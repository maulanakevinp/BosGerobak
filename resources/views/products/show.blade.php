@extends('layouts.master')

@section('title')
    {{ $subtitle }} - {{ config('app.name') }}
@endsection

@section('content')
<!-- breadcam_area_start -->
    <div class="breadcam_area parallax zigzag_bg_2 text-dark" style="background-image: url({{ asset('img/categories/'.$product->category->foto) }})">
        <div class="breadcam_inner">
            <div class="breadcam_text">
                <h3>{{ $product->nama_produk }}</h3>
                <div class="container">
                    <h4 class="h3 text-white">Rp. {{ number_format($product->harga, 2, ',', '.') }}</h4>
                    @if (auth()->user())
                        <a href="{{ route('products.edit',$product) }}" class="genric-btn success mt-5">Ubah Produk</a>
                        <form class="d-inline-block" action="{{ route('products.destroy',$product) }}" method="post">
                            @csrf @method('delete')
                            <button type="submit" class="genric-btn danger" onclick="return confirm('apakah anda yakin ingin menghapus produk ini???')">Hapus Produk</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
<!-- breadcam_area_end -->

<!-- gallery_area_start -->
    <div class="gallery_area">
        <div class="container">
            @if ($product->spesifikasi)
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-70">
                            <h3>Spesifikasi</h3>
                            {!! $product->spesifikasi !!}
                        </div>
                    </div>
                </div>
            @endif
            <div class="section_title mb-40">
                <h3>Foto</h3>
            </div>
            <div class="row grid">
                @foreach ($product->images as $image)
                    <div class="col-lg-4 col-md-6 grid-item">
                        <div class="single_gallery mini_height" style="background-image: url({{ asset('/img/products/'.$image->foto) }})">
                            <a href="{{ asset('/img/products/'.$image->foto) }}" class="popup-image"></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="load_more_button text-center">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone={{ whatsapp(\App\Contact::find(1)->nomor_whatsapp) }}&text=Halo,%20Saya%20ingin%20pesan%20Gerobak%20{{ $product->nama_produk }}%0A{{ route('products.show',['product' => $product, 'nama_produk' => str_replace(' ','-', $product->nama_produk)]) }}" class="load_more_btn">Pesan Sekarang!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- gallery_area_end -->
@endsection
