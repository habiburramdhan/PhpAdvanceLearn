
 <!-- 1.buatlah sebuah program yg memiliki function untuk menghitung brp banyak huruf a(karakter) yang dimiliki di dalam kalimat selamat datang  menggunakan php kalimat "selamat datang",huruf yg dipilih untuk di hitung berapa banyak bs di ganti di halaman website nya menggunakan get"
contoh output :
Selamat datang
kalimat di atas memiliki A = 2  -->
<?php
function hitungHuruf($kalimat, $huruf) {
    $jumlah = substr_count(strtolower($kalimat), strtolower($huruf));
    return $jumlah;
}

// Validasi server-side
$kalimat = isset($_GET['kalimat']) ? trim($_GET['kalimat']) : '';
$huruf = isset($_GET['huruf']) ? trim($_GET['huruf']) : '';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($kalimat) || empty($huruf)) {
        $error = "Kalimat dan huruf tidak boleh kosong!";
    } elseif (strlen($huruf) > 1) {
        $error = "Huruf yang ingin dihitung harus 1 karakter!";
    } else {
        $jumlahHuruf = hitungHuruf($kalimat, $huruf);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Huruf dalam Kalimat</title>
    <script>
        function validateForm() {
            var kalimat = document.getElementById("kalimat").value.trim();
            var huruf = document.getElementById("huruf").value.trim();
            if (kalimat === "" || huruf === "") {
                alert("Kalimat dan huruf tidak boleh kosong!");
                return false;
            }
            if (huruf.length > 1) {
                alert("Huruf yang ingin dihitung harus 1 karakter!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <?php if (!empty($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php elseif (isset($jumlahHuruf)) : ?>
        <h1><?php echo htmlspecialchars($kalimat); ?></h1>
        <p>Kalimat di atas memiliki '<?php echo strtoupper($huruf); ?>' = <?php echo $jumlahHuruf; ?></p>
    <?php endif; ?>

    <form method="get" action="" onsubmit="return validateForm()">
        <label for="kalimat">Masukkan kalimat:</label>
        <input type="text" id="kalimat" name="kalimat" value="<?php echo htmlspecialchars($kalimat); ?>" required>
        <br><br>
        <label for="huruf">Masukkan huruf yang ingin dihitung:</label>
        <input type="text" id="huruf" name="huruf" maxlength="1" value="<?php echo htmlspecialchars($huruf); ?>" required>
        <br><br>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
