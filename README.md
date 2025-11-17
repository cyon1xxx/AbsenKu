⭐ AbsenKu

AbsenKu adalah aplikasi absensi berbasis web yang sederhana, cepat, dan mudah digunakan untuk mencatat kehadiran siswa/pegawai dan menampilkan rekap absensi pada halaman terpisah.
Dibuat dengan desain minimalis dan navigasi sidebar yang responsif

Dibuat oleh:
1. Adyaraka Geysar F.A (22)
2. Duta Alam A.I (11)
3. Fauzan Khairul A (17)
4. Fathan Abdillah (16)
5. Muhammad Izzam T (28)
6. Sakti Ageng P (34)

Guna menyelesaikan proyek informatika PAS semester 3

📌 Fitur Utama

✔ Absensi Harian

Form absensi untuk mengisi kehadiran dan tracking keterlambatan

✔ Rekap Absensi

Tersedia halaman khusus yang menampilkan ringkasan absensi dengan format yang rapi.

✔ Sidebar Responsif

Tombol hamburger (3 garis) membuka sidebar.

Menampilkan menu “Absensi”, “Rekap”, dan lainnya.

Sidebar dapat diperkecil/diperbesar sesuai interaksi.

✔ UI Minimalis

Desain ringan, responsif, dan mudah dipahami oleh pengguna.

✔ Opsional: Penyimpanan Database

Jika diaktifkan melalui PHP + MySQL, semua data absensi dapat disimpan dan diambil kembali.

📂 Struktur Folder

AbsenKu/

│── index.html          # Halaman absensi utama

│── rekap.html          # Halaman rekap absensi

│── style.css           # Styling utama aplikasi

│── script.js           # Logika sidebar & interaksi

│── /assets             # File gambar/icon

│── /php
│     └── koneksi.php   # Koneksi database (opsional)

│── README.md

⚙️ Cara Instalasi (Localhost/XAMPP)
1. Letakkan project

Copy folder AbsenKu ke: ....xampp/htdocs

2. Jalankan XAMPP

Aktifkan:
Apache,
MySQL (jika memakai database)

3. Akses Aplikasi

Buka browser: http://localhost/AbsenKu/

🗄️ Setup Database (Opsional)

Jika ingin menyimpan data absensi:

- Buka phpMyAdmin

- Buat database: absenku_db

- Buat tabel absensi (atau impor file SQL jika kamu punya):
id (INT, AUTO_INCREMENT, PRIMARY KEY)
nama (VARCHAR)
tanggal (DATE)
status (ENUM('Hadir','Izin','Sakit','Alfa'))

🧩 Teknologi yang Digunakan

HTML5

CSS3

JavaScript

PHP (opsional)

MySQL / MariaDB (opsional)

XAMPP / Localhost

🔗 Repository

https://github.com/username/AbsenKu

📜 Lisensi

Kode ini bebas digunakan, tidak ada lisensi (assis gpt jg banyak)
