<?php 
    $mahasiswa_satu = ["Nama"=>"Andi", "NIM"=>"2101001", "Nilai UTS"=>"87", "Nilai UAS"=>"65"];
    $mahasiswa_dua = ["Nama"=>"Budi", "NIM"=>"2101002", "Nilai UTS"=>"76", "Nilai UAS"=>"79"];
    $mahasiswa_tiga = ["Nama"=>"Tono", "NIM"=>"2101003", "Nilai UTS"=>"50", "Nilai UAS"=>"41"];
    $mahasiswa_empat = ["Nama"=>"Jessica", "NIM"=>"2101004", "Nilai UTS"=>"60", "Nilai UAS"=>"75"];

    $seluruh_mahasiswa = [$mahasiswa_satu, $mahasiswa_dua, $mahasiswa_tiga, $mahasiswa_empat];

    function cekHurufNilai($nilai_angka) {
        if($nilai_angka >= 80) {return "A";}
        elseif($nilai_angka >= 70 && $nilai_angka <= 79) {return "B";}
        elseif($nilai_angka >= 60 && $nilai_angka <= 69) {return "C";}
        elseif($nilai_angka >= 50 && $nilai_angka <= 59) {return "D";}
        elseif($nilai_angka <= 50) {return "E";}
    }
    
    foreach($seluruh_mahasiswa as $i => $mahasiswa) {
        $seluruh_mahasiswa[$i]["Nilai Akhir"] = $mahasiswa["Nilai UTS"]*40/100 + $mahasiswa["Nilai UAS"]*60/100;
        $seluruh_mahasiswa[$i]["Huruf"] = cekHurufNilai($seluruh_mahasiswa[$i]["Nilai Akhir"]);
    }


?>

<!DOCTYPE html>
<html lang="en">
<body>
    <table border='1.5' cellpadding='10' cellspacing='0'>
        <tr>
            <?php foreach($seluruh_mahasiswa[1] as $key => $value) {echo "<th style='background-color: lightgray'>$key </th>";} ?>
        </tr>

        <?php foreach($seluruh_mahasiswa as $mahasiswa ) : ?>
            <tr>
                <?php foreach($mahasiswa as $key => $value) :?>
                    <td><?= $value; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>