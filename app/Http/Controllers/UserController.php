<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();
        return view('user.index')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
                'username' => ['required', 'string', 'unique:users'],
                'nik' => ['required', 'string'],
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255','unique:users'],
                'telp'=>['required','numeric'],
                'password' => ['required', 'string', 'min:8'],
                'level' => ['required','string'],
           ]);
            try{
                $user = new User;
                $user->username = $request->username;
                $user->nik = $request->nik;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->telp = $request->telp;
                $user->password = Hash::make($request->password);
                $user->level= $request->level;
                $user->save();
           }
            catch(\Exception $e ){
                return redirect()->back()->withErrors(['User gagal disimpan']);
           }
            return redirect('user')->with('status','User Berhasil ditambahkan');
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
        $user =  User::find($id);
        return view('user.edit')->with('user',$user);
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
        $request->validate([
            'username' => ['required', 'string','unique:users,username,'.$id],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
            'telp' => ['required', 'string'],
            'nik' => ['required', 'string'],
            'level' => ['required','string'],
       ]);

       try{
        $user = User::find($id);
        $user->username = $request->username;
        $user->name= $request->name;
        if($request->password !=""){
            $user->password = Hash::make($request->password);
        }
        $user->telp = $request->telp;
        $user->nik = $request->nik;
        $user->level= $request->level;
        $user->save();
    }

        catch(\Exception $e ){
            return redirect()->back()->withErrors(['User gagal diperbarui']);
        }
            return redirect('user')->with('status','User Berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $user = User::findOrFail($id);
            $user->delete();
       }
        catch(\Exception $e ){
            return redirect()->back()->withErrors(['User gagal dihapus']);
       }
        return redirect()->back()->with('status','User berhasil dihapus');
    }

}
