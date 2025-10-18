    <h1 id="tambahbuku">Halaman Ubah Anggota</h1>
    <form class="form-tambah" action=" <?= BASEURL ?>/anggota/ubahAnggota" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_anggota" value="<?= $data['anggota']['id_anggota']?>">
    <label for="nama">Nama Anggota</label>
    <input type="text" name="nama" id="nama" placeholder="Nama Anggota" required value="<?= $data['anggota']['nama']?>">
    <label for="alamat">Alamat Anggota</label>
    <input type="text" name="alamat" id="alamat" placeholder="Alamat Anggota" required value="<?= $data['anggota']['alamat']?>">
    <label for="no_hp">No HP Anggota</label>
    <input type="text" name="no_hp" id="no_hp" placeholder="No HP Anggota" required value="<?= $data['anggota']['no_hp']?>">

    <button class="add-btn" type="submit">Ubah Anggota</button>
    </form>