<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Panjang : <input type="text" id="panjang"> <br>

        Lebar : <input type="text" id="lebar"> <br>

        Nilai : <input type="text" id="nilai"> <br>

        <button name="cetak">Cetak</button>
    </form>

    <?php 
        if(isset($_POST['cetak'])) {
            $panjang_tabel = $_POST['panjang'];
            $lebar_tabel = $_POST['lebar'];
            $nilai = $_POST['nilai'];

            $total = $panjang_tabel * $lebar_tabel;
            $array_angka = explode(" ", $nilai);
            $jumlah_input = count($array_angka);
            if($jumlah_input > $total) {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
            else {
                $isi = array_chunk($array_angka, $lebar_tabel);
                echo "<table border='1.5' cellpadding='10' cellspacing='0'>";
                foreach($isi as $baris_tabel) {
                    echo "<tr>";
                    foreach($baris_tabel as $angka_isi) {
                        echo "<td>$angka_isi</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
    ?>
</body>
</html>