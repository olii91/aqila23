@extends('adminlte::page')
@section('title','Halaman Pengaduan')
@section('content_header')
    <h1>Beri Tanggapan</h1>
@stop
@section('link')
<li class="breadcumb-item"><a href="{{route('pengaduan.index')}}">Tanggapapn</a></li>
<li class="breadcumb-item active">Tambah</li>
@stop
@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('tanggapan.store') }}"> 
            @csrf
            @method('POST')
            <div class="row mb-3">
                <label for="tgl_tanggapan" class="col-md-4 col-form-label text-md-end"> {{ __('Tanggal Tanggapan')}}</label>
                <div class="col-md-2">
                    <input id="tgl_tanggapan" type="date" class="form-control @error('tgl_tanggapan') is-invalid @enderror" name='tgl_tanggapan' value="{{ old('tgl_tanggapan') }}" required autocomplete="tgl_tanggapan" autofocus>
                    @error('tgl_tanggapan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
            </div>

            <div class="row mb-3">
                <label for="tanggapan" class="col-md-4 col-form-label text-mdend">{{ __('Tanggapan')}}</label>
                <div class="col-md-6">
                    <textarea class="form-control @error('tanggapan') is-invalid @enderror" name="tanggapan"> {{ old('tanggapan') }}</textarea> 
                    @error('tanggapan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection