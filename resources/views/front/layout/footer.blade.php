<footer>
    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <h2 class="title-bold-light title-bar-left text-uppercase">Most Viewed Posts</h2>
                        <ul class="most-view-post">
                            @if (count($mostview_footer) > 0)
                                @foreach ($mostview_footer as $item)
                                    <li>
                                        <div class="media">
                                            <a href="{{ URL::to('post') }}/{{ $item->slug }}">
                                                <img src="{{ URL::asset($item->foto) }}" alt="post" class="img-fluid" style="width: 100px;">
                                            </a>
                                            <div class="media-body">
                                                <h3 class="title-medium-light size-md mb-10">
                                                    <a href="{{ URL::to('post') }}/{{ $item->slug }}">{{ $item->judul }}</a>
                                                </h3>
                                                <div class="post-date-light">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                            </span>{{ $item->created_at->isoFormat('D MMMM Y') }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <h2 class="title-bold-light title-bar-left text-uppercase">Categories</h2>
                        <ul class="popular-categories">
                            @if (count($popcategory_footer) > 0)
                                @foreach ($popcategory_footer as $item)
                                    <li>
                                        <a href="{{ URL::to('kategori_berita') }}/{{ $item->kategori_berita }}">{{ $item->kategori_berita }}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                    <div class="footer-box">
                        <h2 class="title-bold-light title-bar-left text-uppercase">Post Gallery</h2>
                        <ul class="post-gallery shine-hover ">
                            @if (count($postgalery_footer) > 0)
                                @foreach ($postgalery_footer as $item)
                                    <li>
                                        <a href="{{ URL::to('post') }}/{{ $item->slug }}">
                                            <figure>
                                                <img src="{{ URL::asset($item->foto) }}" alt="post" class="img-fluid" style="width: 100px;">
                                            </figure>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>© {{ date('Y') }} Kelompok 4</p>
                </div>
            </div>
        </div>
    </div>
</footer>