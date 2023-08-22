<!DOCTYPE html>
<html>

<head>
    <title>Nilai Tertinggi Siswa</title>
</head>

<body>
    <h1>Input Nilai Ujian Siswa</h1>

    <form method="post">
        <?php
        // Inisialisasi array untuk menyimpan nilai ujian
        $nilai_siswa = array();

        // Memproses form ketika tombol submit ditekan
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil nilai-nilai ujian dari form
            for ($i = 1; $i <= 10; $i++) {
                $nilai = $_POST["nilai$i"];
                $nilai_siswa[] = $nilai;
            }

            // Mencari nilai tertinggi
            $nilai_tertinggi = max($nilai_siswa);

            // Menghitung jumlah siswa yang mendapat nilai tertinggi
            $jumlah_tertinggi = 0;
            foreach ($nilai_siswa as $nilai) {
                if ($nilai == $nilai_tertinggi) {
                    $jumlah_tertinggi++;
                }
            }

            // Menampilkan nilai tertinggi dan jumlah siswa yang mendapat nilai tertinggi
            echo "<p>Nilai tertinggi: $nilai_tertinggi</p>";
            echo "<p>Jumlah siswa yang mendapat nilai tertinggi: $jumlah_tertinggi</p>";
        }
        ?>

        <!-- Form input nilai ujian -->
        <p>Masukkan nilai ujian siswa:</p>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<input type='number' name='nilai$i' placeholder='Nilai siswa $i' required><br>";
        }
        ?>
        <br>
        <input type="submit" value="Hitung Nilai Tertinggi">
    </form>
</body>

</html>