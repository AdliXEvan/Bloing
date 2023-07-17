
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Akun</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Akun</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM user where id='$_GET[edit1]'");
                ?>
                <?php 
                while ($row = $panggil->fetch_assoc()) {
                ?>
                    <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email</label>

                        <input type="text" class="form-control mb-3" name="email" placeholder="email" value="<?= $row['email'] ?>">

                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>

                        <input type="text" class="form-control mb-3" name="username" placeholder="Username" value="<?= $row['username'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>

                        <input type="text" class="form-control mb-3" name="password" placeholder="Password" value="<?= $row['password'] ?>">

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