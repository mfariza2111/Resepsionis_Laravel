<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    public function index()
    {
        $data_Resepsionis = \App\Models\Resepsionis::all();
        return view('Resepsionis.index',['data_Resepsionis' => $data_Resepsionis]);
    }

    // public function index()
    // {
    //     $data_Resepsionis= \App\Models\Resepsionis::Where('status','Check In')->get();
    //     return view('Resepsionis.index',['data_Resepsionis' => $data_Resepsionis]);
    // }

    public function create(Request $request)
    {
        \App\Models\Resepsionis::create($request->all());
        return redirect('/resepsionis')->with('sukses','Data berhasil di input');
    }

    public function edit($id)
    {
        $data_Resepsionis = \App\Models\Resepsionis::find($id);
        return view('resepsionis.edit',['resepsionis' => $data_Resepsionis]);
    }

    public function update(Request $request, $id)
    {
        $data_Resepsionis = \App\Models\Resepsionis::find($id);
        $data_Resepsionis->update($request->all());
        return redirect('resepsionis')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $data_Resepsionis = \App\Models\Resepsionis::find($id);
        $data_Resepsionis->delete();
        return redirect('/resepsionis')->with('sukses', 'Data berhasil dihapus');
    }
}  