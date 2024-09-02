<?php


// Fungsi kalkulator 2
function kalkulator($num1, $operator, $num2) {
  if ($operator == '+') {
    return $num1 + $num2;
  } elseif ($operator == '-') {
    return $num1 - $num2;
  } elseif ($operator == '*') {
    return $num1 * $num2;
  } elseif ($operator == '/') {
    if ($num2 != 0) {
      return $num1 / $num2;
    } else {
      return "Error: Pembagian dengan nol!";
    }
  } else {
    return "Error: Operator tidak valid!";
  }
}


// Form input 2
echo "<form action='' method='post'>";
echo "Angka 1: <input type='number' name='num1'><br>";
echo "Operator: <select name='operator'>";
echo "<option value='+'>+</option>";
echo "<option value='-'>-</option>";
echo "<option value='*'>*</option>";
echo "<option value='/'>/</option>";
echo "</select><br>";
echo "Angka 2: <input type='number' name='num2'><br>";
echo "<input type='submit' value='Hitung'>";
echo "</form>";

// Proses input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $num1 = $_POST["num1"];
  $operator = $_POST["operator"];
  $num2 = $_POST["num2"];
  $hasil = kalkulator($num1, $operator, $num2);
  echo "Hasil: $hasil";
}

?>