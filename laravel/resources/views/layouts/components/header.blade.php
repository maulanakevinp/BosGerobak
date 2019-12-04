<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul class="mein_menu_list" id="navigation">
                                    <div class="logo-img d-none d-lg-block">
                                        <a href="{{url('/')}}">
                                            <img src="{{ asset('/img/logo/'.\App\Utility::find(1)->logo_perusahaan) }}" alt="{{ asset('/img/logo/'.\App\Utility::find(1)->logo_perusahaan) }}">
                                        </a>
                                    </div>
                                    @foreach (\App\Category::all() as $category)
                                        <li><a class="{{ $category->nama_kategori == $title ? 'active' : '' }}" href="{{ route('categories.show', ['any' => strtolower(str_replace(' ','-', $category->nama_kategori))]) }}">{{ $category->nama_kategori }}</a></li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                    <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('/img/logo/'.\App\Utility::find(1)->logo_perusahaan) }}" alt="{{ asset('/img/logo/'.\App\Utility::find(1)->logo_perusahaan) }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>