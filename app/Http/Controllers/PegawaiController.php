<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard', [
            'pegawai' => Pegawai::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pegawai::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'kota_asal' => $request->kota_asal,
            'st_asal' => $request->st_asal,
            'ket_asal' => $request->ket_asal,
            'kota_tujuan' => $request->kota_tujuan,
            'st_pulang' => $request->st_pulang,
            'ket_pulang' => $request->ket_pulang,
        ]);

        return redirect('dinas-luar');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {

    $data = Pegawai::where("kd_dl",$id)->first();

    return view('edit',['data'=>$data]);



    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pegawai::where('kd_dl',$id)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'kota_asal' => $request->kota_asal,
            'st_asal' => $request->st_asal,
            'ket_asal' => $request->ket_asal,
            'kota_tujuan' => $request->kota_tujuan,
            'st_pulang' => $request->st_pulang,
            'ket_pulang' => $request->ket_pulang,
        ]);

        return redirect('dinas-luar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)

    {
        Pegawai::where('kd_dl',$id)->delete();

        return redirect('dinas-luar');
    }
}
