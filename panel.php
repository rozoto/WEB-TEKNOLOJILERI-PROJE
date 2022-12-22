<?php
session_start(); // session kullanımı başlattık
if(isset($_SESSION['kullanici']) && isset($_SESSION['sifre'])) { // bu sefer sessionlar tanımlanmış mı diye bakıyoruz
   if($_SESSION['kullanici'] == 'b201210090@sakarya.edu.tr' && $_SESSION['sifre'] == 'b201210090') {
      echo 'Panele hoşgeldiniz! Bu yazıyı sadece giriş yapmış kişiler görebilir.';
   } else {
      session_destroy(); // bilgileri yanlış olduğu için sessionlar silinir
      echo 'Bilgileriniz yanlış, buraya yanlızca giriş yapmış kişiler girebilir';
   }
} else {
   echo 'Sadece giriş yapmış kişiler görebilir';
}
?>