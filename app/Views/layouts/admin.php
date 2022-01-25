<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin | MyWebsite</title>
    <link rel="stylesheet" href="/css/admin.css" />
    <link rel="stylesheet" href="/css/home.css" />
    <link rel="stylesheet" href="/css/siswa.css" />
    <link rel="stylesheet" href="/css/create.css" />
    <link rel="stylesheet" href="/css/edit.css" />
</head>

<body>
    <div class="sidebar">
        <header>Dashboard</header>
        <ul class="links">
            <li><a href="/admin/home">Home</a></li>
            <li><span>Data Siswa +</span>
                <ul class="sub-menu">
                    <li><a href="/admin/1">RPL</a></li>
                    <li><a href="/admin/2">TKJ</a></li>
                </ul>
            </li>
            <li><a href="#">Data Guru</a></li>
            <li><a href="#">Jadwal Mapel</a></li>
            <li><a href="/admin/logout">Logout</a></li>
        </ul>
    </div>

    <div class="container">
        <?= $this->renderSection('content'); ?>
    </div>
</body>

</html>