@extends('backend/layouts.main')

@section('container')
<nav class="hk-breadcrumb" aria-label="breadcrumb" style="margin-top: -30px;">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="{{ URL::to('user') }}">Users</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
    </ol>
</nav>

<section class="hk-sec-wrapper">
    <h5 class="hk-sec-title">Tambah User</h5><br>
    <div class="row">
        <div class="col-sm">
            <form class="mb-30" action="{{ URL::to('a_tambah_user') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="profile">Profile</label>
                    <select class="form-control col-md-6" name="id_profile" required>
                        <option value="">Pilih Profile</option>
                        @foreach ($profile as $item)
                            <option value="{{ $item->id }}">{{ $item->profile }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" class="form-control col-md-6" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control col-md-6" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control col-md-6" name="password" required>
                </div>
                <br>
                <button class="btn btn-success" type="submit" name="submit">Tambah</button>
            </form>
        </div>
    </div>
</section>
@endsection