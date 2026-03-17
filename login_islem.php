<?php
session_start();
require_once 'baglan.php'; // 3307 portu üzerinden bağlantı sağlayan dosyan [cite: 32, 60]

if ($_POST) {
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];

    $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE kullanici_adi = ?");
    $sorgu->execute([$kullanici_adi]);
    $kullanici = $sorgu->fetch(PDO::FETCH_ASSOC);

    if ($kullanici && password_verify($sifre, $kullanici['sifre'])) {
        // Oturum bilgilerini saklıyoruz [cite: 27]
        $_SESSION['kullanici_id'] = $kullanici['id'];
        $_SESSION['kullanici_adi'] = $kullanici['kullanici_adi'];
        $_SESSION['rol'] = $kullanici['rol'];

        echo "Başarıyla giriş yapıldı!";
        header("Refresh: 1; url=index.php");
    } else {
        echo "Hatalı kullanıcı adı veya şifre!";
        header("Refresh: 2; url=login.php");
    }
}
?>