<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | MyWebsite</title>
    <link rel="stylesheet" href="/css/user.css">
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <div class="search">Search</div>
        <div class="login">Login</div>
    </label>
    <div class="change-btn">
    </div>
    <form action="/user/siswa" method="post" class="wrap">
        <div class="form">
            <input type="text" name="nama" placeholder="Nama Siswa">
            <button type="submit">Cari</button>
        </div>
    </form>

    <form action="/admin/login" method="post" class="wrap-login">
        <div class="form">
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="password" name="password" placeholder="Password">
            <br>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>