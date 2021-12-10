@extends('backend/layouts.main')

@section('container')

<div class="row">
    <div class="col-md-6">
        <nav class="hk-breadcrumb" aria-label="breadcrumb" style="margin-top: -30px;">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="{{ URL::to('berita') }}">Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Berita</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <section class="hk-sec-wrapper">
            <h5 class="hk-sec-title">Edit Berita</h5><br><br>
            <div class="row">
                <div class="col-sm">
                    <form action="{{ URL::to('ubah_berita') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="kategori">Kategori Berita</label>
                                <select class="form-control" name="id_categori" required>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}" <?php if($item->id == $data->id_categori){echo "selected";} ?>>{{ $item->kategori_berita }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="judul">Judul Berita</label>
                                <input class="form-control" type="text" name="judul" value="{{ $data->judul }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="foto">Foto Berita</label>
                                <input type="file" id="input-file-now" class="dropify" name="foto" data-default-file="{{ asset($data->foto) }}" onclick="klik()"/>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="isi_berita">Isi Berita</label>
                                <div class="tinymce-wrap">
                                    <textarea class="tinymce" name="isi_berita">{{ $data->isi }}</textarea>
                                </div>
                            </div><br>
                            <div class="col-md-6 form-group">
                                <button class="btn btn-success" type="submit" name="submit">Edit</button>
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

<script>
    function klik(){
        document.getElementById("input-file-now").required = true;
    }
</script>

@endsection