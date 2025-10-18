

<h1 id="tambahbuku">Halaman Ubah Buku</h1>
<form class="form-tambah" action="<?= BASEURL ?>/buku/ubahBuku" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_buku" value="<?= $data['buku']['id_buku']; ?>">
    <label for="judul">Judul Buku</label>
    <input type="text" name="judul" id="judul" placeholder="Judul Buku" required value="<?= $data['buku']['judul']; ?>">
    <label for="penulis">Penulis Buku</label>
    <input type="text" name="penulis" id="penulis" placeholder="Penulis Buku" required value="<?= $data['buku']['penulis']; ?>">
    <label for="penerbit">Penerbit Buku</label>
    <input type="text" name="penerbit" id="penerbit" placeholder="Penerbit Buku" required value="<?= $data['buku']['penerbit']; ?>">
    <label for="tahun_terbit">Tahun Terbit</label>
    <input type="number" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun Terbit" required value="<?= $data['buku']['tahun_terbit']; ?>">
    <label for="kategori">Kategori Buku</label>
    <input type="text" name="kategori" id="kategori" placeholder="Kategori Buku" required value="<?= $data['buku']['kategori']; ?>">
    <label for="jumlah_stok">Jumlah Stok</label>
    <input type="number" name="jumlah_stok" id="jumlah_stok" placeholder="Jumlah Stok" required value="<?= $data['buku']['jumlah_stok']; ?>">
    <label for="cover">Cover Buku</label>
    <input type="file" name="cover" id="cover" placeholder="Cover Buku">
    <img src="<?= BASEURL ?>/asset/<?= $data['buku']['cover']; ?>" alt="<?= $data['buku']['judul']; ?>" width="100">
    <input type="hidden" name="coverLama" value="<?= $data['buku']['cover']; ?>">

    <button class="add-btn" type="submit">Ubah Buku</button>
</form>

