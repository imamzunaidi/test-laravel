<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <h2>Data CPU Rs Al Huda</h2>
 
 <a href="/datacpu/tambah"> + Tambah CPU Baru</a>
 
 <br/>
 <br/>
 
 <table width='100%' bgcolor='FFFFFF' border='0' align='center' cellpadding='0' cellspacing='0'>
 <tr style="background-color: green;">
 <td>Merk cpu</td>
 <td>jumlah Barang</td>
 <th>Lokasi</th>
 </tr>
 @foreach($datacpu as $d)
 <tr>
 <td>{{ $d->merk_cpu }}</td>
 <td>{{ $d->jumlah_barang }}</td>
 <td>{{ $d->lokasi}}</td>
 <td>
 <a href="/datacpu/edit/{{ $d->id }}">Edit</a>
 |
 <a href="/datacpu/hapus/{{ $d->id }}">Hapus</a>
 </td>
 </tr>
 @endforeach
 </table>
</body>
</html>