@extends('layouts.master')

@section('title')
    {{ $subtitle }} - {{ config('app.name') }}
@endsection

@section('content')
<!-- breadcam_area_start -->
    <div class="breadcam_area parallax zigzag_bg_2 text-dark" style="background-image: url({{ asset('img/categories/'.$kategori->foto) }})">
        <div class="breadcam_inner">
            <div class="breadcam_text">
                <h3>{{ $subtitle }}</h3>
                <p><strong>{{ $title }}</strong></p>
            </div>
        </div>
    </div>
<!-- breadcam_area_end -->
<div class="container mt-5 mb-5">

    <!-- Notification -->
        @if ($errors->any())<div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
    <!-- /.Notification -->
    
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-body">
                    <form method="POST" action="{{ route('products.store', $kategori) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="kategori_id" value="{{ $kategori->id }}">
                        <div class="form-group row">
                            <label for="foto" class="col-md-2 col-form-label text-md-right">{{ __('Foto') }}</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" name="foto[]" multiple>
                                <small>Catatan : Pilih satu atau beberapa foto, perfoto maksimal 2mb</small>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nama_produk" class="col-md-2 col-form-label text-md-right">{{ __('Nama Produk') }}</label>

                            <div class="col-md-10">
                                <input type="text" id="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" placeholder="Masukkan nama produk" value="{{ old('nama_produk') }}" autocomplete="off">

                                @error('nama_produk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-2 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-10">
                                <input onkeypress="return hanyaAngka(event)" type="text" id="harga" class="form-control @error('harga') is-invalid @enderror" name="harga" placeholder="Masukkan harga" value="{{ old('harga') }}" autocomplete="off">

                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="spesifikasi" class="col-md-2 col-form-label text-md-right">{{ __('Spesifikasi') }}</label>

                            <div class="col-md-10">
                                <textarea id="spesifikasi" class="form-control @error('spesifikasi') is-invalid @enderror" name="spesifikasi" placeholder="Masukkan deskripsi kategori">{{ old('spesifikasi','
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td>Bahan</td>
                                                    <td>
                                                        <ul>
                                                            <li>- Bahan...</li>
                                                            <li>- Bahan...</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Gambar</td>
                                                    <td>
                                                        <ul>
                                                            <li>- Gambar...</li>
                                                            <li>- Gambar...</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Dinding Gerobak</td>
                                                    <td>
                                                        <ul>
                                                            <li>- Dinding...</li>
                                                            <li>- Dinding...</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Neon Box</td>
                                                    <td>
                                                        <ul>
                                                            <li>- Neon...</li>
                                                            <li>- Neon...</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Finishing</td>
                                                    <td>
                                                        <ul>
                                                            <li>- Finishing...</li>
                                                            <li>- Finishing...</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Roda</td>
                                                    <td>
                                                        <ul>
                                                            <li>- Roda...</li>
                                                            <li>- Roda...</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                ') }}</textarea>

                                @error('spesifikasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="genric-btn success">
                                    {{ __('Simpan') }}
                                </button>
                                <a href="{{ route('categories.show', ['any' => strtolower(str_replace(' ','-', $kategori->nama_kategori))]) }}" class="genric-btn primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        CKEDITOR.replace( 'spesifikasi' );

        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            readURL(this);
        });
    </script>
@endpush