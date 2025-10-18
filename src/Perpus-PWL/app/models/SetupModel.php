<?php

class SetupModel{
    private $db;

    public function __construct() {
        $this->db = new Database;
        $this->db->query("Drop table if exists peminjaman, anggota, buku;");
        $this->db->execute();
    }

    public function createTable() {
        $this->db->query("CREATE TABLE IF NOT EXISTS buku (
            id_buku INT(11) AUTO_INCREMENT PRIMARY KEY,
            judul VARCHAR(150) NOT NULL,
            penulis VARCHAR(100),
            penerbit VARCHAR(100),
            tahun_terbit INT(11),
            kategori VARCHAR(50),
            cover VARCHAR(50),
            jumlah_stok INT(11),
            status_buku ENUM('Ada', 'Tidak ada') DEFAULT 'Ada'
                );");
        $this->db->execute();

        $this->db->query("
            CREATE TABLE IF NOT EXISTS anggota (
            id_anggota INT(11) AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(100) NOT NULL,
            alamat VARCHAR(200),
            no_hp VARCHAR(15),
            status_anggota ENUM('Aktif', 'Tidak Aktif') DEFAULT 'Aktif'
            );");
        $this->db->execute();

        $this->db->query("CREATE TABLE IF NOT EXISTS peminjaman (
            id_peminjaman INT(11) AUTO_INCREMENT PRIMARY KEY,
            id_buku INT(11),
            id_anggota INT(11),
            tanggal_pinjam DATE,
            tanggal_kembali DATE,
            status ENUM('Dipinjam', 'Dikembalikan') DEFAULT 'Dipinjam',
            FOREIGN KEY (id_buku)
            REFERENCES buku(id_buku)
            ON DELETE RESTRICT
            ON UPDATE CASCADE,
            FOREIGN KEY (id_anggota)
            REFERENCES anggota(id_anggota)
            ON DELETE RESTRICT
            ON UPDATE CASCADE
            );");
            $this->db->execute();
    }

    public function insertIntoAnggota(){
        $this->db->query("INSERT INTO anggota (nama, alamat, no_hp) VALUES
                        ('Andi', 'Bandung', '081234567890'),
                        ('Budi', 'Jakarta', '082134567891'),
                        ('Citra', 'Surabaya', '083134567892'),
                        ('Dewi', 'Medan', '084134567893'),
                        ('Eko', 'Yogyakarta', '085134567894'),
                        ('Fajar', 'Malang', '086134567895'),
                        ('Gina', 'Bekasi', '087134567896'),
                        ('Hadi', 'Tangerang', '088134567897'),
                        ('Intan', 'Depok', '089134567898'),
                        ('Joko', 'Semarang', '081934567899');");
        $this->db->execute();
    }

    public function insertIntoBuku(){
        $this->db->query("INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, kategori, cover, jumlah_stok) VALUES
                        ('Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 'Fiksi', 'laskar_pelangi.png', 2),
                        ('Bumi Manusia', 'Pramoedya Ananta Toer', 'Lentera Dipantara', 1980, 'Sejarah', 'bumi_manusia.png', 1),
                        ('Emotional Intelligence', 'Daniel Goleman', 'Gramedia Pustaka Utama', 2009, 'Fiksi', 'emotional.png', 3),
                        ('Ayat-Ayat Cinta', 'Habiburrahman El Shirazy', 'Republika', 2004, 'Romance', 'ayat-ayat-cinta.png', 3),
                        ('Sang Pemimpi', 'Andrea Hirata', 'Bentang Pustaka', 2006, 'Fiksi', 'sang_pemimpi.png', 4),
                        ('Perahu Kertas', 'Dewi Lestari', 'Bentang Pustaka', 2009, 'Romance', 'perahu_kertas.png', 2),
                        ('5 cm', 'Donny Dhirgantoro', 'Mizan Pustaka', 2005, 'Adventure', '5_cm.png', 1),
                        ('Dilan 1990', 'Pidi Baiq', 'Pastel Books', 2014, 'Romance', 'dilan_1990.png', 4),
                        ('Atomic Habits', 'James Clear', 'Media Kita', 2016, 'Fiksi', 'atomic.png', 5),
                        ('Laut Bercerita', 'Tere Liye', 'Gramedia Pustaka Utama', 2013, 'Romance', 'laut_bercerita.png', 3);");
        $this->db->execute();
    }

    public function insertIntoPeminjaman(){
    $this->db->query("INSERT INTO peminjaman (id_buku, id_anggota, tanggal_pinjam, tanggal_kembali, status) VALUES
        (1, 1, '2025-08-25', '2025-09-02', 'Dikembalikan'),
        (2, 2, '2025-08-27', '2025-09-04', 'Dikembalikan'),
        (3, 3, '2025-08-29', '2025-09-06', 'Dipinjam'),
        (4, 4, '2025-08-31', '2025-09-08', 'Dipinjam'),
        (5, 5, '2025-09-02', '2025-09-09', 'Dipinjam'),
        (6, 6, '2025-10-03', '2025-10-10', 'Dipinjam'),
        (7, 7, '2025-10-04', '2025-10-11', 'Dipinjam'),
        (8, 8, '2025-10-05', '2025-10-12', 'Dipinjam'),
        (9, 9, '2025-10-06', '2025-10-13', 'Dipinjam'),
        (10, 10, '2025-10-07', '2025-10-14', 'Dipinjam');");
    $this->db->execute();
}

}