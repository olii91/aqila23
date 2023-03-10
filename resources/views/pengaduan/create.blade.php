@extends('adminlte::page')
@section('title', 'Halaman Tambah pengaduan')
@section('content_header')
   <h1>Halaman Pengaduan</h1>
   <p>Selamat Datang di Halaman Pengaduan Kota Bontang</p>
@stop
@section('link')
<li class="breadcrumb-item"><a href="{{route('pengaduan.index')}}">Pengaduan</a></li>
<li class="breadcrumb-item active">Tambah</li>
@stop
@section('content')
<div class="card">
   <div class="card-body">
       <form method="POST" action="{{ route('pengaduan.store') }}">
           @csrf
           @method('POST')
            <div class="row mb-3">
               <label for="tgl_pengaduan" class="col-md-4 col-form-label text-mdend">{{ __('Tanggal Pengaduan') }}</label>
                   <div class="col-md-2">
                       <input id="tgl_pengaduan" type="date" class="form-control @error('tgl_pengaduan') is-invalid @enderror" name="tgl_pengaduan" value="{{old('tgl_pengaduan') }}" required autocomplete="tgl_pengaduan" autofocus>
                           @error('tgl_pengaduan')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                   </div>
    
            </div>

           <div class="row mb-3">
               <label for="isi_laporan" class="col-md-4 col-form-label text-md-end"> {{ __('Isi Laporan') }}</label>
                   <div class="col-md-6">
                       <textarea class="form-control @error('isi_laporan') is-invalid @enderror" name="isi_laporan" type="text"> {{ old('isi_laporan') }}</textarea>
                           @error('isi_laporan')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                   </div>
           </div>



           {{-- <div class="row mb-3">
                <label for="foto" class="col-md-4 col-form-label text-md-end">{{ __('Foto') }}</label>
                    <div class="col-md-6">
                        <input id="foto" type="file" class=" @error('foto') is-invalid @enderror" name="foto[]" multiple="true" >
                            @error('foto')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                    </div>
                </div> --}}
    
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
            </div>
            </div>
</form>
</div>


           <!-- <div class="row mb-3">
                <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                   <div class="col-md-6">
                       <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" required>
                           @error('status')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror    
                   </div>
           </div> -->


</div>


@endsection

