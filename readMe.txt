# WPU-PHP Perpus-PWL

Aplikasi Perpustakaan sederhana berbasis PHP MVC.

## Struktur Folder

```
src/
  Perpus-PWL/
    app/
      config/         # Konfigurasi aplikasi (database, dll)
      controllers/    # Controller MVC (Anggota, Buku, Peminjaman, Setup)
      core/           # Core MVC (App, Controller, Database, Flasher)
      models/         # Model MVC (AnggotaModel, BukuModel, dll)
      view/           # View (template dan halaman utama)
        anggota/
        buku/
        home/
        peminjaman/
        setup/
        templates/
      init.php        # Inisialisasi aplikasi
    public/
      index.php       # Entry point aplikasi
      asset/          # File gambar cover buku
      css/            # Style CSS
      js/             # Javascript
      Penjelasan.txt  # Penjelasan aplikasi
.docker/
  nginx/              # Konfigurasi Nginx
  php/                # Dockerfile PHP
  sql/                # (opsional) Skrip SQL
```

## Cara Install & Jalankan

1. Clone repository ini
2. Copy file contoh konfigurasi database 
   Edit `src/Perpus-PWL/app/config/config.php` sesuai database (jika anda menggunakan docker tinggal run docker-compose.yaml).
3. Jalankan web server 
   - Bisa pakai XAMPP/Laragon (letakkan folder di `htdocs`)
   - Atau gunakan Docker (`.docker` sudah tersedia)
4. Akses aplikasi 
   Buka browser ke `http://localhost/PWL-Perpus/public` (atau sesuai path server kamu)
5. Setup database 
   Jalankan menu setup (controller `SetupController`) untuk membuat tabel dan data awal.

## Fitur

- CRUD Buku, Anggota, Peminjaman
- Upload cover buku
- Hitung denda otomatis (backend)
- Flash message (notifikasi)
- MVC sederhana
- Docker support (Nginx + PHP)

## Lisensi
MIT