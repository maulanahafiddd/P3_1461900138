<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pasien</title>
</head>
<body>
    <h3>Tambah Data Pasien</h3>
        <a href="/pasien"> Kembali</a>
        <br/>
        <br/>
        <form action="/pasien/store" method="post">
        {{ csrf_field() }}
        Id <input type="text" name="id" required="required"> <br/>
        Nama <input type="text" name="nama" required="required"> <br/>
        Alamat <textarea name="alamat" required="required"></textarea> <br/>
        <input type="submit" value="Simpan Data">
        </form>
    </body>
</html>