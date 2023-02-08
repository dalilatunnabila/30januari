<html>
    <head>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_guru">Nama Guru:</label>
                    <input type="text" name="nama_guru"/>
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <input type="text" name="alamat"/>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <label><input type="radio" name="jenis_kelamin" Value="laki-laki" />Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" Value="perempuan" />Perempuan</label>
                </p>
                <p>
                    <label for="nama_mapel">Nama Mapel :</label>
                    <input type="text" name="nama_mapel"/>
                </p>
                <p>
                    <label for="ruangan">Ruangan :</label>
                    <input type="number" name="ruangan"/>
                </p>
                <p>
                    <input type="submit" value="Tambah" name="tambah"/>
                </p>
</fieldset>
</form>
</body>
</html>