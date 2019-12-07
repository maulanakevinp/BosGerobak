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
                    <form method="POST" action="{{ route('kategori.update', $kategori) }}" enctype="multipart/form-data">
                        @csrf   @method('patch')

                        <div class="text-center">
                            <img id="image" src="{{ asset('img/categories/'.$kategori->foto) }}" alt="{{ $kategori->foto }}" class="mw-100 mb-3">
                        </div>
                        <div class="form-group row">
                            <label for="foto" class="col-md-2 col-form-label text-md-right">{{ __('Foto') }}</label>
                            <div class="col-md-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('foto') is-invalid @enderror" id="foto" name="foto">
                                    <label class="custom-file-label" for="foto">Pilih foto @error('foto') harus diisi @enderror</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nama_kategori" class="col-md-2 col-form-label text-md-right">{{ __('Nama Kategori') }}</label>

                            <div class="col-md-10">
                                <input id="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" placeholder="Masukkan nama kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}">

                                @error('nama_kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">{{ __('Deskripsi') }}</label>

                            <div class="col-md-10">
                                <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Masukkan deskripsi">{{ old('deskripsi', $kategori->deskripsi) }}</textarea>

                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="keunggulan" class="col-md-2 col-form-label text-md-right">{{ __('Keunggulan') }}</label>

                            <div class="col-md-10">
                                <textarea id="keunggulan" class="form-control @error('keunggulan') is-invalid @enderror" name="keunggulan" placeholder="Masukkan keunggulan">{{ old('keunggulan', $kategori->keunggulan) }}</textarea>

                                @error('keunggulan')
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
                                <a href="{{ route('kategori.index') }}" class="genric-btn primary">Kembali</a>
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
        CKEDITOR.replace( 'keunggulan' );
        CKEDITOR.replace( 'deskripsi' );

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