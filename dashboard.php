
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include 'includes/functions.php';
$personeller = getPersoneller();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Personel Yönetim Sistemi</h2>
        <a href="logout.php">Çıkış Yap</a>
        <table>
            <thead>
                <tr>
                    <th>İsim</th>
                    <th>Pozisyon</th>>
                    <th>İşe Başlama Tarihi</th>
                    <th>İzin Günleri</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($personeller as $personel): ?>
                    <tr>
                        <td><?php echo $personel['isim']; ?></td>
                        <td><?php echo $personel['pozisyon']; ?></td>
                        <td><?php echo $personel['yonetici']; ?></td>
                        <td><?php echo $personel['ise_baslama_tarihi']; ?></td>
                        <td><?php echo $personel['izin_gunleri']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
