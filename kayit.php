<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol - Kampüs Paylaşım</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f1faee; font-family: 'Segoe UI', sans-serif; }
        .register-card { border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); background-color: #ffffff; }
        .btn-register { background-color: #457b9d; color: white; border-radius: 10px; border: none; }
        .btn-register:hover { background-color: #1d3557; }
        .form-control { border-radius: 10px; border: 1px solid #a8dadc; }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card register-card p-4">
                <div class="text-center mb-4">
                    <h3 class="fw-bold" style="color: #1d3557;">Aramıza Katıl</h3>
                    <p class="text-muted small">Amasya Üniversitesi Kaynak Paylaşım Platformu</p>
                </div>
                <form action="kayit_islem.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Ad Soyad</label>
                        <input type="text" name="ad_soyad" class="form-control" placeholder="Ad Soyad" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kullanıcı Adı</label>
                        <input type="text" name="kullanici_adi" class="form-control" placeholder="Örn: busraprogrammer" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Şifre</label>
                        <input type="password" name="sifre" class="form-control" placeholder="******" required>
                    </div>
                    <button type="submit" class="btn btn-register w-100 py-2 fw-bold">Kayıt Ol</button>
                </form>
                <div class="text-center mt-3">
                    <a href="login.php" class="text-decoration-none small" style="color: #457b9d;">Zaten hesabın var mı? Giriş yap</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>