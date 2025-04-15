<!DOCTYPE html>
<html lang="en">
<body>
    <form method="POST">
        Nilai : <input type="text" name="nilai_input"><br>
        Dari :<br>
        <input type="radio" name="jenis_suhu_pertama" value="c1">Celcius<br>
        <input type="radio" name="jenis_suhu_pertama" value="f1">Farenheit<br>
        <input type="radio" name="jenis_suhu_pertama" value="r1">Rheamur<br>
        <input type="radio" name="jenis_suhu_pertama" value="k1">Kelvin<br>
        Ke :<br>
        <input type="radio" name="jenis_suhu_kedua" value="c2">Celcius<br>
        <input type="radio" name="jenis_suhu_kedua" value="f2">Farenheit<br>
        <input type="radio" name="jenis_suhu_kedua" value="r2">Rheamur<br>
        <input type="radio" name="jenis_suhu_kedua" value="k2">Kelvin<br>
        <button type="submit" name="konversi">Konversi</button><br>
    </form>
    <?php 
    if (isset($_POST['konversi'])) {
        $suhu_pertama = $_POST['jenis_suhu_pertama'];
        $suhu_kedua = $_POST['jenis_suhu_kedua'];
        $nilai_masuk= $_POST['nilai_input'];
        $int_masuk = (float)$nilai_masuk;
        $simbol = "";

        if ($suhu_kedua=="c2") $simbol = "&deg;C";
        elseif ($suhu_kedua=="f2") $simbol = "&deg;F";
        elseif ($suhu_kedua=="r2") $simbol = "&deg;R";
        elseif ($suhu_kedua=="k2") $simbol = " K";

        if ($suhu_pertama=="c1") {
            if ($suhu_kedua=="c2") {
                echo "<h2>Hasil Konversi: $int_masuk$simbol</h2>";
            }elseif ($suhu_kedua=="f2") {
                $hasil = ($int_masuk*9/5)+32;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }elseif ($suhu_kedua=="r2") {
                $hasil = ($int_masuk*4/5);
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }elseif ($suhu_kedua=="k2") {
                $hasil = $int_masuk+273.15;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }
        }elseif ($suhu_pertama=="f1") {
            if ($suhu_kedua=="c2") {
                $hasil = ($int_masuk-32)*5/9;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }elseif ($suhu_kedua=="f2") {
                echo "<h2>Hasil Konversi: $int_masuk$simbol</h2>";
            }elseif ($suhu_kedua=="r2") {
                $hasil = ($int_masuk-32)*4/9;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }elseif ($suhu_kedua=="k2") {
                $hasil = ($int_masuk-32)*5/9+273.15;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }
        }elseif ($suhu_pertama=="r1") {
            if ($suhu_kedua=="c2") {
                $hasil = $int_masuk*5/4;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }elseif ($suhu_kedua=="f2") {
                $hasil = ($int_masuk*9/4)+32;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }elseif ($suhu_kedua=="r2") {
                echo "<h2>Hasil Konversi: $int_masuk$simbol</h2>";
            }elseif ($suhu_kedua=="k2") {
                $hasil = ($int_masuk*5/4)+273.15;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }
        }elseif ($suhu_pertama=="k1") {
            if ($suhu_kedua=="c2") {
                $hasil = $int_masuk-273.15;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }elseif ($suhu_kedua=="f2") {
                $hasil = ($int_masuk-273.15)*9/5+32;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }elseif ($suhu_kedua=="r2") {
                $hasil = ($int_masuk-273.15)*4/5;
                echo "<h2>Hasil Konversi: $hasil$simbol</h2>";
            }elseif ($suhu_kedua=="k2") {
                echo "<h2>Hasil Konversi: $int_masuk$simbol</h2>";
            }
        }
    }
    ?>
</body>
</html>