@extends('layouts.master')

@section('title')
    {{ $subtitle }} - {{ config('app.name') }}
@endsection

@section('content')
<!-- breadcam_area_start -->
    <div class="breadcam_area parallax zigzag_bg_2 text-dark" style="background-image: url({{ asset('img/sliders/'.\App\Slider::find(1)->foto) }})">
        <div class="breadcam_inner">
            <div class="breadcam_text">
                <h3>{{ $subtitle }}</h3>
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
                    <form method="POST" action="{{ route('utilitas.update', $utility) }}" enctype="multipart/form-data">
                        @csrf   @method('patch')

                        <div class="form-group row">
                            <label for="logo_perusahaan" class="col-md-2 col-form-label text-md-right">{{ __('Logo Perusahaan') }}</label>
                            <div class="col-md-2">
                                <div class="text-center">
                                    <img id="image" src="{{ asset('img/logo/'.$utility->logo_perusahaan) }}" alt="{{ $utility->logo_perusahaan }}" class="img-thumbnail mw-100">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('logo_perusahaan') is-invalid @enderror" id="logo_perusahaan" name="logo_perusahaan">
                                    <label class="custom-file-label" for="logo_perusahaan">Pilih logo perusahaan @error('logo_perusahaan') Harus diisi @enderror</label>
                                </div>
                                <small>Catatan : Ukuran maksimal foto yaitu 150x150 pixel</small>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="tentang_kami" class="col-md-2 col-form-label text-md-right">{{ __('Tentang Kami') }} <span class="text-danger h5">*</span></label>

                            <div class="col-md-10">
                                <textarea id="tentang_kami" class="form-control @error('tentang_kami') is-invalid @enderror" name="tentang_kami" placeholder="Masukkan tentang kami">{{ old('tentang_kami', $utility->tentang_kami) }}</textarea>

                                @error('tentang_kami')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="deskripsi_kategori" class="col-md-2 col-form-label text-md-right">{{ __('Deskripsi Kategori') }}</label>

                            <div class="col-md-10">
                                <textarea id="deskripsi_kategori" class="form-control @error('deskripsi_kategori') is-invalid @enderror" name="deskripsi_kategori" placeholder="Masukkan deskripsi kategori">{{ old('deskripsi_kategori', $utility->deskripsi_kategori) }}</textarea>

                                @error('deskripsi_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul_testimoni" class="col-md-2 col-form-label text-md-right">{{ __('Judul Testimoni') }} <span class="text-danger h5">*</span></label>

                            <div class="col-md-10">
                                <input id="judul_testimoni" type="text" class="form-control @error('judul_testimoni') is-invalid @enderror" name="judul_testimoni" value="{{ old('judul_testimoni', $utility->judul_testimoni) }}" placeholder="Masukkan judul testimoni" autocomplete="off">

                                @error('judul_testimoni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi_testimoni" class="col-md-2 col-form-label text-md-right">{{ __('Deskripsi Testimoni') }}</label>

                            <div class="col-md-10">
                                <textarea id="deskripsi_testimoni" class="form-control @error('deskripsi_testimoni') is-invalid @enderror" name="deskripsi_testimoni" placeholder="Masukkan deskripsi testimoni">{{ old('deskripsi_testimoni', $utility->deskripsi_testimoni) }}</textarea>

                                @error('deskripsi_testimoni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul_brands" class="col-md-2 col-form-label text-md-right">{{ __('Judul Brands') }} <span class="text-danger h5">*</span></label>

                            <div class="col-md-10">
                                <input id="judul_brands" type="text" class="form-control @error('judul_brands') is-invalid @enderror" name="judul_brands" value="{{ old('judul_brands', $utility->judul_brands) }}" placeholder="Masukkan judul brands" autocomplete="off">

                                @error('judul_brands')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi_brands" class="col-md-2 col-form-label text-md-right">{{ __('Deskripsi Brands') }}</label>

                            <div class="col-md-10">
                                <textarea id="deskripsi_brands" class="form-control @error('deskripsi_brands') is-invalid @enderror" name="deskripsi_brands" placeholder="Masukkan deskripsi brands">{{ old('deskripsi_brands', $utility->deskripsi_brands) }}</textarea>

                                @error('deskripsi_brands')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link_facebook" class="col-md-2 col-form-label text-md-right">{{ __('Link Facebook') }}</label>

                            <div class="col-md-10">
                                <input id="link_facebook" type="text" class="form-control @error('link_facebook') is-invalid @enderror" name="link_facebook" value="{{ old('link_facebook', $utility->link_facebook) }}" placeholder="Masukkan judul testimoni" autocomplete="off">

                                @error('link_facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link_instagram" class="col-md-2 col-form-label text-md-right">{{ __('Link Instagram') }}</label>

                            <div class="col-md-10">
                                <input id="link_instagram" type="text" class="form-control @error('link_instagram') is-invalid @enderror" name="link_instagram" value="{{ old('link_instagram', $utility->link_instagram) }}" placeholder="Masukkan judul testimoni" autocomplete="off">

                                @error('link_instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link_twitter" class="col-md-2 col-form-label text-md-right">{{ __('Link Twitter') }}</label>

                            <div class="col-md-10">
                                <input id="link_twitter" type="text" class="form-control @error('link_twitter') is-invalid @enderror" name="link_twitter" value="{{ old('link_twitter', $utility->link_twitter) }}" placeholder="Masukkan judul testimoni" autocomplete="off">

                                @error('link_twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="link_youtube" class="col-md-2 col-form-label text-md-right">{{ __('Link Youtube') }}</label>

                            <div class="col-md-10">
                                <input id="link_youtube" type="text" class="form-control @error('link_youtube') is-invalid @enderror" name="link_youtube" value="{{ old('link_youtube', $utility->link_youtube) }}" placeholder="Masukkan judul testimoni" autocomplete="off">

                                @error('link_youtube')
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
        CKEDITOR.replace( 'deskripsi_kategori' );
        CKEDITOR.replace( 'deskripsi_testimoni' );
        CKEDITOR.replace( 'deskripsi_brands' );

        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            readURL(this);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush