<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="post">
        Nilai : <input type="text" name="input_user"><br><br>
        <button type="submit" name="cek">Konversi</button>
    </form>
    <?php 
    if (isset($_POST['cek'])) {
        $int_input = (int)$_POST['input_user'];

        if ($int_input < 0 || $int_input > 1000) {
            echo "<h1>Hasil: Anda Menginput Melebihi Limit Bilangan</h1>";
        } elseif ($int_input == 0) {
            echo "<h1>Hasil: Nol</h1>"; 
        } else {
            $length = strlen((string)$int_input);

            if ($length == 1) {
                echo "<h1>Hasil: Satuan</h1>";
            } elseif ($length == 2) {
                if ($int_input<20 && $int_input != 10) {
                    echo "<h1>Hasil: Belasan</h1>";
                }else{
                    echo "<h1>Hasil: Puluhan</h1>";
                }
            } elseif ($length == 3) {
                echo "<h1>Hasil: Ratusan</h1>";
            } elseif ($int_input == 1000) {
                echo "<h1>Hasil: Seribu</h1>";
            }
        }
    }
    ?>
</body>
</html>