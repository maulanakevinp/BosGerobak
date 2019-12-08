@extends('layouts.master')

@section('title')
    {{ $subtitle }} - {{ config('app.name') }}
@endsection

@section('content')
<!-- breadcam_area_start -->
    <div class="breadcam_area parallax zigzag_bg_2 text-dark" style="background-image: url({{ asset('img/categories/'.$produk->category->foto) }})">
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
    
    <div class="mb-3">
        <h3>Foto</h3>
        <button class="genric-btn info" onclick="tambah()">Tambah Foto</button>
    </div>
    <div class="row">
        
        @for ($i = 0; $i < $produk->images->count(); $i++)
            <div class="col-lg-4 col-md-6 mb-3">
                <div class="card shadow">
                    <div class="card-body">
                        <img class="mb-1" src="{{ asset('img/products/'. $produk->images[$i]->foto) }}" alt="{{ $produk->images[$i]->foto }}" width="100%" height="250px">
                        @if ($i != 0)
                            <form action="{{ route('images.destroy', $produk->images[$i]) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-block mb-1" onclick="return confirm('Apakah anda yakin ingin menghapus foto ini ?');">Hapus foto</button>
                            </form>
                        @endif
                        <form action=" {{ route('images.update', $produk->images[$i]) }} " method="post" enctype="multipart/form-data">
                            @csrf @method('patch')
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto"
                                        aria-describedby="foto" required>
                                    <label class="custom-file-label" for="foto">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit">Unggah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endfor
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $produk) }}" enctype="multipart/form-data">
                        @csrf @method('patch')
                        
                        <div class="form-group row">
                            <label for="nama_produk" class="col-md-2 col-form-label text-md-right">{{ __('Nama Produk') }}</label>

                            <div class="col-md-10">
                                <input type="text" id="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" placeholder="Masukkan nama produk" value="{{ old('nama_produk', $produk->nama_produk) }}">

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
                                <input onkeypress="return hanyaAngka(event)" type="text" id="harga" class="form-control @error('harga') is-invalid @enderror" name="harga" placeholder="Masukkan harga" value="{{ old('harga', $produk->harga) }}">

                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-2  text-md-right">
                                <label for="spesifikasi" class="col-form-label">{{ __('Spesifikasi') }}</label>
                                <br><small class="text-info">(Tidak Wajib)</small>
                            </div>

                            <div class="col-md-10">
                                <textarea id="spesifikasi" class="form-control @error('spesifikasi') is-invalid @enderror" name="spesifikasi" placeholder="Masukkan deskripsi kategori">{{ old('spesifikasi', $produk->spesifikasi) }}</textarea>

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
                                <a href="{{ route('products.show',['product' => $produk, 'nama_produk' => str_replace(' ','-', $produk->nama_produk)]) }}" class="genric-btn primary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal_start -->
    <div id="modalFoto" class="mymodal">
        <div class="mymodal-content">
            <div class="mymodal-header">
                <h2 id="judulModal" class="text-white pt-2">Tambah Foto</h2>
            </div>
            <form id="formModal" action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input id="method" type="hidden" name="_method" value="post">
                <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                <div class="mymodal-body">
                    <div class="form-group">
                        <div class="text-center">
                            <img src="" alt="" id="image" class="mw-100">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('foto') is-invalid @enderror" id="foto" name="foto">
                            <label class="custom-file-label" for="foto">Pilih Foto @error('foto') Harus diisi @enderror</label>
                        </div>
                    </div>
                </div>
                <div class="mymodal-footer p-2">
                    <a onclick="tutup()" class="btn btn-outline-dark">Tutup</a>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
<!-- modal_end -->
@endsection

@push('scripts')
    <script>
        CKEDITOR.replace( 'spesifikasi' );

        // Get the modal
        var modal = document.getElementById("modalFoto");

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function tutup() {
            modal.style.display = "none";
        }
        
        function tambah() {
            modal.style.display = "block";
        }

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