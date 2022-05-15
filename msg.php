<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $isim = $_POST['isim'];
  $msg = $_POST['msg'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>iletisim</title>
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-dark navbar-expand-lg" style="background-color:blueviolet">
        <div class="container">
          <a class="navbar-brand" href="./index.html">Ömer Kılınçoğlu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./index.html">Hakkında</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ozgecmis.html">Özgeçmiş</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./sehir.html">Şehir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./mirasimiz.html">Mirasımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./ilgili.html">İlgili Alanlarım</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./iletisim.html">İletisim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./login.html">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <header class="text-light pt-5 pb-5" style="background-color: blueviolet">
        <div class="container">
          <h1 class="">Gönderilen Bilgiler</h1>
        </div>
      </header>

      <section class="container col-md-4 mt-5 mb-5">
        <ul class="list-group">
          <li class="list-group-item"><?php echo $email ?></li>
          <li class="list-group-item"><?php echo $isim ?></li>
          <li class="list-group-item"><?php echo $msg ?></li>
        </ul>
      </section>


<footer class="text-light pt-5 pb-5" style="background-color: blueviolet">
        <div class="container text-center">
          <p> Web Teknolojileri Projesı - tüm haklar saklıdır @ Ömer Kılınçoglu 2022</p>
        </div>
      </footer>