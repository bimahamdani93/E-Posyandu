<?php
session_start();
include "../../koneksi/koneksi.php";
$user = $_POST['username'];
$psw = md5($_POST['psw']);
$op = $_GET['op'];

if ($op == "in") {
    $query1 = "SELECT * FROM register where username = '$user' AND pass = '$psw'";
    $query = $koneksi->query($query1);
    if (mysqli_num_rows($query) == 1) {
        $data = $query->fetch_array();
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        if ($data['level'] == "Admin") {
            header("location:../../pages/layoutdashboard.php?url=beranda");
        } else if ($data['level'] == "Pengguna") {
            header("location:../../pages/layoutdashboard.php?url=beranda");
        } else {
            echo "<script>
                    alert('Login Gagal, Username atau Password Salah!!!');
                    window.location.href = ('form_login.php');
                </script>";
        }
    }
} else if ($op == "out") {
    unset($_SESSION['id_user']);
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location:formlogin.php");
}
