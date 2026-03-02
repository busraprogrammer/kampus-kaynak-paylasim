<?php
// Veritabanı Bilgileri
$host = "localhost";
$port = "3307"; // Senin özel MySQL portun
$vt_adi = "ogrenci_notlari"; // phpMyAdmin'de oluşturduğun veritabanı adı
$kullanici = "root";
$sifre = ""; // XAMPP'ta genelde boştur, şifre koyduysan buraya yaz

try {
    // PDO bağlantısı (Port numarasıyla birlikte)
    $db = new PDO("mysql:host=$host;port=$port;dbname=$vt_adi;charset=utf8", $kullanici, $sifre);
    
    // Hata modunu açıyoruz (Geliştirme aşamasında hataları görmek için çok önemli)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Bağlantı başarılıysa hiçbir şey yazmasın (Sessizce çalışsın)
} catch (PDOException $e) {
    // Hata varsa ekrana yazdırır
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>