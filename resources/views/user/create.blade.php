@extends('adminlte::page')
@section('title','Halaman Tambah User')
@section('content_header')
    <h1>Tambah User</h1>
    {{-- <p>Selamat Datang di Halaman Pengaduan</p> --}}
@stop
@section('link')
<li class="breadcumb-item"><a href="{{route('user.index')}}">User</a></li>
<li class="breadcumb-item active">Tambah</li>
@stop
@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('user.store') }}">
            @csrf
            @method('POST')

            <div class="row mb-3">
                <label for="nik" class="col-md-4 col-form-label text-md-end"> {{ __('NIK')}}</label>
                <div class="col-md-6">
                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name='nik' value="{{ old('nik') }}" required autocomplete="nik" autofocus>
                    @error('nik')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end"> {{ __('Nama')}}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name='name' value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
            </div>

            <div class="row mb-3">
                <label for="username" class="col-md-4 col-form-label text-md-end"> {{ __('Username')}}</label>
                <div class="col-md-6">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name='username' value="{{ old('username') }}" required autocomplete="username" autofocus>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
            </div>

            <div class="row mb-3">
                <label for="telp" class="col-md-4 col-form-label text-md-end"> {{ __('Nomor Telepon')}}</label>
                <div class="col-md-6">
                    <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror" name='telp' value="{{ old('telp') }}" required autocomplete="telp" autofocus>
                    @error('telp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end"> {{ __('Email Address')}}</label>
                <div class="col-md-6">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name='email' value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end"> {{ __('Password')}}</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name='password' required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
            </div>

            <div class="row mb-3">
                <label for="level" class="col-md-4 col-form-label text-md-end"> {{ __('Level')}}</label>
                <div class="col-md-6">
                    <select id="level" class="form-control @error('level') is-invalid @enderror" name='level' required>
                        <option value="">Pilih Level User</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                    </select>
                    @error('level')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Simpanhhhh
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
