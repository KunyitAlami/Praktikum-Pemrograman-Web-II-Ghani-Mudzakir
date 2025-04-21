<!DOCTYPE html>
<html lang="en">
<body>

<?php
$jumlah_bintang = 0;

if (isset($_POST['submit'])) {
    $jumlah_bintang = (int) $_POST['jumlah_bintang'];
} elseif (isset($_POST['tambah'])) {
    $jumlah_bintang = (int) $_POST['jumlah_bintang'] + 1;
} elseif (isset($_POST['kurang'])) {
    $jumlah_bintang = max(0, (int) $_POST['jumlah_bintang'] - 1);
}

if (!isset($_POST['submit']) && !isset($_POST['tambah']) && !isset($_POST['kurang'])) {
    ?>
    <form name="form_awal" method="post">
        Jumlah Bintang <input type="text" name="jumlah_bintang"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
} else {
    ?>
    <form method="post">
        Jumlah Bintang: <?php echo $jumlah_bintang; ?><br><br>
        <?php
        for ($i = 0; $i < $jumlah_bintang; $i++) {
            echo "<img src='gambar_bintang.png' width='40px'>";
        }
        ?>
        <br><br>
        <input type="hidden" name="jumlah_bintang" value="<?php echo $jumlah_bintang; ?>">
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    </form>
    <?php
}
?>

</body>
</html>
