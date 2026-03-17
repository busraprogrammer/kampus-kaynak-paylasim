<?php
require_once 'baglan.php'; // Daha önce hazırladığın bağlantı dosyası [cite: 33]

if ($_POST) {
    $ad_soyad = $_POST['ad_soyad'];
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = password_hash($_POST['sifre'], PASSWORD_DEFAULT); // Şifreyi güvenli hale getiriyoruz [cite: 23]

    // PDO ile güvenli kayıt işlemi (SQL Injection koruması) [cite: 58]
    $sorgu = $db->prepare("INSERT INTO kullanicilar (ad_soyad, kullanici_adi, sifre, rol) VALUES (?, ?, ?, ?)");
    $ekle = $sorgu->execute([$ad_soyad, $kullanici_adi, $sifre, 'ogrenci']);

    if ($ekle) {
        echo "Kayıt başarılı! Giriş sayfasına yönlendiriliyorsunuz.";
        header("Refresh: 2; url=login.php");
    } else {
        echo "Bir hata oluştu, lütfen tekrar deneyin.";
    }
}
?>