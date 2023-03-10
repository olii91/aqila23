<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tanggapan;
use App\Models\Pengaduan;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Tanggapan::all();
        return view('tanggapan.index')->with('tanggapan',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Tanggapan::all();
        return view('tanggapan.create', compact('user'));;
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
            'isi_laporan' => ['required', 'string'],
            'tgl_tanggapan' => ['required', 'date'],
            // 'tanggapan' => ['required', 'string'],
            // 'foto.*' =>'mimes:jpg,png,jpeg,gif,svg|max:2048',


       ]);
       try{
        $tanggapan = new Tanggapan();
        $tanggapan->pengaduan_id= Auth::pengaduan()->id;
        $tanggapan->tgl_tanggapan= $request->tgl_tanggapan;
        $tanggapan->tanggapan = $request->isi_laporan;
        $tanggapan->save();
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
    
    catch(\Exception $e ) { return redirect()->back()->withErrors(['Tanggapan gagal disimpan'])->withInput();
            return redirect('tanggapan')->with('status','Tanggapan Berhasil ditambahkan');
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
