<?= $this->extend('layouts/admin'); ?>

<?= $this->section('content'); ?>
    <form action="/admin/save/<?= $id; ?>" method="post" class="wrap-create">
        <h1>Input Data Siswa</h1>
        <div class="eror-txt">
        <?= $validation->getError('nama'); ?>
        </div>
        <input type="text" name="nama" placeholder="Nama Siswa" >
        <div class="eror-txt">
        <?= $validation->getError('alamat'); ?>
        </div>
        <input type="text" name="alamat" placeholder="Alamat" >
        <!-- <input type="text" name="jenkel" placeholder="Jenis Kelamin"> -->
        <select name="jenkel">
            <option value="Laki-Laki">Laki Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <input type="submit" value="Kirim Data">
    </form>
<?= $this->endSection(); ?>