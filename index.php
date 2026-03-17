<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kampüs Kaynak Paylaşım Sistemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Büşra'nın dökümanındaki pastel tonlar ve modern tipografi */
        body { background-color: #f4f7f6; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar { background-color: #a8dadc !important; } /* Pastel Mavi */
        .btn-primary { background-color: #457b9d; border: none; }
        .card { border: none; border-radius: 15px; transition: 0.3s; background-color: #ffffff; }
        .card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
        .category-badge { background-color: #f1faee; color: #1d3557; border-radius: 20px; padding: 5px 15px; font-size: 0.8rem; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Kampüs Paylaşım</a>
        <div class="d-flex">
            <a href="login.php" class="btn btn-outline-dark btn-sm me-2">Giriş Yap</a>
            <a href="yukle.php" class="btn btn-primary btn-sm">Not Paylaş</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center mb-5">
            <h2 class="fw-bold text-dark">Aradığın Notu Hemen Bul</h2>
            [cite_start]<p class="text-muted">Vize, final ve ödev notlarına hızlıca ulaş [cite: 8]</p>
            <div class="input-group mb-3 shadow-sm">
                <input type="text" class="form-control" placeholder="Ders adı veya hoca adı yazın..." aria-label="Arama">
                <button class="btn btn-primary" type="button">Ara</button>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm p-3">
                <div class="d-flex justify-content-between mb-2">
                    <span class="category-badge">Web Tasarım</span>
                    [cite_start]<span class="text-muted small">Vize [cite: 16]</span>
                </div>
                <h5 class="card-title fw-bold">PHP & PDO Notları</h5>
                [cite_start]<p class="card-text text-muted small">Hazırlayan: Büşra Dilmaç [cite: 4]</p>
                <div class="mt-auto d-flex justify-content-between align-items-center">
                    [cite_start]<span class="badge bg-light text-dark">PDF [cite: 10]</span>
                    <a href="#" class="btn btn-sm btn-outline-primary">İndir</a>
                </div>
            </div>
        </div>
        </div>
</div>

<footer class="text-center mt-5 py-4 text-muted">
    [cite_start]<small>© 2026 Amasya Üniversitesi - busraprogrammer [cite: 4, 62]</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>