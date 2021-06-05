<!DOCTYPE html>
<html>
<head>
    <title>Join Pasien</title>
</head>
<body>
        <h3>Join Data Pasien</h3>
        <form action="/pasien/cari" method="GET">
        <input type="text" name="lihat" placeholder="Cari pasien .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </form>
        <br>
        <form action="/pasien/kamar" method="GET">
        <input type="text" name="lihat" placeholder="Cari Kamar" value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </form>

        <a href="/pasien/tambah"> Tambah Pasien Baru </a>
        <br/>
        <br/>
        <table border="1">
        <tr>
        <th>Kamar</th>
        <th>Pasien</th>
        <th>dokter</th>
        <th>Nama</th>

        </tr>
    @foreach($kamar as $p)
        <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nama2}}</td>
        <td>{{ $p->nama}}</td>
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
