
<?php Flasher::flash(); ?>

<a class="add-btn" id="addBuku" href="<?= BASEURL ?>/anggota/tambah">Tambah Anggota</a>

<div class="table-buku">
    <table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No. HP</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1?>
    <?php foreach ($data['anggota'] as $anggota) 
        : ?>
    <tr>
        <td><?= $i?></td>
        <td><?= $anggota["nama"]?></td>
        <td><?= $anggota["alamat"]?></td>
        <td><?= $anggota["no_hp"]?></td>
        <td >
        <div class="action-btn">
        <a class="ubah-btn" href="<?= BASEURL ?>/anggota/ubah/<?= $anggota['id_anggota'] ?>">Ubah </a>
        <a class="delete-btn" href="<?= BASEURL ?>/anggota/hapus/<?= $anggota['id_anggota'] ?>" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
        </div>
        </td>
    </tr>
    <?php $i++?>
    <?php endforeach ?>
    </table>
</div>

