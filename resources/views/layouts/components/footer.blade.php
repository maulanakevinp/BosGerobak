<footer class="footer_area footer-bg zigzag_bg_1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Top Products
                            </h3>
                            <ul>
                                @foreach (\App\Category::all() as $category)
                                    <li><a href="{{ route('categories.show', ['any' => strtolower(str_replace(' ','-', $category->nama_kategori))]) }}">{{ $category->nama_kategori }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Company
                            </h3>
                            <ul>
                                <li><a href="{{url('/')}}/template/#">Tentang Kami</a></li>
                                <li><a href="{{url('/')}}/template/#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    Contact
                            </h3>
                            <ul>
                                <li><a href="{{url('/')}}/template/#">Kontak Kami</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2"></div>
                    <div class="col-xl-4 col-md-12 col-lg-4">
                        <div class="footer_widget">
                            <img class="float-right" src="{{ asset('/img/logo/'.\App\Utility::find(1)->logo_perusahaan) }}" alt="{{ \App\Utility::find(1)->logo_perusahaan }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-12 col-lg-8">
                        <div class="copyright">
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;{{ now()->year }} {{ config('app.name') }} All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{url('/')}}/template/https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> | Developed by <a href="https://lavinza.me">Lavinza</a> </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12 col-lg-4">
                        <div class="social_links">
                            <ul>
                                @if (\App\Utility::find(1)->facebook)
                                    <li><a href="{{ \App\Utility::find(1)->facebook }}"> <i class="fa fa-facebook"></i> </a></li>
                                @endif
                                @if (\App\Utility::find(1)->twitter)
                                    <li><a href="{{ \App\Utility::find(1)->twitter }}"> <i class="fa fa-twitter"></i> </a></li>
                                @endif
                                @if (\App\Utility::find(1)->instagram)
                                    <li><a href="{{ \App\Utility::find(1)->instagram }}"> <i class="fa fa-instagram"></i> </a></li>
                                @endif
                                @if (\App\Utility::find(1)->youtube)
                                    <li><a href="{{ \App\Utility::find(1)->youtube }}"> <i class="fa fa-youtube"></i> </a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>