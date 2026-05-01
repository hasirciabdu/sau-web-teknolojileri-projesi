<?php
// Doğru bilgileri PDF kurallarına göre tanımlıyoruz
$dogru_email = "b251210580@sakarya.edu.tr";
$dogru_sifre = "b251210580";

// Formun POST ile gönderilip gönderilmediğini kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Formdan gelen verileri alıyoruz
    $gelen_email = $_POST['email'] ?? '';
    $gelen_sifre = $_POST['sifre'] ?? '';

    // Gelen bilgileri, doğru bilgilerle eşleştiriyoruz
    if ($gelen_email === $dogru_email && $gelen_sifre === $dogru_sifre) {
        // GİRİŞ BAŞARILI
        ?>
        <!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <title>Başarılı Giriş - Web Teknolojileri</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body class="bg-light d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-3 text-success fw-bold mb-3">Hoşgeldiniz</h1>
                <h2 class="display-5 text-secondary">b251210580</h2>
                <a href="index.html" class="btn btn-outline-primary mt-4 px-4 py-2">Ana Sayfaya Dön</a>
            </div>
        </body>
        </html>
        <?php
    } else {
        // GİRİŞ HATALI: URL'ye ?durum=hata parametresi ekleyerek login.html'e geri yönlendir
        header("Location: login.html?durum=hata");
        exit();
    }
} else {
    // Eğer sayfaya direkt adres çubuğundan girilmeye çalışılırsa güvenliğe takılsın
    header("Location: login.html");
    exit();
}
?>