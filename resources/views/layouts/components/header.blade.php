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
                                    @if (auth()->user())
                                        <li><a class="{{ $title == auth()->user() ? 'active' : '' }}" href="#">{{ auth()->user()->name }} <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('users.edit') }}">Ganti Password</a></li>
                                                <li><a href="{{ route('contacts.edit') }}">Ubah Kontak</a></li>
                                                <li><a href="{{ route('utilitas.edit') }}">Ubah Utilitas</a></li>
                                                <li><a href="{{ route('sliders.index') }}">Slide Show</a></li>
                                                <li><a href="{{ route('kategori.index') }}">Kategori</a></li>
                                                <li><a href="{{ route('testimoni.index') }}">Testimoni</a></li>
                                                <li><a href="{{ route('brands.index') }}">Brand</a></li>
                                                <li><a href="https://www.bosgerobak.com:2096">Email</a></li>
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <span>{{ __('Logout') }}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                    <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                        <a href="{{url('/')}}">
                            <img class="p-1" src="{{ asset('/img/logo/'.\App\Utility::find(1)->logo_perusahaan) }}" alt="{{ asset('/img/logo/'.\App\Utility::find(1)->logo_perusahaan) }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>