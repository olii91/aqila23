<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengaduan;
use App\Models\User;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Pengaduan::all();
        return view('pengaduan.index')->with('pengaduan',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('pengaduan.create', compact('user'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'user_id' => ['required'],
                'tgl_pengaduan' => ['required', 'date'],
                'isi_laporan' => ['required', 'string'],
                // 'foto.*' =>'mimes:jpg,png,jpeg,gif,svg|max:2048',


           ]);
           try{
            $pengaduan = new Pengaduan();
            $pengaduan->user_id= Auth::user()->id;
            $pengaduan->tgl_pengaduan= $request->tgl_pengaduan;
            $pengaduan->isi_laporan = $request->isi_laporan;
            // $pengaduan->status = 'diproses';
            $pengaduan->save();
            // if($request->hasfile('foto'))
            // { 
            //     foreach($request->file('foto') as $filefoto){
            //         $fileasli = $filefoto->getClientOriginalName();
            //         $uploadfoto =$filefoto->move(public_path().'/Foto_pengaduan/',$fileasli);
            //         $foto= new Foto_pengaduan();
            //         $foto->pengaduan_id = $pengaduan->id;
            //         $foto->foto= $fileasli;
            //         $foto->save();
            //     }
            // }
        }
        
        catch(\Exception $e ) { return redirect()->back()->withErrors(['Pengaduan gagal disimpan'])->withInput();
                return redirect('pengaduan')->with('status','User Berhasil ditambahkan');
                }
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
