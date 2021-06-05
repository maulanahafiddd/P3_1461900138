<!DOCTYPE html>
<html>
<head>
    <title>Pasien</title>
</head>
<body>
    <h3>Data Pasien</h3>
        <form action="/pasien/cari" method="GET">
        <input type="text" name="lihat" placeholder="Cari Nama Pasien" value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </form>
        <br>
        <form action="/pasien/kamar" method="GET">
        <input type="text" name="lihat" placeholder="Cari Kamar" value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </form>
        </br>
            <a href="/pasien/tambah"> Tambah Pasien Baru </a>
            <br/>
            <br/>
            <table border="1">
            <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
            </tr>
        @foreach($pasien as $p)
            <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->alamat }}</td>
            <td>
            <a href="/pasien/edit/{{ $p->id }}">Edit</a>
            |
            <a href="/pasien/hapus/{{ $p->id }}">Hapus</a>
            </td>
            </tr>
        @endforeach
            </table>
    </body>
</html>
