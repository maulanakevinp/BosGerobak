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
                <button onclick="tambah()" class="genric-btn primary">Tambah Testimoni</button>
            </div>
        </div>
    </div>
<!-- breadcam_area_end -->

<!-- testimoni_start -->
    <div class="service_area">
        <div class="container">
            
            <!-- Notification -->
            @if ($errors->any())<div class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
            <!-- /.Notification -->

            <div class="row justify-content-center">
                @foreach ($testimonials as $testimoni)
                    <div class="col-lg-4">
                        <div class="single_service">
                            <div class="service_icon">
                                <img class="mw-100" src="{{ asset('/img/testimonials/'.$testimoni->foto) }}" alt="">
                            </div>
                            <div class="d-inline-block">
                                <button onclick="edit({{$testimoni->id}})" class="genric-btn success-border mt-3" data-toggle="modal">Ubah</button>
                                @if ($testimoni->id != 1)
                                    <form class="d-inline-block" action="{{ route('testimoni.destroy', $testimoni) }}" method="POST">
                                        @csrf @method('delete')
                                        <button type="submit" class="genric-btn danger" onclick="return confirm('Apakah anda yakin ingin menghapus testimoni ini??')">Hapus</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- testimoni_end -->

<!-- modal_start -->
    <div id="modalTestimoni" class="mymodal">
        <div class="mymodal-content">
            <div class="mymodal-header">
                <h2 id="judulModal" class="text-white pt-2">Tambah Testimoni</h2>
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
        // Get the modal
        var modal = document.getElementById("modalTestimoni");

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
            $('#judulModal').html('Tambah Testimoni');
            $('#formModal').attr('action', "{{ route('testimoni.store') }}");
            $('#image').attr('src', "");
            $('#method').val('post');
        }

        function edit(id) {
            modal.style.display = "block";
            $('#judulModal').html('Ubah Testimoni');
            $('#formModal').attr('action', "{{ url('/testimoni') }}" + "/" + id);
            $('#method').val('patch');
            $.ajax({
                url: "{{ url('/get-testimoni') }}",
                method: 'post',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function (data) {
                    $('#image').attr('src', "{{ url('/img/testimonials') }}" + "/" + data.foto);
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