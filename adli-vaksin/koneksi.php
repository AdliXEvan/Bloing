<?php
$koneksi = new mysqli('localhost', 'root', '', 'vaksin')
    or die(mysqli_error($koneksi));

    //Dashboard
if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $umur = $_POST['umur'];
    $tglvaksin = $_POST['tglvaksin'];
    $jenisvaksin = $_POST['jenisvaksin'];

    $koneksi->query("INSERT INTO pasien (idPasien, nama, jeniskelamin, alamat, telp, umur, tglvaksin, jenisvaksin) values ('$idPasien,','$nama','$jeniskelamin','$alamat','$telp', '$umur','$tglvaksin','$jenisvaksin')");

    header('location:index.php');
}
if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");
    header('location:index.php');
}
if (isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $umur = $_POST['umur']; 
    $tglvaksin = $_POST['tglvaksin'];   
    $jenisvaksin = $_POST['jenisvaksin'];         
                
    $koneksi->query("UPDATE pasien SET nama='$nama',jeniskelamin='$jeniskelamin',alamat='$alamat',telp='$telp',umur='$umur',tglvaksin='$tglvaksin',jenisvaksin='$jenisvaksin'  where idPasien = '$idPasien'");
    header("location:index.php");
} 

    //Data Akun

    if (isset($_POST['Regis'])){
        $id = $_POST ['id'];
        $email = $_POST ['email'];
        $username = $_POST ['username'];
        $password = $_pOST ['password'];
    
        $koneksi->query("INSERT INTO user (id, email, username, password, ) values ('$id', '$email', '$username', '$password')");
    }  

    if (isset($_GET['id'])) {
        $idPasien = $_GET['id'];
        $koneksi->query("DELETE FROM user where id = '$id'");
        header('location:tables.php');
    }

    if (isset($_POST['edit1'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];      
                    
        $koneksi->query("UPDATE user SET id='$id',email='$email',username='$username',password='$password' where id = '$id'");
        header("location:tables.php");
    } 



?>              