<?php
session_start();

//Keluar
$_SESSION = [];
session_unset();
session_destroy();
header("Location:login.php")?>