<?php
require_once "koneksi.php";

class Rekap extends Database {
    public function getAll() {
        $conn = $this->getConnection();
        return $conn->query("SELECT a.id_absensi, a.kode, k.nama, a.tanggal, a.jam_masuk, a.status
                             FROM absensi a 
                             JOIN karyawan k ON a.kode = k.kode
                             ORDER BY a.tanggal DESC, a.jam_masuk DESC");
    }
}

$rekap = new Rekap();
$data = $rekap->getAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>AbsenKu - Rekap Absensi</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="topbar">
  <button class="openbtn" onclick="openNav()">☰</button>
  <h2>Rekap Absensi</h2>
</div>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="index.php">Home</a>
  <a href="rekap.php">Rekap</a>
</div>

<div class="main-content animate-fade">
  <table>
    <tr>
      <th>No</th>
      <th>Kode</th>
      <th>Nama</th>
      <th>Tanggal</th>
      <th>Jam Masuk</th>
      <th>Status</th>
    </tr>
    <?php 
    if ($data && $data->num_rows > 0) {
        $no = 1;
        while ($row = $data->fetch_assoc()) {
            echo "<tr class='animate-row'>
                    <td>$no</td>
                    <td>{$row['kode']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['tanggal']}</td>
                    <td>{$row['jam_masuk']}</td>
                    <td>{$row['status']}</td>
                  </tr>";
            $no++;
        }
    } else {
        echo "<tr><td colspan='6'>Belum ada data absensi.</td></tr>";
    }
    ?>
  </table>
</div>

<script src="script.js"></script>
</body>
</html>
