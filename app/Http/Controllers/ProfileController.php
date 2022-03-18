<?php

namespace App\Http\Controllers;

use App\User;
use App\kota;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $propil = User::where('id', Auth::user()->id)->first();
        // return view('profile.index', compact('propil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $propil = User::where('id', Auth::user()->id)->first();
        return view('profile.edit', compact('propil'));
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
        if ($request->foto > 0) {
            $foto = $request->foto;
            $v_foto = time().rand(100,900).".".$foto->getClientOriginalName();
        }

        $table = User::find($id);
        $data = [
            'nik' => $request->nik,
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'telp' => $request->telp,
            'alamat' => $request->alamat
        ];
        if ($request->foto > 0 && isset($v_foto)) {
            $table->foto = $v_foto;
        }
        if (isset($v_foto) > 0) {
            $foto->move(public_path().'/foto',$v_foto);
        }

        $table->update($data);
        
        return redirect("/propil/edit/$id");
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
