@extends('front.layout.main')

@section('konten')

@php
    use App\Models\KategoriBerita;
    use App\Models\Berita;
    $getkategori = KategoriBerita::find($modul->id_categori);
    $view = $modul->view + 1;
    $modul->view = $view;
    $modul->update();
@endphp

<!-- Breadcrumb Area Start Here -->
<section class="breadcrumbs-area" style="background-image: url('{{ URL::asset('front/img/banner/breadcrumbs-banner.jpg') }}');">
    <div class="container">
        <div class="breadcrumbs-content">
            <h1>{{ $slug }}</h1>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End Here -->

<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-30">
                <div class="news-details-layout1">
                    <div class="position-relative mb-30">
                        <img src="../{{ $modul->foto }}" alt="news-details" class="img-fluid" style="width: 900px;">
                        <div class="topic-box-top-sm">
                            <div class="topic-box-sm color-cinnabar mb-20">{{ $getkategori->kategori_berita }}</div>
                        </div>
                    </div>
                    <h2 class="title-semibold-dark size-c30">{{ $modul->judul }}</h2>
                    <ul class="post-info-dark mb-30">
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar" aria-hidden="true"></i>{{ $modul->created_at->isoFormat('D MMMM Y') }}</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-eye" aria-hidden="true"></i>{{ $view }}</a>
                        </li>
                    </ul>
                    <p>{!! $modul->isi !!}</p>
                </div>
            </div>
            <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-5">
                        <div class="topic-box-lg color-cod-gray">Berita Terbaru</div>
                    </div>
                    <div class="row">
                        @foreach ($berita_terbaru as $item)
                            @php
                                $get_kategori = KategoriBerita::find($item->id_categori);
                            @endphp
                            <div class="col-lg-6 col-md-4 col-sm-6 col-6">
                                <div class="mt-25 position-relative">
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">{{ $get_kategori->kategori_berita }}</div>
                                    </div>
                                    <a href="{{ URL::to('post') }}/{{ $item->slug }}" class="mb-10 display-block img-opacity-hover">
                                        <img src="{{ URL::asset($item->foto) }}" alt="ad" class="img-fluid m-auto width-100" style="height: 120px;">
                                    </a>
                                    <h3 class="title-medium-dark size-md mb-none">
                                        <a href="{{ URL::to('post') }}/{{ $item->slug }}">{{ $item->judul }}</a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-25">
                        <div class="topic-box-lg color-cod-gray">Tags</div>
                    </div>
                    <ul class="sidebar-tags">
                        @foreach ($kategori as $value)
                            <li>
                                <a href="{{ URL::to('kategori_berita') }}/{{ $value->kategori_berita }}">{{ $value->kategori_berita }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection