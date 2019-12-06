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
                    <form method="POST" action="{{ route('contacts.update', $contact) }}">
                        @csrf   @method('patch')

                        <div class="form-group row">
                            <label for="nomor_telepon" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>

                            <div class="col-md-6">
                                <input id="nomor_telepon" onkeypress="return hanyaAngka(event)" type="text" class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" value="{{ old('nomor_telepon', $contact->nomor_telepon) }}" required autofocus placeholder="Masukkan nomor telepon" autocomplete="off">

                                @error('nomor_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomor_whatsapp" class="col-md-4 col-form-label text-md-right">{{ __('Nomor WhatsApp') }}</label>

                            <div class="col-md-6">
                                <input id="nomor_whatsapp" onkeypress="return hanyaAngka(event)" type="text" class="form-control @error('nomor_whatsapp') is-invalid @enderror" name="nomor_whatsapp" value="{{ old('nomor_whatsapp', $contact->nomor_whatsapp) }}" required placeholder="Masukkan nomor whatsapp" autocomplete="off">

                                @error('nomor_whatsapp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required placeholder="Masukkan alamat">{{ old('alamat', $contact->alamat) }}</textarea>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
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