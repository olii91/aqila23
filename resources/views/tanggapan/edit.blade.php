@extends('adminlte::page')
@section('title', 'Halaman Edit Tanggapan')
@section('content_header')
   <h1>Edit Pengaduan</h1>
@stop
@section('link')
<li class="breadcrumb-item"><a href="{{route('user.index')}}">User</a></li>
<li class="breadcrumb-item">Edit</li>
<li class="breadcrumb-item active">{{$user->username}}</li>
@stop
@section('content')
<div class="card">
   <div class="card-body">
       <form method="POST" action="{{ route('tanggapan.update',$pengaduan->id) }}" >
           @csrf
           @method('PUT')
           <br/>
           <div class="row mb-3">
               <label for="tgl_tanggapan" class="col-md-4 col-form-label text-mdend">{{ __('Tanggal Tanggapan') }}</label>
                   <div class="col-md-6">
                       <input id="tgl_tanggapan" type="text" class="form-control @error('tgl_tanggapan') is-invalid @enderror" name="tgl_tanggapan" value="{{$tanggapan->tgl_tanggapan}}" required autocomplete="tgl_tanggapan" autofocus>
                           @error('tgl_tanggapan')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                   </div>
           </div>
           <div class="row mb-3">
               <label for="tanggapan" class="col-md-4 col-form-label text-md-end"> {{ __('Tanggapan') }}</label>
                   <div class="col-md-6">
                       <input id="tanggapan" type="text" class="form-control @error('tanggapan') is-invalid @enderror" name="tanggapan" value="{{ $tanggapan->tanggapan}}" required autocomplete="tanggapan" autofocus>
                           @error('tanggapan')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                   </div>
           </div>
           {{-- <div class="row mb-3">
               <label for="email" class="col-md-4 col-form-label text-mdend">{{ __('Email Address') }}</label>
                   <div class="col-md-6">
                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                           @error('email')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                   </div>
           </div>
           <div class="row mb-3">
               <label for="telp" class="col-md-4 col-form-label text-mdend">{{ __('Nomor Telepon') }}</label>
                   <div class="col-md-6">
                       <input id="telp" type="text" class="form-control @error('telp') is-invalid @enderror" value="{{ $user->telp }}" name="telp" >
                       <span class="help-text text-danger">Kosongkan jika tidak ada perubahan</span>
                           @error('telp')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                        </div>
                    </div> 
                    
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-mdend">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                                <span class="help-text text-danger">Kosongkan jika tidak ada perubahan</span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                    </div>
           <div class="row mb-3">
               <label for="nik" class="col-md-4 col-form-label text-mdend">{{ __('NIK') }}</label>
                   <div class="col-md-6">
                       <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" value="{{ $user->nik }}" name="nik" >
                       <span class="help-text text-danger">Kosongkan jika tidak ada perubahan</span>
                           @error('nik')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                   </div>
           </div>
           <div class="row mb-3">
               <label for="level" class="col-md-4 col-form-label text-mdend">{{ __('Level') }}</label>
                   <div class="col-md-6">
                       <select id="level" class="form-control @error('level') is-invalid @enderror" name="level" required >
                           <!-- <option value="{{$user->level}}"> {{ucfirst($user->level)}}</option> -->
                           <option value="admin"> Admin </option>
                           <option value="petugas"> Petugas </option>
                           <option value="masyarakat"> Masyarakat </option>
                       </select>
                           @error('level')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                   </div>
           </div> --}}
           <div class="row mb-0">
               <div class="col-md-6 offset-md-4">
                   <button type="submit" href="{{route('user.index')}}" class="btn btn-primary">
                                 Perbarui
                   </button>
           </div>
       </div>
   </form>
</div>
@endsection
</div>
