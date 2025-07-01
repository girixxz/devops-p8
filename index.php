<?php
$nama = "Aditya Giri Kurniawan";
$nim = "23.01.4969";
$tanggal = date("d F Y, H:i:s");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP + Jenkins - Aditya</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #2c3e50, #3498db);
            color: white;
            text-align: center;
            padding: 5rem;
        }
        .card {
            background: rgba(0,0,0,0.3);
            border-radius: 16px;
            padding: 2rem;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>🚀 CI/CD PHP + Jenkins</h1>
        <p><strong>Nama:</strong> <?= $nama ?></p>
        <p><strong>NIM:</strong> <?= $nim ?></p>
        <p><strong>Tanggal:</strong> <?= $tanggal ?></p>
        <p>Build otomatis menggunakan Jenkins dan Docker</p>
    </div>
</body>
</html>
