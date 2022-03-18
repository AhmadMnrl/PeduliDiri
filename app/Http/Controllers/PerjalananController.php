<?php

namespace App\Http\Controllers;

use App\Perjalanan;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Perjalanan::where('id_user', Auth::user()->id)->simplePaginate(3);
        $propil = User::all();
        return view('perjalanan.index',compact('data','propil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perjalanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = [
            'tanggal' =>$request->tanggal,
            'id_user' =>Auth::user()->id,
            'lokasi' =>$request->lokasi,
            'suhu_tubuh' =>$request-> suhu_tubuh,
            'jam' =>$request->jam
        ];
        Perjalanan::create($create);
        return redirect('/perjalanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function show(Perjalanan $perjalanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Perjalanan::findOrFail($id);
        return view('perjalanan.edit', compact('data')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Perjalanan::find($id);
        $value = [
            'tanggal' => $request->tanggal,
            'id_user' => Auth::user()->id,
            'lokasi' => $request->lokasi,
            'suhu_tubuh' => $request->suhu_tubuh,
            'jam' => $request->jam
        ];
        $data->update($value);
        return redirect('/perjalanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perjalanan::destroy($id);
        return redirect('/perjalanan');
    }
    public function hapusAll()
    {
        Perjalanan::truncate();
        return redirect('/perjalanan');
    }
}
