@extends('front.layout.main')

@section('konten')

@php
    use App\Models\KategoriBerita;
@endphp

<!-- Breadcrumb Area Start Here -->
<section class="breadcrumbs-area" style="background-image: url('{{ URL::asset('front/img/banner/breadcrumbs-banner.jpg') }}');">
    <div class="container">
        <div class="breadcrumbs-content">
            <h1>{{ $title }}</h1>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End Here -->

<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    @foreach ($modul as $item)
                        @php
                            $kategori_berita = KategoriBerita::find($item->id_categori);
                            $get_isi_berita = strip_tags($item->isi, '<p>');
                            $isi_berita = substr($get_isi_berita, 0, 300);
                            $kata = strlen($get_isi_berita);
                            if ($kata > 100) {
                                $titik = "...";
                            }else{
                                $titik = "";
                            }
                        @endphp
                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                            <div class="media media-none--lg mb-30">
                                <div class="position-relative width-40">
                                    <a href="{{ URL::to('post') }}/{{ $item->slug }}" class="img-opacity-hover img-overlay-70">
                                        <img src="{{ $item->foto }}" alt="news" class="img-fluid" style="width: 300px;">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cod-gray mb-20">{{ $kategori_berita->kategori_berita }}</div>
                                    </div>
                                </div>
                                <div class="media-body p-mb-none-child media-margin30">
                                    <div class="post-date-dark">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>{{ $item->created_at->isoFormat('D MMMM Y') }}</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-semibold-dark size-lg mb-15">
                                        <a href="{{ URL::to('post') }}/{{ $item->slug }}">{{ $item->judul }}</a>
                                    </h3>
                                    <p>{!! $isi_berita !!} {{ $titik }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $modul->links() !!}
            </div>
            <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                <div class="sidebar-box">
                    <div class="topic-border color-cod-gray mb-25">
                        <div class="topic-box-lg color-cod-gray">Kategori</div>
                    </div>
                    <ul class="sidebar-tags">
                        @foreach ($kategori as $item)
                            <li>
                                <a href="{{ URL::to('kategori_berita') }}/{{ $item->kategori_berita }}">{{ $item->kategori_berita }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection