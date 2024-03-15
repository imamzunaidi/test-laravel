<?php

namespace App\Http\Controllers;
use App\Models\datainventori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Validator;

class DataInventoriController extends Controller
{
    public function index()
    {
        $data_inventori = DB::table('data_inventori')->get();

        return view ('/admin.index', ['data_inventori'=>$data_inventori]);
    }

    public function create(){
        return view('/admin.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|unique:data_inventori,id',
            'kode_barang' => 'required|min:3',
            'nama_barang' => 'required|min:3',
            'produsen' => 'required|min:3',
            'Merk' => 'required|min:3',
            'kategori' => 'required|min:3',
            'jenis' => 'required|min:3',
            'asal_barang' => 'required|min:3',
            'tgl_pengadaan' => 'required|min:3',
            'status_barang' => 'required|min:3',
            'ruang' => 'required|min:3',
        ]);
        $data_inventori = new data_inventori;
        $data_inventori->id = $request->id;
        $data_inventori->kode_barang = $request->kode_barang;
        $data_inventori->nama_barang = $request->nama_barang;
        $data_inventori->produsen = $request->produsen;
        $data_inventori->merk = $request->merk;
        $data_inventori->kategori = $request->kategori;
        $data_inventori->jenis = $request->kategori;
        $data_inventori->asal_barang = $request->asal_barang;
        $data_inventori->tgl_pengadaan = $request->tgl_pengadaan;
        $data_inventori->status_barang = $request->status_barang;
        $data_inventori->ruang = $request->ruang;
        $data_inventori->save();

        return redirect()->to('/admin.index')->with('success', 'Berhasil menambahkan data');
}
public function edit($id){
   $data = admin::where('nomor_inventori',$id)->first();
   return view('admin.edit')->with('data', $data);
    
}

}