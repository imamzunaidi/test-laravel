<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RS AL HUDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="countainer mt-3">
        <h1 class="text-center mb-3">Data Inventori</h1>
        <a href="{{ route('/admin.create') }}" class="btn btn-primary mb-3"> + Tambah Data Baru</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <th>Nomor Inventori</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Produsen</th>
                    <th>Merk</th>
                    <th>Kategori</th>
                    <th>Jenis</th>
                    <th>Asal Barang</th>
                    <th>tgl Pengadaan</th>
                    <th>Status Barang </th>
                    <th>Ruang</th>
                    <th>Aksi</th>
                    </thead>
                    <tbody>
                      @foreach ($data_inventori as $d)
                      <tr>
                      <td>{{ $d->id }}</td>
                      <td>{{ $d->kode_barang }}</td>
                      <td>{{ $d->nama_barang}}</td>
                      <td>{{ $d->produsen}}</td>
                      <td>{{ $d->merk}}</td>
                      <td>{{ $d->kategori}}</td>
                      <td>{{ $d->jenis}}</td>
                      <td>{{ $d->asal_barang}}</td>
                      <td>{{ $d->tgl_pengadaan}}</td>
                      <td>{{ $d->status_barang}}</td>
                      <td>{{ $d->ruang}}</td>
                        <td>
                        <a href=""class="btn btn-warning btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm">Hapus</a>
                        </td>
</tr>
@endforeach
                    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>