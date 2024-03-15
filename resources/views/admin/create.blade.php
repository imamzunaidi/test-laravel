<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RS AL HUDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="countainer mt-5">
        <h1 class="text-center mb-5">
          Data Inventori
        </h1>
        <a href="{{ route('/admin.index') }}" class="btn btn-primary mb-3"> + Tambah Data Baru</a>
        @if(count($errors)>0)
        <div class="alert-alert-danger" role="alert">
          <h4 class="alert-heading">error!</h4>
          @foreach ($errors->all() as $error)
          <span>{{$error}}</span>
          @endforeach
</div>
@endif

          
        <div class="card">
            <div class="card-body">
            <form action="{{ route('/admin.store') }}" method="POST">
@csrf
  <div class="mb-2">
    <label for="nomor_inventori" class="form-label">Nomor Inventori</label>
    <input type="number" class="form-control" name="nomor_inventori" id="nomor_inventori">
  </div>
  <div class="mb-2">
    <label for="kode_barang" class="form-label">Kode Barang</label>
    <input type="text" class="form-control" name="kode_barang" id="kode_barang">
  </div>
  <div class="mb-2">
    <label for="nama_barang" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" id="nama_barang">
  </div>
  <div class="mb-2">
    <label for="produsen" class="form-label">Produsen</label>
    <input type="text" class="form-control" name="produsen" id="produsen">
  </div>
  <div class="mb-3">
    <label for="merk" class="form-label">Merk</label>
    <input type="text" class="form-control" name="merk" id="merk">
  </div>
  <div class="mb-2">
    <label for="kategori" class="form-label">Kategori</label>
    <input type="text" class="form-control" name="kategori" id="kategori">
  </div>
  <div class="mb-2">
    <label for="jenis" class="form-label">Jenis</label>
    <input type="text" class="form-control" name="jenis" id="jenis">
  </div>
  <div class="mb-2">
    <label for="asal_barang" class="form-label">Asal Barang</label>
    <input type="text" class="form-control" name="asal_barang" id="asal_barang">
  </div>
  <div class="mb-2">
    <label for="tgl_pengadaan" class="form-label">Tgl Pengadaan</label>
    <input type="datetime" class="form-control" name="tgl_pengadaan" id="tgl_pengadaan">
  </div>
  <div class="mb-2">
    <label for="status_barang" class="form-label">Status Barang</label>
    <input type="text" class="form-control" name="status_barang" id="status_barang">
  </div>
  <div class="mb-2">
    <label for="ruang" class="form-label">Ruang</label>
    <input type="text" class="form-control" name="ruang" id="ruang">
  </div>
  <button type="submit" class="btn btn-primary float-end">SIMPAN</button>
</form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>