<?php

namespace App\Http\Controllers;

use App\Perjalanan;
use App\User;
use PDF;
use Alert;
use Carbon\Carbon;
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

        if(Auth::user()->role == 'admin'){
           return redirect('dashboard')->with('error','anda tidak memiliki akses');
        }
        if (request()->start_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateString();
            $data = Perjalanan::where('tanggal', [$start_date])->simplePaginate(3);
        } else {
            $data = Perjalanan::where('id_user', Auth::user()->id)->simplePaginate(3);
        }
        // dd(Auth::user()->role);
        return view('perjalanan.index',compact('data'));
    }
    public function dataUser()
    {
        if (Auth::user()->role == 'user') {
            return redirect('dashboard')->with('error', 'anda tidak memiliki akses');
        }
        $user = User::all();
        return view('perjalanan.dataUser',compact('user'));
    }
    public function cetak_pdf()
    {
        if (Auth::user()->role == 'user') {
            return redirect('dashboard')->with('error', 'anda tidak memiliki akses');
        }
        $user = User::all();

        $pdf = PDF::loadview('perjalanan.dataUser_pdf', ['user' => $user]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->role == 'admin') {
           return redirect('dashboard')->with('error','anda tidak memiliki akses');
        }
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
        Alert::success('Sukses', 'Perjalanan sukses ditambahkan');

        if (Auth::user()->role == 'admin') {
           return redirect('dashboard')->with('error','anda tidak memiliki akses');
        }
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
    public function show($id)
    {
         if (Auth::user()->role == 'user') {
            return redirect('dashboard')->with('error', 'anda tidak memiliki akses');
        }
        $data = Perjalanan::where('id_user',$id)->get();
        return view('perjalanan.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if (Auth::user()->role == 'admin') {
           return redirect('dashboard')->with('error','anda tidak memiliki akses');
        }
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

        if (Auth::user()->role == 'admin') {
           return redirect('dashboard')->with('error','anda tidak memiliki akses');
        }
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

        if (Auth::user()->role == 'admin') {
           return redirect('dashboard')->with('error','anda tidak memiliki akses');
        }
        Perjalanan::destroy($id);
        Alert::success('Sukses', 'Perjalanan berhasil dihapus');

        return redirect('/perjalanan');
    }
    public function hapus($id)
    {
         User::destroy($id);
         Alert::warning('Sukses', 'User berhasil dihapus');

        return redirect('/dataUser');
    }
    public function hapusAll()
    {

        if (Auth::user()->role == 'user') {
           return redirect('dashboard')->with('error','anda tidak memiliki akses');
        }
        Perjalanan::truncate();
        return redirect('/perjalanan');
    }
}
