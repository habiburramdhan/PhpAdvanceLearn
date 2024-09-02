<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_string = $_POST["input_string"];
    $total_characters = strlen($input_string);
}
 ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="text" name="input_string" placeholder="Enter a string">
    <input type="submit" value="Submit">
</form>

<?php if (isset($total_characters)) { ?>
    <p>Total characters: <?php echo $total_characters; ?></p>
<?php } ?>