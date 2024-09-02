<?php
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    preg_match_all('/[$a-zA-Z\s]/', $text, $matches);

    if (count($matches[0]) > 0) {
        $uniqueSymbols = array_unique($matches[0]);
        echo "Teks mengandung angka dan simbol : " . implode(', ', $uniqueSymbols);
    } else {
        echo "Teks tidak mengandung angka dan simbol";
    }
}
?>

<form action="" method="post">
    <div class="form-group">
        <label for="text">Masukkan Teks:</label>
        <input type="text" class="form-control" id="text" name="text" placeholder="Masukkan teks">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Periksa</button>
</form>