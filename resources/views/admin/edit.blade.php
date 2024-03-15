@extends('admin.template')
<!-- START FORM -->
@section('main')

<form action='{{ url('admin/'.$data->nomor_inventori) }}' method='post'>
@csrf
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('admin/index') }}' class="btn btn-secondary"><< kembali</a>
    <div class="mb-3 row">
        <label for="nomor_inventori" class="col-sm-2 col-form-label">Nomor Inventori</label>
        <div class="col-sm-10">
            {{ $data->nomor_inventori }}
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kode_barang" class="col-sm-2 col-form-label">Kode barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='kode_barang' value="{{ $data->kode_barang }}" id="kode_barang">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama_barang' value="{{ $data->nama_barang }}" id="nama_barang">
        </div>
    <div class="mb-3 row">
        <label for="produsen" class="col-sm-2 col-form-label">Produsen</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='Produsen' value="{{ $data->Produsen }}" id="Produsen">
        </div>
    <div class="mb-3 row">
        <label for="merk" class="col-sm-2 col-form-label">Merk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='merk' value="{{ $data->merk }}" id="merk">
        </div> 
    <div class="mb-3 row">
        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
    <div class="col-sm-10">
            <input type="text" class="form-control" name='kategori' value="{{ $data->kategori }}" id="kategori">
        </div> 
        <div class="mb-3 row">
        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
    <div class="col-sm-10">
            <input type="text" class="form-control" name='jenis' value="{{ $data->jenis }}" id="jenis">
        </div> 
        <div class="mb-3 row">
        <label for="asal_barang" class="col-sm-2 col-form-label">Asal Barang</label>
    <div class="col-sm-10">
            <input type="text" class="form-control" name='asal_barang' value="{{ $data->asal_barang }}" id="asal_barang">
        </div>  
    <div class="mb-3 row">
        <label for="tgl_pengadaan" class="col-sm-2 col-form-label">Tgl pengadaan</label>
    <div class="col-sm-10">
            <input type="text" class="form-control" name='tgl_pengadaan' value="{{ $data->tgl_pengadaan }}" id="tgl_pengadaan">
        </div>  
        <div class="mb-3 row">
        <label for="status_barang" class="col-sm-2 col-form-label">Status barang</label>
    <div class="col-sm-10">
            <input type="text" class="form-control" name='status_barang' value="{{ $data->status_barang }}" id="status_barang">
        </div>
        <div class="mb-3 row">
        <label for="ruang" class="col-sm-2 col-form-label">Ruang</label>
    <div class="col-sm-10">
            <input type="text" class="form-control" name='ruang' value="{{ $data->ruang }}" id="ruang">
        </div>    
    </div>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection