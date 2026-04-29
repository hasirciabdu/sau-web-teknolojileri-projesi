<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonuçları - Web Teknolojileri Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <div class="container my-5 flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0 p-5">
                    <h2 class="text-success border-bottom pb-3 mb-4">Form Başarıyla Gönderildi!</h2>
                    
                    <?php
                    // Formdan POST metodu ile veri gelip gelmediğini kontrol ediyoruz
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                        // Formdaki 'name' etiketlerine göre verileri yakalıyoruz
                        $ad = $_POST['ad'] ?? 'Belirtilmedi';
                        $soyad = $_POST['soyad'] ?? 'Belirtilmedi';
                        $email = $_POST['email'] ?? 'Belirtilmedi';
                        $telefon = $_POST['telefon'] != "" ? $_POST['telefon'] : 'Belirtilmedi';
                        $konu = $_POST['konu'] ?? 'Belirtilmedi';
                        $donusTipi = $_POST['donusTipi'] ?? 'Belirtilmedi';
                        $mesaj = $_POST['mesaj'] ?? 'Belirtilmedi';
                        
                        // Checkbox (Beni nereden buldunuz) verisi dizi (array) olarak gelir
                        $kaynaklar = "Belirtilmedi";
                        if (isset($_POST['kaynak']) && is_array($_POST['kaynak'])) {
                            $kaynaklar = implode(", ", $_POST['kaynak']); // Gelen verileri virgülle birleştir
                        }

                        // Verileri Bootstrap tablosu ile ekrana şık bir şekilde yazdırıyoruz
                        echo "<table class='table table-bordered table-hover'>";
                        echo "<thead class='table-dark'><tr><th>Form Alanı</th><th>Kullanıcının Girdiği Veri</th></tr></thead>";
                        echo "<tbody>";
                        echo "<tr><td><strong>Ad</strong></td><td>$ad</td></tr>";
                        echo "<tr><td><strong>Soyad</strong></td><td>$soyad</td></tr>";
                        echo "<tr><td><strong>E-posta</strong></td><td>$email</td></tr>";
                        echo "<tr><td><strong>Telefon</strong></td><td>$telefon</td></tr>";
                        echo "<tr><td><strong>Konu</strong></td><td>$konu</td></tr>";
                        echo "<tr><td><strong>Geri Dönüş Tercihi</strong></td><td>$donusTipi</td></tr>";
                        echo "<tr><td><strong>Beni Nereden Buldunuz?</strong></td><td>$kaynaklar</td></tr>";
                        echo "<tr><td><strong>Mesaj</strong></td><td>$mesaj</td></tr>";
                        echo "</tbody>";
                        echo "</table>";
                    } else {
                        echo "<div class='alert alert-danger'>Veri alınamadı! Lütfen formu doldurarak bu sayfaya gelin.</div>";
                    }
                    ?>

                    <div class="text-end mt-4">
                        <a href="iletisim.html" class="btn btn-primary">Forma Geri Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>