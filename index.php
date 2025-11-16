<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AbsenKu</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- 🔝 Topbar -->
<div class="topbar">
  <button class="openbtn" onclick="openNav()">☰</button>
  <h2>AbsenKu</h2>
</div>

<!-- 📂 Sidebar -->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="index.php">Home</a>
  <a href="rekap.php">Rekap</a>
</div>

<!-- ✨ Konten Utama -->
<div class="main-content">
  <form action="proses_absen.php" method="POST" class="glass-card animate-fade">
      <h2>Form Absensi</h2>
      <break></break>
      <h3>Masukkan kode anda</h3>
      <break></break>
      <input type="text" name="kode" placeholder="Masukkan kode karyawan" required>
      <button type="submit">Enter</button>
  </form>
</div>

<script src="script.js"></script>
</body>
</html>
