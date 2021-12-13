@extends('backend/layouts.main')

@section('container')
    <nav class="hk-breadcrumb" aria-label="breadcrumb" style="margin-top: -30px;">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class="hk-sec-wrapper">
        <div class="row">
            @foreach ($kategori as $item)
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <i class="fab fa-adn fa-2x"></i>
                            <h3>{{ $item['kategori_berita'] }}</h3>
                        </div>
                        <div class="card-body">
                            <p>Jumlah Berita </p>
                            <h1>{{ $item['jumlah'] }}</h1>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
