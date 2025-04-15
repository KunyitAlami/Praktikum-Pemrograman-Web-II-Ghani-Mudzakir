<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        Nama 1: <input type="text" name="nama1"><br><br>
        Nama 2: <input type="text" name="nama2"><br><br>
        Nama 3: <input type="text" name="nama3"><br><br>
        <button type="submit" name="Urut">Urutkan</button>
    </form>

    <?php 
    if (isset($_POST['Urut'])) {
        $namapertama = $_POST['nama1'];
        $namakedua = $_POST['nama2'];
        $namaketiga = $_POST['nama3'];

        if ($namapertama<=$namakedua && $namapertama<=$namaketiga) {
            if ($namakedua<=$namaketiga) {
                echo "$namapertama<br>$namakedua<br>$namaketiga<br>";
            }elseif ($namakedua>=$namaketiga) {
                echo "$namapertama<br>$namaketiga<br>$namakedua<br>";                
            }
        }elseif ($namakedua<=$namapertama && $namakedua<=$namaketiga) {
            if ($namapertama<=$namaketiga) {
                echo "$namakedua<br>$namapertama<br>$namaketiga<br>";
            }elseif ($namapertama>=$namaketiga) {
                echo "$namakedua<br>$namaketiga<br>$namapertama<br>";                
            }
        }elseif ($namaketiga<=$namapertama && $namaketiga<=$namakedua) {
            if ($namapertama<=$namakedua) {
                echo "$namaketiga<br>$namapertama<br>$namakedua<br>";
            }elseif ($namapertama>=$namakedua) {
                echo "$namaketiga<br>$namakedua<br>$namapertama<br>";                
            }
        }
    }
    ?>
</body>
</html>