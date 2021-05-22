<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
    <title>Giriş Yap</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <form method="post">
                    <div class="form-group">
                        <label for="kullaniciadi">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="userId" name="kullaniciadi" placeholder="Kullanıcı Adı">

                    </div>
                    <div class="form-group">
                        <label for="sifre">Password</label>
                        <input type="password" class="form-control" id="password" name="sifre" placeholder="Şifre">
                    
                        <a href="/index.html">git</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$kullaniciadi = "admin";
$sifre = "12345";
if (isset($_POST['kullaniciadi'])) {
    if ($_POST['kullaniciadi'] == $kullaniciadi && $_POST['sifre'] == $sifre && $_POST['captcha'] == true) {
        header("Location:Veritabani.php");
    } else {
        echo "<script type='text/javascript'>alert('Hatalı kullanıcı adı/şifre');</script>";
    }
}
?>