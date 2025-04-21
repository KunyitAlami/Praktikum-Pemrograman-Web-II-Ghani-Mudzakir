<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .ganjil{
            color: red;

        }
        .genap{
            color: green;
        }
    </style>
</head>
<body>
    <form method="post">
        Jumlah peserta : <input type="text" name="jumlah_peserta"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <?php 
    if (isset($_POST['cetak'])) {
        $banyak = $_POST['jumlah_peserta'];
        $batasan = 1;
        while ($batasan <= $banyak) {
            if ($batasan%2!=0) {
                echo 
                "<div class=\"ganjil\">
                    <h2>Peserta ke-$batasan</h2>
                </div>";
            }elseif ($batasan%2==0) {
                echo 
                "<div class=\"genap\">
                    <h2>Peserta ke-$batasan</h2>
                </div>";
            }
            $batasan++;
        }
    }
    
    ?>
    
</body>
</html>
