<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/icon.css">
    <link rel="stylesheet" href="hakkinda.html">
    <link rel="stylesheet" href="cv.html">
    <link rel="stylesheet" href="sehrim.html">
    <link rel="stylesheet" href="mirasimiz.html">
    <link rel="stylesheet" href="ilgialan.html">
    <link rel="stylesheet" href="iletisim.html">
    <link rel="stylesheet" href="login.html">
    <title>Anasayfa</title>
    
  </head>

  <body>
    <!--Menü Başlangıç-->

    <nav class="navbar navbar-expand-lg kapsayici fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand baslik" href="#">Antalya/Elmalı</a>
        <button 
        class="navbar-toggler icon_border" 
        type="button"
        data-bs-toggle="collapse" 
        data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
          <span class="icon-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item me-5">
              <a class="nav-link active" aria-current="page" href="#hakkinda">Hakkında</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#cv">CV</a>
            </li>
            <li class="nav-item me-5 dropdown">
              <a class="nav-link dropdown-toggle" href="#sehrim" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Şehrim
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#miras">Mirasımız</a></li>
                <li><hr class="dropdown-divider"></li>
              </ul>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#ilgialanlarim">İlgi Alanlarım</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#iletisim">İletişim</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#login">Login</a>
            </li>
            
          </ul>
         
        </div>
      </div>
    </nav>

    <!--Menü Bitiş-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!-- style.css -->
.kapsayici{
    background-color: #ca8a8b;
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
}

.nav-link{
    color:#5b6d5b;
    font-family: "Montserrat","sans-serif";
}

.baslik{
    color: #035003;
    font-size: smaller;
}

@media(max-width:768px){

    .kapsayici{
        border-bottom-left-radius: 0%;
        border-bottom-right-radius: 0%;
    }
    .nav-item{
        margin-top: 15px;
        transition: all  0.5s ease;
    }
    .nav-item:hover{
        background-color:#faf1e6;
        padding-left: 40px;
    }
    .nav-link:hover{
        color: #5b6d5b;
    }
    .icon_border{
        color: maroon;
    }
}
<!-- style.css -->

<!-- iletisim.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
</head>
<body>
    <h1>İLETİŞİM SAYFASI</h1>
    <form  action="iletisim.php" method="post" >
        <!--ad-soyad-->
        <table cellspacing="8">
            <tr>
            <td>ADI</td><td>:</td>
            <td><input type="text" name="adi"></td>
            </tr>
            <tr>
            <td>SOYADI</td><td>:</td>
            <td><input type="text" name="soyadi"></td>
            </tr>
            <table>
            
        <!--ad-soyad-->
        <h2>

        </h2>

        <!--cinsiyet-->
        Cinsiyetiniz:<br>
        <input type="radio" name="cinsiyet" value="erkek"  checked>Erkek<br>
        <input type="radio" name="cinsiyet" value="kadin"  checked>Kadın       
        <!--cinsiyet-->
        <h2>

        </h2>
        Hobileriniz:<br>
        <!--hobi-->
        <input type="checkbox" name="hobi1" value="Basketbol">Basketbol<br>
        <input type="checkbox" name="hobi2" value="Voleybol">Voleybol<br>
        <input type="checkbox" name="hobi3" value="Futbol">Futbol<br>
        <input type="checkbox" name="hobi4" value="Kitap">Kitap Okuma<br>
        <input type="checkbox" name="hobi5" value="Tenis">Tenis<br>
        <input type="checkbox" name="hobi6" value="Bisiklet">Bisiklete Binme<br>
        <!--hobi-->

        <h2>
        </h2>
        Elektronik Posta Adresiniz: <br>
        <input type="email" name="email" required>

        <h2>
        </h2>
        
        Okuduğunuz Okulu Seçiniz..<br>
        <select name="okullar">
            <option value="bos">Seçiniz...</option>
            <option value="sau">Sakarya Üniversitesi</option>
            <option value="subu">Sakarya Uyg. Bilimler Üniversitesi</option>
            <option value="kou">Kocaeli Üniversitesi</option>
            <option value="itu">İstanbul Teknik Üniversitesi</option>

        </select>

        <h2>
        </h2>
        <input type="submit" value="POST İLE GÖNDER">



    </form>
    
</body>
</html>
<!-- iletisim.html -->
@font-face {
  font-family: 'icomoon';
  src:  url('fonts/icomoon.eot?uuhjfr');
  src:  url('fonts/icomoon.eot?uuhjfr#iefix') format('embedded-opentype'),
    url('fonts/icomoon.ttf?uuhjfr') format('truetype'),
    url('fonts/icomoon.woff?uuhjfr') format('woff'),
    url('fonts/icomoon.svg?uuhjfr#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
  font-display: block;
}

[class^="icon-"], [class*=" icon-"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'icomoon' !important;
  speak-as: never;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-menu:before {
  content: "\e9bd";
}

<!-- icon.css -->
@font-face {
  font-family: 'icomoon';
  src:  url('fonts/icomoon.eot?uuhjfr');
  src:  url('fonts/icomoon.eot?uuhjfr#iefix') format('embedded-opentype'),
    url('fonts/icomoon.ttf?uuhjfr') format('truetype'),
    url('fonts/icomoon.woff?uuhjfr') format('woff'),
    url('fonts/icomoon.svg?uuhjfr#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
  font-display: block;
}

[class^="icon-"], [class*=" icon-"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'icomoon' !important;
  speak-as: never;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-menu:before {
  content: "\e9bd";
}
<!-- icon.css -->
