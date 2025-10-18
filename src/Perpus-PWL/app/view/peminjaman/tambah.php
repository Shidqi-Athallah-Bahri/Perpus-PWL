    <h1 id="tambahbuku">Tambah Peminjaman</h1>
    <form class="form-tambah" action=" <?= BASEURL ?>/peminjaman/tambahPeminjaman" method="post" enctype="multipart/form-data">
    <label for="id_anggota">Nama Peminjam</label>
    <select name="id_anggota" id="nama_peminjam" required>
        <option value="" disabled selected>-- Pilih Nama Peminjam --</option>
        <?php foreach ($data['anggota'] as $anggota) : ?>
            <option value="<?= $anggota['id_anggota']; ?>"><?= $anggota['nama']; ?></option>
        <?php endforeach; ?>
    </select>
    <label for="id_buku">Judul Buku</label>
    <select name="id_buku" id="judul_buku" required>
        <option value="" disabled selected>-- Pilih Judul Buku --</option>
        <?php foreach ($data['buku'] as $buku) : ?>
            <option value="<?= $buku['id_buku']; ?>"><?= $buku['judul']; ?></option>
        <?php endforeach; ?>
    </select>
    <label for="tanggal_pinjam">Tanggal Pinjam</label>
    <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" required>
    <label for="tanggal_kembali">Tanggal Kembali</label>
    <input type="date" name="tanggal_kembali" id="tanggal_kembali" required>

    <button class="add-btn" type="submit">Tambah Data Peminjaman</button>
    </form>