<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Batas Bawah : <input type="text" name="batas_bawah"><br><br>
        Batas Atas : <input type="text" name="batas_atas"><br><br>
        <button type="submit" name="cetak">Cetak</button><br><br>
    </form>
    <?php 
    if (isset($_POST['cetak'])) {
        $mulai = $_POST['batas_bawah'];
        $selesai = $_POST['batas_atas'];
        $link_gambar = "https://www.freepnglogos.com/images/star-images-9441.png";

        do {
            if (($mulai+7)%5!=0) {
                echo" $mulai ";
            }elseif (($mulai+7)%5==0) {
                echo " <img src='gambar_bintang.png' width='20px'> ";
            }
            $mulai++;
        } while ($mulai <= $selesai);
    }
    
    ?>
    
</body>
</html>