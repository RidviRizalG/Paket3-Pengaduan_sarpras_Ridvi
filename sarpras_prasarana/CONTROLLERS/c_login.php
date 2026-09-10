<?php
session_start();

require_once '../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nis = $_POST['login'];
    $password = $_POST['password'];

    $nis = mysqli_real_escape_string($conn, $nis);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM siswa 
              WHERE nis = '$nis' 
              AND password = '$password'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {

        $siswa = mysqli_fetch_assoc($result);

        $_SESSION['nis'] = $siswa['nis'];
        $_SESSION['nama_siswa'] = $siswa['nama_siswa'];
        $_SESSION['kelas'] = $siswa['kelas'];

        header("Location: c_beranda.php");
        exit();

    } else {

        echo "<script>
                alert('NIS atau Password yang Anda masukkan salah!');
                window.location.href = '../view/v_login.php';
              </script>";
        exit();
    }

} else {

    header("Location: ../view/v_login.php");
    exit();

}
?>