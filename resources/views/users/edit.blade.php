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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <form action=" {{ route('users.update', auth()->user()) }} " method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="password_saat_ini">Password saat ini</label>
                            <input type="password" class="form-control  @error('password_saat_ini') is-invalid @enderror" id="password_saat_ini" name="password_saat_ini">
                            @error('password_saat_ini')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_baru">Password Baru</label>
                            <input type="password" class="form-control  @error('password_baru') is-invalid @enderror" id="password_baru" name="password_baru">
                            @error('password_baru')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="konfirmasi_password">Konfirmasi Password</label>
                            <input type="password" class="form-control  @error('konfirmasi_password') is-invalid @enderror" id="konfirmasi_password" name="konfirmasi_password">
                            @error('konfirmasi_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="genric-btn success btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection