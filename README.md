|Nama  | Eka Juliyana Rahayu |
| -----| ------------------ |
|NIM   | 312310594 |
|kelas | TI.23.A6 |
| Mata Kuliah | Pemrograman Web2 |
| link youtube |           |

## Daftar Isi
- [📄 DAFTAR PRAKTIKUM](#daftar-praktikum)
- [⚛️ Teknologi yang Digunakan](#teknologiyangdigunakan)
- [🚀 Alat Pengembangan & Pengujian](#alatpengembanganpengujian)
- [📊 Kegunaan Aplikasi Artikel](#kegunaanaplikasiartikel)
- [🔧 Fitur-fitur utama (User)](#fitur-fiturutamauser)
- [🔧 Fitur-fitur utama (Admin)](#fitur-fiturutamaadmin)
- [VueJs](#vuejs)




#  📄 DAFTAR PRAKTIKUM
| Praktikum | Judul Praktikum                          | Deskripsi Singkat                          |
|----|------------------------------------------|--------------------------------------------|
| 1  | PHP Framework (Codeigniter)                  | Setup awal CI4 secara manual.              |
| 2  | Framework Lanjutan (CRUD)   | Tambah, edit, hapus artikel dasar.         |
| 3  | View Layout & View Cell                  | Modularisasi tampilan dan komponen dinamis |
| 4  | Framework Lanjutan (Modul Login)              | Integrasi kategori dengan artikel          |
| 5  | Pignation Dan Pencarian                        | Login sederhana berbasis session           |
| 6  | Upload File Gambar          | Tampilan admin + filter kategori & judul   |
| 7  | Relasi Tabel dan Query Builder                        | Menampilkan data artikel via jQuery AJAX   |
| 8  | AJAX                          | Pencarian, filter kategori, pagination via AJAX |
| 9  | Implementasi AJAX Pignation dan Search                         | API untuk get, post, put, delete artikel   |
| 10 | Testing API dengan Postman               | Uji semua endpoint API menggunakan Postman |
| 11 | Vue.js            | Integrasi frontend Vue.js dengan REST API  |

# ⚛️ Teknologi yang Digunakan
## 1. Backend:
   - PHP 8.x
     Bahasa pemrograman utama untuk pengembangan sisi server.
   - CodeIgniter 4
     Framework PHP yang digunakan sebagai kerangka kerja utama untuk membangun aplikasi dengan pola MVC (Model-View-Controller).
   - MySQL / MariaDB
     Sistem manajemen basis data yang menyimpan informasi artikel dan kategori.
   - RESTful API (CodeIgniter ResourceController)
     Digunakan untuk membuat endpoint yang dapat diakses oleh aplikasi frontend atau klien lain (seperti Postman).
## 2. Frontend:
   - HTML5 & CSS3
     Digunakan untuk struktur dan styling dasar halaman.
   - JavaScript (ES6)
     Bahasa skrip yang digunakan di sisi klien.
   - jQuery
     Library JavaScript untuk manipulasi DOM dan AJAX lebih mudah dan cepat.
   - Vue.js 3 (CDN)
     Framework JavaScript modern untuk membuat tampilan dinamis dan reaktif.
   - Axios
     Library JavaScript untuk melakukan HTTP request ke API secara asynchronous.
## 3. Tool & Testing:
   - Postman
     Aplikasi REST Client yang digunakan untuk menguji endpoint REST API (GET, POST, PUT, DELETE).
   - VS Code / Code Editor lain
     Untuk menulis kode backend dan frontend.
   - XAMPP / Laragon / Apache + MySQL
     Digunakan untuk menjalankan server lokal (localhost) selama pengembangan.
   - Browser (Chrome / Firefox)
     Untuk menampilkan dan menguji antarmuka aplikasi.

# 🚀 Alat Pengembangan & Pengujian:

* Postmant: Digunakan untuk mencoba berbagai metode HTTP (GET, POST, PUT, DELETE) pada REST API.

  ## GET (Menampilkan semua data)
  ![Screenshot 2025-07-06 185520](https://github.com/user-attachments/assets/07917073-5d80-45f0-885f-c4006d64b623)

  ## POST (Menambah data )
  ![Screenshot 2025-07-06 185300](https://github.com/user-attachments/assets/ee9e52ba-6825-4a18-9064-46c7639bfa56)

  ## PUT (Mengubah data)
  ![Screenshot 2025-07-06 194909](https://github.com/user-attachments/assets/55855d14-7da2-45d7-b467-7eca9751f884)

  ## DELETE (Menghapus data)
  ![Screenshot 2025-07-06 184950](https://github.com/user-attachments/assets/df2c6fc1-58af-4cc1-b5c1-c2de5e74c2cf)

* VS Code / Editor lainnya: membuat dan mengelola kode program.
* XAMPP / Laragon / Apache + MySQL: sebagai server lokal dalam proses pengembangan aplikasi.
* Browser (Chrome / Firefox): menampilkan dan mengecek tampilan serta fungsi web yang dibuat secara langsung.



# 📊 Kegunaan Aplikasi Artikel
  Aplikasi Artikel ini adalah aplikasi web berbasis CodeIgniter 4 yang dirancang untuk membantu pengguna menyimpan, mengelola, dan menampilkan konten artikel secara dinamis. Aplikasi ini dapat digunakan oleh admin maupun user umum, dengan dukungan berbagai fitur seperti CRUD (Create, Read, Update, Delete), filter, pencarian, serta API untuk integrasi frontend modern.
Aplikasi Artikel ini merupakan aplikasi web berbasis CodeIgniter 4 yang dikembangkan untuk memudahkan pengguna dalam membuat, mengedit, menghapus, dan menampilkan artikel secara dinamis. Aplikasi ini menyediakan fitur CRUD (Create, Read, Update, Delete) dan mendukung pengelolaan status artikel seperti draft dan publish, sehingga admin dapat mengatur konten sesuai kebutuhan.
  Selain itu, aplikasi ini juga dilengkapi dengan RESTful API yang memungkinkan integrasi dengan frontend modern seperti Vue.js, sehingga tampilan artikel dapat lebih interaktif dan responsif. Aplikasi ini cocok digunakan untuk keperluan blog, portal berita sederhana, atau sistem manajemen konten lainnya.


# 🔧 Fitur-fitur utama (User) :

### 🏠 Home
![image](https://github.com/user-attachments/assets/afebcabc-c04f-415b-8945-8af329aaaf31)

### 📰 Artikel
![image](https://github.com/user-attachments/assets/bc99bcb5-05e6-4f6a-9931-a1d595aca517)
![image](https://github.com/user-attachments/assets/26895b17-4248-41b6-a11a-699fa40b6dab)

### ℹ️ About
![image](https://github.com/user-attachments/assets/944e602c-818a-4dcd-9d92-06899e7b4fbb)

### 📞 Kontak
![image](https://github.com/user-attachments/assets/b3553e26-911a-4c77-b41a-f6fc7f8ed50c)

# 🔧 Fitur-fitur utama (Admin) :

### 🔐 Login
![image](https://github.com/user-attachments/assets/bd97867b-e6d8-4543-a3ff-d97275887420)

### 📝 Artikel
![image](https://github.com/user-attachments/assets/d35db740-863b-4fc2-b53b-6585fd42d5ec)

### ➕ Tambah artikel
![image](https://github.com/user-attachments/assets/8b757c96-9e7b-4149-9e6b-33f0dfc87b18)

### ✏️ Ubah artikel
![image](https://github.com/user-attachments/assets/3d1c538b-57e1-4cd6-882e-70b74abc285c)

### 🗑️ Hapus artikel
![image](https://github.com/user-attachments/assets/e7bdbde7-5353-4d2e-999b-ac52565a0b06)

# VueJs
![image](https://github.com/user-attachments/assets/05a77ab8-13cc-4606-8f13-db5428dc6c95)

![image](https://github.com/user-attachments/assets/38bd8bef-f97d-442c-bb6b-330347e64401)









