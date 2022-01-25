<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/detail.css">
</head>
<body>
    <div class="wrap">
        <div class="img">
            <h3>Photo 3x3</h3>
        </div>
        <div class="content">
            <div class="text">
                <table>
                    <tr>
                        <td><b>Nama</b></td>
                        <td><b>:</b></td>
                        <td><?= $siswa['nama_siswa']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Alamat</b></td>
                        <td><b>:</b></td>
                        <td><?= $siswa['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Jenis Kelamin</b></td>
                        <td><b>:</b></td>
                        <td><?= $siswa['jenkel']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Jurusan</b></td>
                        <td><b>:</b></td>
                        <td><?php if ($siswa['id_jurusan'] == 1) {
                            echo "RPL";
                        }else {
                            echo "TKJ";
                        }; ?></td>
                    </tr>
                </table>
                <a href="/">Kembali ke home</a>
            </div>
        </div>
    </div>
</body>
</html>