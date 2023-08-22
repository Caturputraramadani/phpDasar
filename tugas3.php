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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $J = $_POST["jam"];
        $M = $_POST["menit"];
        $D = $_POST["detik"];


        $Td;

        if ($Td = $J * 3600 + $M * 60 + $D) {
            echo "$Td";
        }
    }
    ?>
</body>

</html>