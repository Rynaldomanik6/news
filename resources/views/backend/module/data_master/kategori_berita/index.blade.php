@extends('backend/layouts.main')

@section('container')
@php
    $no = 1;
@endphp
<style>
    div.dataTables_wrapper {
        margin: 0 auto;
    }
    table#kategori.dataTable tbody tr:hover {
        color: #000;
    }
    
    table#kategori.dataTable tbody tr:hover > .sorting_1 {
        color: #000;;
    }

    .tooltipnya {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltipnya .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
    }

    .tooltipnya:hover .tooltiptext {
        visibility: visible;
    }


</style>
<div class="row">
    <div class="col-md-6">
        <nav class="hk-breadcrumb" aria-label="breadcrumb" style="margin-top: -30px;">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item"><a href="#"></a></li>
                <li class="breadcrumb-item active" aria-current="page">Kategori berita</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-6" style="text-align: right;">
        <button class="btn btn-success" style="margin-top: -30px;"><a href="{{ URL::to('tambah_kategori_berita') }}" style="color: #fff;">Tambah Kategori berita</a></button>
    </div>
</div>
<section class="hk-sec-wrapper" style="margin-top: -20px;">
    <h5 class="hk-sec-title">Kategori berita</h5><br>
    <div class="row">
        <div class="col-sm">
            <div class="table-wrap">
                <table id="kategori" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori berita</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($count > 0)
                            @foreach ($data as $item)
                                <tr>
                                    <td style="text-align: center;">{{ $no }}</td>
                                    <td>{{ $item->kategori_berita }}</td>
                                    <td>
                                        <form action="{{ URL::to('edit_kategori_berita') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-icon btn-secondary btn-icon-style-1">
                                                <span class="btn-icon-wrap" data-toggle="tooltip" data-placement="top" title data-original-title="Edit"><i class="fa fa-pencil"></i></span>
                                            </button>

                                            <button type="button" class="btn btn-icon btn-danger btn-icon-style-1" data-id="{{ $item->id }}" data-toggle="modal" data-target="#hapusKategori">
                                                <span class="btn-icon-wrap" data-toggle="tooltip" data-placement="top" title data-original-title="Hapus"><i class="icon-trash"></i></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @php $no++; @endphp
                            @endforeach
                        @else
                            <tr>
                                <td colspan="8" style="text-align: center">Tidak Ada Kategori berita</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal Hapus -->
    <div class="modal fade" id="hapusKategori" tabindex="-1" role="dialog" aria-labelledby="hapusKategoriLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusKategoriLabel">Hapus Kategori berita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="hapus-layout">Yakin ingin Menghapus Kategori berita ini?</div>
                </div>
                <form action="{{ URL::to('hapus_kategori_berita') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="" id="id_kategori">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@if (session()->has('message'))
@php
    if (session()->has('message')) {
        $message = session('message');
    }
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
$(document).ready(function() {
    $('#kategori').DataTable();
});

// Modal Hapus
$("#hapusKategori").on('shown.bs.modal', function(e){
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    var valueid = $(e.relatedTarget).data('id');;
    $('#id_kategori').val(valueid);
});
</script>
@endsection

