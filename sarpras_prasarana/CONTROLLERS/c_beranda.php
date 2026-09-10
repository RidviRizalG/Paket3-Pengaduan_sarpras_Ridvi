<?php
session_start();
require_once '../config/koneksi.php';


if (!isset($_SESSION['nis'])) {
    header("Location: ../views/v_login.php");
    exit();
}

$modelAspirasi = new m_aspirasi($koneksi);

$nis = $_SESSION['nis'];
$nama_siswa = $_SESSION['nama_siswa'] ?? 'Siswa';
$kelas = $_SESSION['kelas'] ?? '-';

$list_aspirasi = $modelAspirasi->getAspirasiByNis($nis);
$list_kategori = $modelAspirasi->getKategori();

require_once '../views/v_beranda.php';
?>