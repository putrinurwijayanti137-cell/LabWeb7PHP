# PRAKTIKUM 7 – PEMROGRAMAN SERVER-SIDE DENGAN PHP

## 1. Deskripsi
Project ini dibuat untuk memenuhi tugas Praktikum 7 mata kuliah Pemrograman Web dengan materi pemrograman server-side menggunakan PHP. Praktikum ini mencakup penggunaan variabel, operator, percabangan, perulangan, function, array, pengolahan form GET dan POST, serta validasi data.

## 2. Tujuan
- Memahami dasar pemrograman PHP.
- Menggunakan variabel, tipe data, operator, percabangan, dan perulangan.
- Memahami penggunaan function dan array.
- Mengolah data menggunakan metode GET dan POST.
- Menerapkan validasi dan sanitasi input pada form.

## 3. Tools yang Digunakan
- XAMPP sebagai server lokal.
- Apache sebagai web server.
- PHP sebagai bahasa pemrograman server-side.
- Visual Studio Code sebagai editor kode.
- Google Chrome sebagai browser.

## 4. Cara Menjalankan Project
1. Simpan folder `Lab7Web_PHP` di dalam folder `C:\xampp\htdocs`.
2. Buka XAMPP dan jalankan Apache.
3. Buka browser.
4. Masukkan alamat `http://localhost/Lab7Web_PHP/`.
5. Pilih halaman latihan yang ingin dijalankan.

## 5. Struktur Folder
```text
Lab7Web_PHP/
│
├── index.php
├── latihan2.php
├── latihan3.php
├── latihan4.php
├── latihan5.php
├── latihan6.php
├── latihan7.php
│
├── mini_project/
│   └── index.php
│
├── eksperimen/
│   ├── rata_rata.php
│   ├── pencarian.php
│   ├── format_rupiah.php
│   └── validasi_nim.php
│
├── Screenshot/
│   ├── 01_Latihan1.png
│   ├── 02_Latihan2.png
│   ├── 03_Latihan3.png
│   ├── 04_Latihan4.png
│   ├── 05_Latihan5_GET.png
│   ├── 06_Latihan6_Berhasil.png
│   ├── 07_Latihan6_Validasi.png
│   ├── 08_Latihan7_Berhasil.png
│   ├── 09_Latihan7_Validasi.png
│   ├── 10_MiniProject_Berhasil.png
│   ├── 11_MiniProject_Validasi.png
│   ├── 12_Eksperimen_RataRata.png
│   ├── 13_Eksperimen_Pencarian.png
│   ├── 14_Eksperimen_Rupiah.png
│   └── 15_Eksperimen_ValidasiNIM.png
│
└── README.md
```

## 6. Dokumentasi Screenshot

### Latihan 1 – Dasar PHP
**01_Latihan1.png**

Menampilkan halaman awal PHP yang berisi tulisan Belajar PHP, pesan keberhasilan menjalankan PHP, dan waktu server.

### Latihan 2 – Variabel dan Perhitungan Nilai
**02_Latihan2.png**

Menampilkan penggunaan variabel untuk menghitung nilai akhir berdasarkan nilai tugas, UTS, dan UAS, kemudian menentukan predikat nilai.

### Latihan 3 – Array dan Perulangan
**03_Latihan3.png**

Menampilkan daftar nama mahasiswa yang disimpan dalam array dan ditampilkan menggunakan perulangan foreach.

### Latihan 4 – Function
**04_Latihan4.png**

Menampilkan penerapan function PHP untuk menghitung diskon harga dan luas persegi panjang.

### Latihan 5 – Form GET
**05_Latihan5_GET.png**

Menampilkan proses pengiriman data menggunakan metode GET. Kata yang dimasukkan ditampilkan kembali dan terlihat pada parameter URL.

### Latihan 6 – Form POST
**06_Latihan6_Berhasil.png**

Menampilkan hasil pengiriman data nama dan program studi menggunakan metode POST ketika seluruh input telah diisi.

**07_Latihan6_Validasi.png**

Menampilkan pesan kesalahan ketika form dikirim dalam kondisi kosong sebagai bukti penerapan validasi input.

### Latihan 7 – Form Transaksi
**08_Latihan7_Berhasil.png**

Menampilkan perhitungan subtotal berdasarkan nama barang, harga, dan jumlah barang yang dimasukkan.

**09_Latihan7_Validasi.png**

Menampilkan validasi ketika pengguna memasukkan data yang tidak sesuai, seperti harga negatif.

### Mini Project – Form Pendaftaran
**10_MiniProject_Berhasil.png**

Menampilkan hasil pendaftaran yang berhasil dengan data nama, NIM, program studi, semester, dan email.

**11_MiniProject_Validasi.png**

Menampilkan pesan kesalahan ketika terdapat data wajib yang belum diisi atau tidak sesuai ketentuan.

### Eksperimen PHP
**12_Eksperimen_RataRata.png**

Menampilkan proses perhitungan rata-rata dari tiga nilai yang dimasukkan.

**13_Eksperimen_Pencarian.png**

Menampilkan fitur pencarian nama menggunakan data array.

**14_Eksperimen_Rupiah.png**

Menampilkan penggunaan function untuk mengubah angka menjadi format mata uang Rupiah.

**15_Eksperimen_ValidasiNIM.png**

Menampilkan proses pemeriksaan jumlah digit NIM sesuai ketentuan validasi yang diterapkan pada program.

## 7. Kesimpulan
Melalui praktikum ini, saya dapat memahami dasar pemrograman server-side menggunakan PHP, mulai dari pengolahan variabel dan data hingga penggunaan form, function, serta validasi input. Seluruh latihan dijalankan melalui server lokal XAMPP menggunakan browser.