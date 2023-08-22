<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clock conversion</title>
</head>

<body>
    <form method="post">
        <label>Jam </label>
        <input type="number" name="jam" required>
        <label>Menit</label>
        <input type="number" name="menit" required>
        <label>Detik</label>
        <input type="number" name="detik" required>
        <button type="submit">input</button>
    </form>

    <?php
    if ($_POST) {
        $jam = $_POST['jam'];
        $menit = $_POST['menit'];
        $detik = $_POST['detik'];
        $td;

        if ($td = $jam * 3600 + $menit * 60 + $detik) {
            echo "$td Detik";
        }
    }
    ?>
</body>

</html>