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
<img width="960" height="504" alt="Screenshot 2026-11-11 150307" src="https://github.com/user-attachments/assets/fec53c51-4674-4ad0-a692-2f9e0ac31860" />

Menampilkan halaman awal PHP yang berisi tulisan Belajar PHP, pesan keberhasilan menjalankan PHP, dan waktu server.

### Latihan 2 – Variabel dan Perhitungan Nilai
<img width="960" height="504" alt="Screenshot 2026-11-11 150827" src="https://github.com/user-attachments/assets/eb696a85-791c-4fbb-85a8-d9a58d667404" />


Menampilkan penggunaan variabel untuk menghitung nilai akhir berdasarkan nilai tugas, UTS, dan UAS, kemudian menentukan predikat nilai.

### Latihan 3 – Array dan Perulangan
<img width="960" height="504" alt="Screenshot 2026-11-11 150914" src="https://github.com/user-attachments/assets/ad715640-55eb-42e9-b60d-5b78926a7540" />


Menampilkan daftar nama mahasiswa yang disimpan dalam array dan ditampilkan menggunakan perulangan foreach.

### Latihan 4 – Function
<img width="960" height="504" alt="Screenshot 2026-11-11 151001" src="https://github.com/user-attachments/assets/154b84a1-1edd-45ce-b029-2e2bfa6e3a47" />


Menampilkan penerapan function PHP untuk menghitung diskon harga dan luas persegi panjang.

### Latihan 5 – Form GET
<img width="960" height="504" alt="Screenshot 2026-11-11 151106" src="https://github.com/user-attachments/assets/07e8f0b1-3747-4b4d-9588-0420495bfe1a" />


Menampilkan proses pengiriman data menggunakan metode GET. Kata yang dimasukkan ditampilkan kembali dan terlihat pada parameter URL.

### Latihan 6 – Form POST
<img width="960" height="504" alt="Screenshot 2026-11-11 151203" src="https://github.com/user-attachments/assets/2c230ebf-49a1-418b-ae4f-dc0b79860a33" />

Menampilkan hasil pengiriman data nama dan program studi menggunakan metode POST ketika seluruh input telah diisi.

<img width="960" height="504" alt="Screenshot 2026-11-11 151237" src="https://github.com/user-attachments/assets/0d10263b-9e1d-4ff6-8155-5c55485ddf07" />

Menampilkan pesan kesalahan ketika form dikirim dalam kondisi kosong sebagai bukti penerapan validasi input.

### Latihan 7 – Form Transaksi
<img width="960" height="504" alt="Screenshot 2026-11-11 151331" src="https://github.com/user-attachments/assets/7522686d-2b57-41fa-97a9-0b1a1f89afdb" />


Menampilkan perhitungan subtotal berdasarkan nama barang, harga, dan jumlah barang yang dimasukkan.

<img width="960" height="504" alt="Screenshot 2026-11-11 151408" src="https://github.com/user-attachments/assets/92fde767-dd4d-4b3d-821d-cdf5633ca6e2" />


Menampilkan validasi ketika pengguna memasukkan data yang tidak sesuai, seperti harga negatif.

### Mini Project – Form Pendaftaran
<img width="960" height="504" alt="Screenshot 2026-11-11 151516" src="https://github.com/user-attachments/assets/01fa02bc-23fc-40c2-82fc-08f2e3a1118c" />


Menampilkan hasil pendaftaran yang berhasil dengan data nama, NIM, program studi, semester, dan email.

<img width="960" height="504" alt="Screenshot 2026-11-11 151537" src="https://github.com/user-attachments/assets/edd50920-18da-49ac-9766-efa76c121357" />


Menampilkan pesan kesalahan ketika terdapat data wajib yang belum diisi atau tidak sesuai ketentuan.

### Eksperimen PHP
<img width="960" height="504" alt="Screenshot 2026-11-11 151629" src="https://github.com/user-attachments/assets/51897066-d206-4180-9792-6d3191d387e7" />


Menampilkan proses perhitungan rata-rata dari tiga nilai yang dimasukkan.

<img width="960" height="504" alt="Screenshot 2026-11-11 151658" src="https://github.com/user-attachments/assets/0912ff58-3f7d-4fc6-ab9a-fa67819d9fa7" />


Menampilkan fitur pencarian nama menggunakan data array.

<img width="960" height="504" alt="Screenshot 2026-11-11 151721" src="https://github.com/user-attachments/assets/9cb382ba-4514-4cff-9081-e9bd58ab9dcc" />


Menampilkan penggunaan function untuk mengubah angka menjadi format mata uang Rupiah.

<img width="960" height="504" alt="Screenshot 2026-11-11 151746" src="https://github.com/user-attachments/assets/29e30138-057e-4d69-b096-17f140130feb" />


Menampilkan proses pemeriksaan jumlah digit NIM sesuai ketentuan validasi yang diterapkan pada program.

## 7. Kesimpulan
Melalui praktikum ini, saya dapat memahami dasar pemrograman server-side menggunakan PHP, mulai dari pengolahan variabel dan data hingga penggunaan form, function, serta validasi input. Seluruh latihan dijalankan melalui server lokal XAMPP menggunakan browser.
