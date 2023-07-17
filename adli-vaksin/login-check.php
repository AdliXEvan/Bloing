<?php
session_start();
include 'koneksi.php';

$email =$_POST['email'];
$password =$_POST['password'];

$data = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' and password='$password'");

$cek = mysqli_num_rows ($data);

if($cek > 0){
    $_SESSION['email']= $email;
    $_SESSION['status']= "login";
    header("location:index.php");

} else {
    header("location:login.php?pesan=gagal");
}