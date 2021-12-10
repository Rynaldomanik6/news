@extends('backend/layouts.main')

@section('container')

<div class="row">
    <div class="col-md-6">
        <nav class="hk-breadcrumb" aria-label="breadcrumb" style="margin-top: -30px;">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="{{ URL::to('kategori_berita') }}">Kategori berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Kategori berita</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title">Tambah Kategori berita</h5><br><br>
            <div class="row">
                <div class="col-sm">
                    <form action="{{ URL::to('tambah_kategori_berita') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="kategori_berita">Kategori berita</label>
                                <input class="form-control" type="text" name="kategori_berita" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <button class="btn btn-success" type="submit" name="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@if (session()->has('message'))
@php
    $message = session('message');
    if (session('alert') == 0) {
        $heading = 'Error !';
        $status = 'jq-toast-danger';
    }else{
        $heading = 'Success :)';
        $status = 'jq-has-icon jq-toast-success';
    }
@endphp
<script>
    //Toast
    $(document).ready(function() {
        $.toast().reset('all');
        $("body").removeAttr('class');
        $.toast({
            heading: '{!! $heading !!}',
            text: '<p>{!! $message !!}</p>',
            position: 'bottom-right',
            loaderBg:'#7a5449',
            class: '{!! $status !!}',
            hideAfter: 5500, 
            stack: 6,
            showHideTransition: 'fade'
        });
    });
</script>
@endif

@endsection