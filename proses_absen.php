<?php
require_once "koneksi.php";

date_default_timezone_set("Asia/Jakarta");

class Absensi extends Database {

    public function absenKaryawan($kode) {
        $conn = $this->getConnection();

        // Cek apakah kode karyawan terdaftar
        $cek = $conn->query("SELECT nama FROM karyawan WHERE kode = '$kode'");
        if ($cek->num_rows == 0) {
            return "<span class='error'>❌ Kode karyawan tidak ditemukan!</span>";
        }

        $data = $cek->fetch_assoc();
        $nama = $data['nama'];
        $tanggal = date('Y-m-d');
        $jam = date('H:i:s');

        // Tentukan status keterlambatan
        $batas = strtotime('08:00:00'); // jam 8 pagi
        $jam_absen = strtotime($jam);
        $status = ($jam_absen > $batas) ? "Terlambat" : "Tepat waktu";

        // Simpan absensi
        $sql = "INSERT INTO absensi (kode, tanggal, jam_masuk, status) 
                VALUES ('$kode', '$tanggal', '$jam', '$status')";

        if ($conn->query($sql)) {
            // Kembalikan pesan hasil yang lebih ramah
            $ikon = ($status == "Terlambat") ? "⏰" : "✅";
            return "
                <div class='absen-msg'>
                    <h2>$ikon Selamat datang, <b>$nama</b>!</h2>
                    <p>Waktu absen Anda: <b>$jam</b></p>
                    <p>Status: <b>$status</b></p>
                </div>
            ";
        } else {
            return "<span class='error'>❌ Gagal mencatat absensi.</span>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode = $_POST['kode'] ?? '';
    $absen = new Absensi();
    $pesan = $absen->absenKaryawan($kode);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>AbsenKu - Hasil Absensi</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="topbar">
  <button class="openbtn" onclick="openNav()">☰</button>
  <h2>Hasil Absensi</h2>
</div>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="index.php">Home</a>
  <a href="rekap.php">Rekap</a>
</div>

<div class="result-box animate-fade">
  <?= $pesan; ?>
  <a href="index.php" class="back-btn">Kembali</a>
</div>

<script src="script.js"></script>
</body>
</html>
