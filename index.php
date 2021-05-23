<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
    <script src="https://www.google.com/recaptcha/api.js?hl=tr"></script>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
    <title>Giriş Yap</title>
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-6 offset-3">
            <form method="post">
                    <div class="form-group">
                        <label for="kullaniciadi">Kullanıcı Adı</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kullaniciadi" placeholder="Kullanıcı Adı">
                        
                    </div>
                    <div class="form-group">
                        <label for="sifre">Password</label>
                        <input type="password" class="form-control" id="password" name="sifre" placeholder="Şifre">
                    </div>
                    <button type="submit" class="btn btn-primary">Girş Yap</button>
                </form>
            </div>
        </div>
    </div>
    <script type='text/javascript'>alert("HOŞGELDİNİZ")</script>

</body>

</html>









<?php
$kullaniciadi = "b201210072@sakarya.edu.tr";
$sifre = "b201210072";
if (isset($_POST['kullaniciadi'])) {
    if ($_POST['kullaniciadi'] == $kullaniciadi && $_POST['sifre'] == $sifre) {
        header("Location:ana-sayfa.html");
    } else {
        echo "<script type='text/javascript'>alert('Hatalı kullanıcı adı/şifre');</script>";
    }
}
?>