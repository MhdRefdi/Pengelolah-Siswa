<?= $this->extend('layouts/admin'); ?>

<?= $this->section('content'); ?>
    <form action="/admin/update/<?= $id; ?>/<?= $siswa['id_siswa']; ?>" method="post" class="wrap-edit">
        <h1>Input Ubah Siswa</h1>
        <div class="eror-txt">
            <?= $validation->getError('nama'); ?>
        </div>
        <input type="text" name="nama" value="<?= (old('nama')) ? old('nama') : $siswa['nama_siswa'] ?>" >
        <div class="eror-txt">
            <?= $validation->getError('alamat'); ?>
        </div>
        <input type="text" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $siswa['alamat'] ?>" >
        <input type="hidden" name="slug" value="<?= $siswa['slug']; ?>" >
        <select name="id_jurusan">
            <option value="1">RPL</option>
            <option value="2">TKJ</option>
        </select>
        <select name="jenkel">
            <option value="Laki-Laki">Laki Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <input type="submit" value="Kirim Data">
    </form>
<?= $this->endSection(); ?>