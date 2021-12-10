@extends('front.layout.main')

@section('konten')

@php
    use App\Models\KategoriBerita;
    use App\Models\Berita;
@endphp
<!-- News Slider Area Start Here -->
@php
    if ($top_stories[0] != null) {
        $id_top_1 = $top_stories[0]->id;
        $kategori1 = KategoriBerita::find($top_stories[0]->id_categori);
    }

    if ($top_stories[1] != null) {
        $id_top_2 = $top_stories[1]->id;
        $kategori2 = KategoriBerita::find($top_stories[1]->id_categori);
    }
@endphp
<section class="bg-accent section-space-less2">
    <div class="container">
        <div class="row tab-space1">
            @if ($top_stories[0] != null)
                <div class="col-lg-6 col-md-12">
                    <div class="img-overlay-70 img-scale-animate mb-2">
                        <img src="{{ URL::asset($top_stories[0]->foto) }}" alt="news" class="img-fluid width-100" style="height: 434px;">
                        <div class="mask-content-lg">
                            <div class="topic-box-sm color-cinnabar mb-20">{{ $kategori1->kategori_berita }}</div>
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>{{ $top_stories[0]->created_at->isoFormat('D MMMM Y') }}
                                    </li>
                                </ul>
                            </div>
                            <h1 class="title-medium-light">
                                <a href="{{ URL::to('post') }}/{{ $top_stories[0]->slug }}">{{ $top_stories[0]->judul }}</a>
                            </h1>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-lg-6 col-md-12">
                <div class="row tab-space1">
                    @if ($top_stories[1] != null)
                        <div class="col-12">
                            <div class="img-overlay-70 img-scale-animate mb-2">
                                <div class="mask-content-sm">
                                    <div class="topic-box-sm color-azure-radiance mb-10">{{ $kategori2->kategori_berita }}</div>
                                    <h2 class="title-medium-light">
                                        <a href="{{ URL::to('post') }}/{{ $top_stories[1]->slug }}">{{ $top_stories[1]->judul }}</a>
                                    </h2>
                                </div>
                                <img src="{{ URL::asset($top_stories[1]->foto) }}" alt="news" class="img-fluid width-100" style="height: 214px;">
                            </div>
                        </div>
                    @endif
                    @if ($top_stories[2] != null)
                        @foreach ($top_stories as $item)
                            @if ($item->id != $id_top_1 && $item->id != $id_top_2)
                                @php
                                    $kategori = KategoriBerita::find($item->id_categori);
                                @endphp
                                <div class="col-sm-6 col-12">
                                    <div class="img-overlay-70 img-scale-animate mb-2">
                                        <div class="mask-content-sm">
                                            <div class="topic-box-sm color-apple mb-10">{{ $kategori->kategori_berita }}</div>
                                            <h3 class="title-medium-light">
                                                <a href="{{ URL::to('post') }}/{{ $item->slug }}">{{ $item->judul }} </a>
                                            </h3>
                                        </div>
                                        <img src="{{ URL::asset($item->foto) }}" alt="news" class="img-fluid width-100" style="height: 218px;">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News Slider Area End Here -->
<!-- Top Story Area Start Here -->
<section class="bg-body section-space-default">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="mb-20-r ne-isotope">
                    <div class="topic-border color-cinnabar mb-30">
                        <div class="topic-box-lg color-cinnabar">Top Stories</div>
                        <div class="isotope-classes-tab isotop-btn">
                            @php 
                                $kategori = KategoriBerita::get(); 
                                $no = 1;
                            @endphp
                            @foreach ($kategori as $item)
                                @php $class_filter = str_replace(' ','_',$item->kategori_berita); @endphp

                                <a href="#" data-filter=".{{ $class_filter }}" class="<?php if($no == 1){echo 'current';} ?>">{{ $item->kategori_berita }}</a>

                                @php $no++; @endphp 
                            @endforeach
                        </div>
                    </div>
                    <div class="featuredContainer">
                        @php
                            $get_categori = Berita::groupBy('id_categori')->get();
                            foreach ($get_categori as $key => $value) {
                                $id_kategori[] = $value->id_categori; 
                            }
                            $kategori = KategoriBerita::whereIn('id',$id_kategori)->get();
                        @endphp
                        @foreach ($kategori as $item)
                            @php 
                                $class_filter = str_replace(' ','_',$item->kategori_berita);
                                $top_kategori = Berita::where('id_categori',$item->id)->orderBy('view','desc')->get()->take(5);
                                $id_top1 = $top_kategori[0]->id;
                            @endphp
                            <div class="row {{ $class_filter }}">
                                <div class="col-md-6 col-sm-12">
                                    <div class="img-overlay-70 img-scale-animate mb-30">
                                        <a href="{{ URL::to('post') }}/{{ $top_kategori[0]->slug }}">
                                            <img src="{{ URL::asset($top_kategori[0]->foto) }}" alt="news" class="img-fluid width-100" style="height: 490px;">
                                        </a>
                                        <div class="mask-content-lg">
                                            <div class="topic-box-sm color-cinnabar mb-20">{{ $item->kategori_berita }}</div>
                                            <div class="post-date-light">
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </span>{{ $top_kategori[0]->created_at->isoFormat('D MMMM Y') }}</li>
                                                </ul>
                                            </div>
                                            <h2 class="title-medium-light size-lg">
                                                <a href="{{ URL::to('post') }}/{{ $top_kategori[0]->slug }}">{{ $top_kategori[0]->judul }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    @foreach ($top_kategori as $value)
                                        @if ($value->id != $id_top1)
                                            <div class="media mb-30">
                                                <a class="width38-lg width40-md img-opacity-hover" href="{{ URL::to('post') }}/{{ $value->slug }}">
                                                    <img src="{{ URL::asset($value->foto) }}" alt="news" class="img-fluid" style="width:130px; height: 100px;">
                                                </a>
                                                <div class="media-body">
                                                    <div class="post-date-dark">
                                                        <ul>
                                                            <li>
                                                                <span>
                                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                                </span>{{ $value->created_at->isoFormat('D MMMM Y') }}</li>
                                                        </ul>
                                                    </div>
                                                    <h3 class="title-medium-dark size-md mb-none">
                                                        <a href="{{ URL::to('post') }}/{{ $value->slug }}">{{ $value->judul }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                
                <div class="sidebar-box">
                    <div class="topic-border color-scampi mb-5">
                        <div class="topic-box-lg color-scampi">Berita Terbaru</div>
                    </div>
                    <div class="row">
                        @foreach ($berita_terbaru as $item)
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="mt-25">
                                    <a href="{{ URL::to('post') }}/{{ $item->slug }}" class="img-opacity-hover">
                                        <img src="{{ URL::asset($item->foto) }}" alt="ad" class="img-fluid mb-10 width-100" style="height:120px;">
                                    </a>
                                    <h3 class="title-medium-dark size-md mb-none">
                                        <a href="{{ URL::to('post') }}/{{ $item->slug }}">{{ $item->judul }}</a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Top Story Area End Here -->
<!-- Latest News Area Start Here -->
<section class="bg-body section-space-less30">
    <div class="container">
        <div class="row">
            @php
                $get_categori = Berita::groupBy('id_categori')->get();
                foreach ($get_categori as $key => $value) {
                    $id_kategori[] = $value->id_categori; 
                }
                $kategori = KategoriBerita::whereIn('id',$id_kategori)->get();
            @endphp
            @foreach ($kategori as $item)
                @php
                    $new_berita = Berita::where('id_categori',$item->id)->latest()->get()->take(4);
                    $id_berita1 = $new_berita[0]->id;
                @endphp
                <div class="col-lg-4 col-md-12">
                    <div class="topic-border color-cutty-sark mb-30 width-100">
                        <div class="topic-box-lg color-cutty-sark">{{ $item->kategori_berita }}</div>
                    </div>
                    <div class="img-overlay-70 img-scale-animate mb-30">
                        <div class="mask-content-sm">
                            <div class="post-date-light">
                                <ul>
                                    <li>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>{{ $new_berita[0]->created_at->isoFormat('D MMMM Y') }}</li>
                                </ul>
                            </div>
                            <h3 class="title-medium-light">
                                <a href="{{ URL::to('post') }}/{{ $new_berita[0]->slug }}">{{ $new_berita[0]->judul }}</a>
                            </h3>
                        </div>
                        <img src="{{ URL::asset($new_berita[0]->foto) }}" alt="news" class="img-fluid width-100" style="height: 200px;">
                    </div>
                    @foreach ($new_berita as $value)
                        <div class="media mb-30">
                            <a class="img-opacity-hover" href="{{ URL::to('post') }}/{{ $value->slug }}">
                                <img src="{{ URL::asset($value->foto) }}" alt="news" class="img-fluid" style="width: 120px; height:100px;">
                            </a>
                            <div class="media-body">
                                <div class="post-date-dark">
                                    <ul>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>{{ $value->created_at->isoFormat('D MMMM Y') }}</li>
                                    </ul>
                                </div>
                                <h3 class="title-medium-dark size-md mb-none">
                                    <a href="{{ URL::to('post') }}/{{ $value->slug }}">{{ $value->judul }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Latest News Area End Here -->
<!-- Category Area Start Here -->
<section class="bg-body section-space-less2">
    <div class="container">
        <div class="row tab-space1">
            @foreach ($kategori as $item)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="category-box-layout1 overlay-dark-level-2 img-scale-animate text-center mb-2">
                        <img src="{{ URL::asset('front/img/category/ctg1.jpg') }}" alt="news" class="img-fluid width-100">
                        <div class="content p-30-r">
                            <div class="ctg-title-xs">Kategori</div>
                            <h3 class="title-regular-light size-lg">
                                <a href="{{ URL::to('kategori_berita') }}/{{ $item->kategori_berita }}" style="font-size: 25px;">{{ $item->kategori_berita }}</a>
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Category Area End Here --> 

@endsection