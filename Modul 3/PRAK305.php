<!DOCTYPE html>
<html>
<body>

<form method="post">
    <input type="text" name="input1">
    <input type="submit" name="submit1" value="submit">
</form>

<?php
if (isset($_POST['submit1'])) {
    $input = $_POST['input1'];
    $length = strlen($input);
    echo "<br><b>Input:</b><br>$input<br>";
    echo "<br><b>Output:</b><br>";
    for ($i = 0; $i < $length; $i++) {
        $char = $input[$i];
        echo strtoupper($char); // huruf pertama kapital
        echo str_repeat(strtolower($char), $length - 1); // sisanya kecil
    }
}
?>

</body>
</html>
