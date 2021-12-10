<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('front/img/favicon.png') }}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ URL::asset('front/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('front/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('front/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ URL::asset('front/css/animate.min.css') }}">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{ URL::asset('front/css/font-awesome.min.css') }}">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{ URL::asset('front/vendor/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('front/vendor/OwlCarousel/owl.theme.default.min.css') }}">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{ URL::asset('front/css/meanmenu.min.css') }}">
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/css/magnific-popup.css') }}">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('front/css/hover-min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('front/css/style.css') }}">
    <!-- For IE -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/css/ie-only.css') }}" />
    <!-- Modernizr Js -->
    <script src="{{ URL::asset('front/js/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    @if (session()->has('loginError'))
        <script>
            alert('Email Atau Password Salah');
        </script>
    @endif
    {{-- <div id="preloader"></div> --}}
    <div id="wrapper" class="wrapper">
        <!-- Header Area Start Here -->
        @include('front.layout.header')
        <!-- Header Area End Here -->

        <!-- News Feed Area Start Here -->
        <section class="bg-accent border-bottom add-top-margin">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                        <div class="topic-box topic-box-margin">Top Stories</div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-8 col-6">
                        <div class="feeding-text-dark">
                            <ol id="sample" class="ticker">
                                @if (count($top_stories) > 0)
                                    @foreach ($top_stories as $item)
                                        <li>
                                            <a href="#">{{ $item->judul }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Feed Area End Here -->
        
        {{-- Kontek --}}
        @yield('konten')

        <!-- Footer Area Start Here -->
        @include('front.layout.footer')
        <!-- Footer Area End Here -->
        
        <!-- Modal Start-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="title-login-form">Login</div>
                    </div>
                    <div class="modal-body">
                        <div class="login-form">
                            <form action="{{ URL::to('admin_log_in') }}" method="POST">
                                @csrf
                                <label>Email *</label>
                                <input type="email" name="email" placeholder="Masukkan Email" value="{{ old('email') }}" />
                                <label>Password *</label>
                                <input type="password" name="password" placeholder="Password" />
                                <button type="submit">Login</button>
                                <button class="form-cancel" type="submit" value="">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End-->
    </div>
    <!-- Wrapper End -->
    <!-- jquery-->
    <script src="{{ URL::asset('front/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="{{ URL::asset('front/js/plugins.js') }}" type="text/javascript"></script>
    <!-- Popper js -->
    <script src="{{ URL::asset('front/js/popper.js') }}" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="{{ URL::asset('front/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="{{ URL::asset('front/js/wow.min.js') }}"></script>
    <!-- Owl Cauosel JS -->
    <script src="{{ URL::asset('front/vendor/OwlCarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="{{ URL::asset('front/js/jquery.meanmenu.min.js') }}" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="{{ URL::asset('front/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="{{ URL::asset('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('front/js/waypoints.min.js') }}"></script>
    <!-- Isotope js -->
    <script src="{{ URL::asset('front/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <!-- Magnific Popup -->
    <script src="{{ URL::asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Ticker Js -->
    <script src="{{ URL::asset('front/js/ticker.js') }}" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('front/js/main.js') }}" type="text/javascript"></script>        
</body>
</html>
