<?= $this->extend('layouts/admin'); ?>

<?= $this->section('content'); ?>
    <div class="warp-siswa">
        <header>Data Siswa</header>
        <div class="add">
            <form action="/admin/add/<?= $id; ?>" method="post">
                <button type="submit" class="add-btn">Tambah Data +</button>
            </form>
        </div>
        <table>
            <thead>
                <th>#</th>
                <th>Nama Siswa</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $i=1; foreach($siswa as $s) : ?>
                <tr>
                    <td data-label="#"><?= $i++; ?></td>
                    <td data-label="Nama Siswa"><?= $s['nama_siswa']; ?></td>
                    <td data-label="Alamat"><?= $s['alamat']; ?></td>
                    <td data-label="Jenis Kelamin"><?= $s['jenkel']; ?></td>
                    <td data-label="Jurusan"><?= $s['nama_jurusan']; ?></td>
                    <td>
                        <div class="btn">
                            <form action="/admin/edit/<?= $id; ?>/<?= $s['slug']; ?>" method="post">
                                <?= csrf_field(); ?>
                                <button type="submit" class="edit-btn">Edit</button>
                            </form>
                            
                            <form action="/admin/delete/<?= $s['id_siswa']; ?>/<?= $id; ?>" method="post">
                                <?= csrf_field(); ?>
                                <button type="submit" class="delete-btn">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->endSection(); ?>