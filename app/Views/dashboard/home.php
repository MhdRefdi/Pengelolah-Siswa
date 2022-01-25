<?= $this->extend('layouts/admin'); ?>

<?= $this->section('content'); ?>
    <input type="checkbox" name="check" id="check">    
    <label for="check">
        <div class="cancel">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </label>
    <div class="wrap">
        <h1>Dashboard</h1>
        <p>Selamat datang <span>Admin</span> di website pengelolahan siswa</p>
    </div>
<?= $this->endSection(); ?>