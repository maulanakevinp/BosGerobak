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
                <button onclick="tambah()" class="genric-btn primary">Tambah Slider</button>
            </div>
        </div>
    </div>
<!-- breadcam_area_end -->

<!-- slider_start -->
    <div class="service_area">
        <div class="container">
            
            <!-- Notification -->
            @if ($errors->any())<div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
            <!-- /.Notification -->

            <div class="row justify-content-center">
                @foreach ($categories as $category)
                    <div class="col-lg-6">
                        <div class="single_service">
                            <div class="service_icon">
                                <img class="mw-100" src="{{ asset('/img/categories/'.$category->foto) }}" alt="">
                            </div>
                            <h4 class="judul">{{ $category->nama_kategori }}</h4>
                            <p class="isi-deskripsi">{{ $category->deskripsi }}</p>
                            <div class="d-inline-block">
                                <button onclick="edit({{$category->id}})" class="genric-btn success-border mt-3" data-toggle="modal">Ubah</button>
                                @if ($category->id != 1)
                                    <form class="d-inline-block" action="{{ route('kategori.destroy', $category) }}" method="POST">
                                        @csrf @method('delete')
                                        <button type="submit" class="genric-btn danger" onclick="return confirm('Apakah anda yakin ingin menghapus kategori {{$category->nama_kategori}} ini?')">Hapus</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- slider_end -->

<!-- modal_start -->
    <div id="modalKategori" class="mymodal">
        <div class="mymodal-content">
            <div class="mymodal-header">
                <h2 id="judulModal" class="text-white">Tambah Kategori</h2>
            </div>
            <form id="formModal" action="" method="post" enctype="multipart/form-data">
                @csrf
                <input id="method" type="hidden" name="_method" value="post">
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
                    <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" id="nama_kategori" placeholder="Masukkan nama kategori">
                        @error('nama_kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                        @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group">
                        <label for="keunggulan">Keunggulan</label>
                        <textarea name="keunggulan" id="keunggulan" rows="3" class="form-control @error('keunggulan') is-invalid @enderror"></textarea>
                        @error('keunggulan') <div class="invalid-feedback">{{ $message }}</div> @enderror
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

        CKEDITOR.replace( 'keunggulan' );
        // Get the modal
        var modal = document.getElementById("modalKategori");

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
            $('#judulModal').html('Tambah Slide Show');
            $('#formModal').attr('action', "{{ route('kategori.store') }}");
            $('#image').attr('src', "");
            $('#nama_kategori').val("");
            $('#deskripsi').val("");
            $('#keunggulan').val("");
            $('#method').val('post');
        }

        function edit(id) {
            modal.style.display = "block";
            $('#judulModal').html('Ubah Slide Show');
            $('#formModal').attr('action', "{{ url('/kategori') }}" + "/" + id);
            $('#method').val('patch');
            $.ajax({
                url: "{{ url('/get-kategori') }}",
                method: 'post',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function (data) {
                    $('#image').attr('src', "{{ url('/img/categories') }}" + "/" + data.foto);
                    $('#nama_kategori').val(data.nama_kategori);
                    $('#deskripsi').val(data.deskripsi);
                    $('#keunggulan').append(data.keunggulan);
                }
            });
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