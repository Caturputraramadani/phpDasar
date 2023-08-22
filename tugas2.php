<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clock conversion</title>
    <style>

    </style>
</head>

<body>
    <form method="post">
        <label>Masukkan detik: </label>
        <input type="number" name="totalDetik" required>
        <button type="submit">input</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $totalDetik = $_POST["totalDetik"];

        $jam = floor($totalDetik / 3600);
        $sisaDetik = $totalDetik % 3600;
        $menit = floor($sisaDetik / 60);
        $detik = $sisaDetik % 60;

        // Menampilkan hasil
        echo "<p>Hasil konversi: $jam jam $menit menit $detik detik</p>";
    }
    ?>
</body>

</html>