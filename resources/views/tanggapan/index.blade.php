@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Halaman Tanggapan</h1>
@stop

@section('content')
    <div class="card">
        {{-- <div class="card-header">{{ __('User') }}</div> --}}
        <div class="card-body">
            @if (session('status'))
                <x-adminlte-alert theme="success" title="Sukses">
                    {{ session('status') }}
                </x-adminlte-alert>
            @endif
            @if ($errors->any())
            <x-adminlte-alert theme="success" title="Sukses">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>(( $error ))</li>
                @endforeach
            </ul>
            </x-adminlte-alert>
            @endif
            

            {{-- <a href="{{route('pengaduan.create')}}" class="btn btn-md btn-success mx-1 shadow">
                <i class="fa fa-lg fa-fw fa-plus"></i> Tambah Pengaduan</a> --}}
                {{-- <br/><br/> --}}
                <div class="table-responsive">
                    <table id="tabel_tanggapan" class="table table-stripped table-hover table-condensed table-bordered">
                        <thead>
                            <tr style="background-color: darkgrey">
                                <th>No</th>
                                <th>Pengaduan</th>
                                <th>Tanggal</th>
                                <th>Tanggapan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggapan as $tanggapan)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$tanggapan->pengaduan_id}}</td>
                                    <td>{{$tanggapan->tgl_tanggapan}}</td>
                                    <td>{{$tanggapan->tanggapan}}</td>
                                    <td>
                                        <a href="{{route('tanggapan.edit',$tanggapan->id)}}" class="btn btn-sm btn-primary" title="tanggapan"><i class="for fa-edit"></i>Edit</a>
                                        <x-adminlte-button class="btn btn-sm btn-danger" label="Delete" data-toggle="modal" data-targer="#hapususer{{$loop->iteration}}" icon="far fa-trash-alt" class="bg-danger">Hapus</x-adminlte-button> 
                                        
                                        {{-- {{ Custom  }} --}}
 
                                        {{-- <x-adminlte-modal id="hapususer{{$loop->iteration}}" title="Hapus User" size="md" theme="orange" icon="fas fa-bell" v-centered static-backdrop scrollable>
                                            <div style="height:80px;">
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                        Apakah andauadidfafadda</div>

                                                    <x-slot name="footerSlot">
                                                        <x-adminlte-button type="submit" class="mr-auto" theme="primary" label="Hapus"/>
                                                        <x-adminlte-button theme="danger" label="Batal" data-dismiss="modal"/>
                                                    </form>
                                                    </x-slot>
                                        </x-adminlte-modal> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@stop
@section('plugins.Datatales', true)
@section('js')
    <script> $('#tabel_user').DataTable();</script>
@stop





