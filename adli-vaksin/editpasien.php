
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Pasien</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM pasien where idPasien='$_GET[edit]'");
                ?>
                <?php 
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>

                        <input type="text" class="form-control mb-3" name="nama" placeholder="Nama Pasien" value="<?= $row['nama'] ?>">

                    </div>
                    <div class="form-group">

                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="jeniskelamin" value="Laki-laki"> Laki-laki

                        </div>

                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="jeniskelamin" value="Perempuan"> Perempuan

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat</label>

                        <input type="text" class="form-control mb-3" name="alamat" placeholder="Alamat" value="<?= $row['alamat'] ?>">

                    </div>
                    <div class="form-group">
                        <label for="telp">telp</label>

                        <input type="number" class="form-control mb-3" name="telp" placeholder="Telepon" value="<?= $row['telp'] ?>">

                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>

                        <input type="number" class="form-control mb-3" name="umur" placeholder="Umur" value="<?= $row['umur'] ?>">

                    </div>
                    <div class="form-group">
                        <label for="tglvaksin">Tanggal Vaksin</label>

                        <input type="text" class="form-control mb-3" name="tglvaksin" placeholder="Tanggal Vaksin" value="<?= $row['tglvaksin'] ?>">

                    </div>
                    <div class="form-group">
                            <label for="jenisvaksin">Jenis Vaksin</label>
                            <select name="jenisvaksin" id="jenisvaksin" class="form-control" value="<?= $row['jenisvaksin'] ?>">
                                <option value="">Pilih Jenis Vaksin Terbaru </option>
                                <option value="Vaksin Pertama">Vaksin Pertama</option>
                                <option value="Vaksin Kedua">Vaksin Kedua</option>
                                <option value="Vaksin Ketiga">Vaksin Ketiga</option>

                            </select>
                        </div>

                        <div class="form-group mt-3">
                                <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                            </div>
                    </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>