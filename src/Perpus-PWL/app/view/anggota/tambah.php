    <h1 id="tambahbuku">Halaman Tambah Anggota</h1>
    <form class="form-tambah" action=" <?= BASEURL ?>/anggota/tambahDataAnggota" method="post" enctype="multipart/form-data">
    <label for="nama">Nama Anggota</label>
    <input type="text" name="nama" id="nama" placeholder="Nama Anggota" required>
    <label for="alamat">Alamat Anggota</label>
    <input type="text" name="alamat" id="alamat" placeholder="Alamat Anggota" required>
    <label for="no_hp">No HP Anggota</label>
    <input type="text" name="no_hp" id="no_hp" placeholder="No HP Anggota" required>

    <button class="add-btn" type="submit">Tambah Anggota</button>
    </form>