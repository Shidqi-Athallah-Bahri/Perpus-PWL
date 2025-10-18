    <h1 id="tambahbuku">Halaman Tambah Buku</h1>
    <form class="form-tambah" action=" <?= BASEURL ?>/buku/tambahDataBuku" method="post" enctype="multipart/form-data">
    <label for="judul">Judul Buku</label>
    <input type="text" name="judul" id="judul" placeholder="Judul Buku" required>
    <label for="penulis">Penulis Buku</label>
    <input type="text" name="penulis" id="penulis" placeholder="Penulis Buku" required>
    <label for="penerbit">Penerbit Buku</label>
    <input type="text" name="penerbit" id="penerbit" placeholder="Penerbit Buku" required>
    <label for="tahun_terbit">Tahun Terbit</label>
    <input type="number" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun Terbit" required>
    <label for="kategori">Kategori Buku</label>
    <input type="text" name="kategori" id="kategori" placeholder="Kategori Buku" required>
    <label for="jumlah_stok">Jumlah Stok</label>
    <input type="number" name="jumlah_stok" id="jumlah_stok" placeholder="Jumlah Stok" required>
    <label for="cover">Cover Buku</label>
    <input type="file" name="cover" id="cover" placeholder="Cover Buku" required>

    <button class="add-btn" type="submit">Tambah Buku</button>
    </form>
