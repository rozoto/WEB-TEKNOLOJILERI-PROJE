<?php
if(isset($_POST['kullanici']) && isset($_POST['sifre'])) { // form gönderilmiş mi
   $kullanici = $_POST['kullanici'];
   $sifre = $_POST['sifre'];
 
   if(empty($kullanici) || empty($sifre)) { // gönderilenler boş mu
      echo 'Lütfen boş bırakmayın';
   } else {
      if($kullanici == 'b201210090@sakarya.edu.tr' && $sifre == 'b201210090') { // bilgiler doğru mu
         session_start();
         $_SESSION['kullanici'] = 'b201210090@sakarya.edu.tr';
         $_SESSION['sifre'] = 'b201210090';
         echo "Giriş Başarılı. Panel'e yönlendiriliyorsunuz";
         header('refresh: 5; url=panel.php'); 
      } else {
         echo 'Yanlış kullanıcı adı ya da şifre';
      }
   }
} else {
   echo 'Lütfen formu kullanın';
}

?>