<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Kecocokan Pasangan</title>
    <style>
        body {
            background-color: #3498db;
            color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            margin-bottom: 20px;
        }

        form {
            display: inline-block;
            text-align: left;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="date"],
        input[type="submit"] {
            padding: 10px;
            margin-bottom: 10px;
            width: 200px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #ffffff;
            color: #3498db;
            cursor: pointer;
        }

        p {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Kalkulator Kecocokan Pasangan</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="nama_laki">Nama Laki-Laki:</label>
    <input type="text" name="nama_laki" required><br>

    <label for="tgl_lahir_laki">Tanggal Lahir Laki-Laki:</label>
    <input type="date" name="tgl_lahir_laki" required><br>

    <label for="nama_wanita">Nama Wanita:</label>
    <input type="text" name="nama_wanita" required><br>

    <label for="tgl_lahir_wanita">Tanggal Lahir Wanita:</label>
    <input type="date" name="tgl_lahir_wanita" required><br>

    <input type="submit" value="Hitung Kecocokan">
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (CSS styles remain the same) ... -->
</head>
<body>

<h2>Kalkulator Kecocokan Pasangan</h2>

<?php
function hitungKecocokan($name1, $birthdate1, $name2, $birthdate2) {
    // Logika perhitungan kecocokan di sini
    // Misalnya, kita hanya menyamakan panjang nama dan mengecek apakah tanggal lahir sama
    $lengthName1 = strlen($name1);
    $lengthName2 = strlen($name2);
    
    $nameMatch = ($lengthName1 == $lengthName2);
    $birthdateMatch = ($birthdate1 == $birthdate2);

    // Mengembalikan hasil kecocokan sebagai teks
    if ($nameMatch && $birthdateMatch) {
        return "Kedua orang tersebut cocok!";
    } else {
        return "Kedua orang tersebut tidak cocok.";
    }
}

$showResults = false;

// Menangani form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaLakiLaki = $_POST["nama_laki"];
    $tglLahirLakiLaki = $_POST["tgl_lahir_laki"];
    $namaWanita = $_POST["nama_wanita"];
    $tglLahirWanita = $_POST["tgl_lahir_wanita"];

    // Memanggil fungsi untuk menghitung kecocokan
    $hasilKecocokan = hitungKecocokan($namaLakiLaki, $tglLahirLakiLaki, $namaWanita, $tglLahirWanita);
    $showResults = true; // Set flag to true to display results
}

// Tampilkan hasil kecocokan hanya jika sudah dihitung dan flag untuk menampilkan hasil diatur
if ($showResults) {
    echo "<p>$hasilKecocokan</p>";
} else {
    echo "<p>Tidak ada hasil untuk ditampilkan saat ini.</p>";
}

// Contoh penggunaan struktur kontrol
echo "<h3>Contoh Penggunaan Struktur Kontrol</h3>";

// Penggunaan For Loop
echo "<p>Contoh Penggunaan For Loop:</p>";
for ($i = 0; $i < 5; $i++) {
    $randomNames = ["John", "Jane", "Bob", "Alice", "Charlie"];
    $randomBirthdates = ["1990-01-15", "1985-03-22", "1992-08-10", "1988-12-05", "1995-06-30"];

    $randomIndex1 = array_rand($randomNames);
    $randomIndex2 = array_rand($randomNames);

    $randomName1 = $randomNames[$randomIndex1];
    $randomBirthdate1 = $randomBirthdates[$randomIndex1];
    $randomName2 = $randomNames[$randomIndex2];
    $randomBirthdate2 = $randomBirthdates[$randomIndex2];

    $randomResult = hitungKecocokan($randomName1, $randomBirthdate1, $randomName2, $randomBirthdate2);

    echo "<p>$randomName1 dan $randomName2: $randomResult</p>";
}

// Penggunaan While Loop
echo "<p>Contoh Penggunaan While Loop:</p>";
$counter = 0;
while ($counter < 3) {
    $randomNames = ["Michael", "Sophia", "David", "Olivia", "Matthew"];
    $randomBirthdates = ["1980-05-20", "1995-11-08", "1983-07-15", "1998-02-25", "1987-09-12"];

    $randomIndex1 = array_rand($randomNames);
    $randomIndex2 = array_rand($randomNames);

    $randomName1 = $randomNames[$randomIndex1];
    $randomBirthdate1 = $randomBirthdates[$randomIndex1];
    $randomName2 = $randomNames[$randomIndex2];
    $randomBirthdate2 = $randomBirthdates[$randomIndex2];

    $randomResult = hitungKecocokan($randomName1, $randomBirthdate1, $randomName2, $randomBirthdate2);

    echo "<p>$randomName1 dan $randomName2: $randomResult</p>";

    $counter++;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <!-- ... (HTML form remains the same) ... -->
    <input type="submit" value="Hitung Kecocokan">
</form>



</body>
</html>


</body>
</html>
