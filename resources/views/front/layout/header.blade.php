@php
    $user = Auth::user();
@endphp
<header>
    <div id="header-layout1" class="header-style1">
        <div class="main-menu-area bg-primarytextcolor header-menu-fixed" id="sticker">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="logo-area">
                            <a href="{{ URL::to('/') }}">
                                <img src="{{ URL::asset('front/img/logo.png') }}" alt="logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 position-static min-height-none">
                        <div class="ne-main-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li class="@php if($title == 'Beranda'){echo 'active';}  @endphp">
                                        <a href="{{ URL::to('/') }}">Home</a>
                                    </li>
                                    <li class="@php if($title == 'Berita Terbaru'){echo 'active';}  @endphp">
                                        <a href="{{ URL::to('berita_terbaru') }}">Berita Terbaru</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-12 text-right position-static">
                        <div class="header-action-item">
                            <ul>
                                @if ($user == Null)
                                    <li>
                                        <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-user" aria-hidden="true"></i>Sign in
                                        </button>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>