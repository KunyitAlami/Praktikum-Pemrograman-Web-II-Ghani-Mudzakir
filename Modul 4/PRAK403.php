<?php 
$mahasiswa_satu = ["No"=>"1", "Nama"=>"Ridho", "Mata Kuliah diambil"=>["Pemrograman I", "Praktikum Pemrograman I", "Pengatar Lingkungan Lahan Basah", "Arsitektur Komputer"], "SKS"=>["2", "1", "2", "3"]];
$mahasiswa_dua = ["No"=>"2", "Nama"=>"Ratna", "Mata Kuliah diambil"=>["Basis Data I", "Praktikum Basis Data I", "Kalkulus"], "SKS"=>["2", "1", "3"]];
$mahasiswa_tiga = ["No"=>"3", "Nama"=>"Tono", "Mata Kuliah diambil"=>["Rekayasa Perangkat Lunak", "Analisis Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"], "SKS"=>["3", "3", "3", "3"]];

$seluruh_mahasiswa = [$mahasiswa_satu,$mahasiswa_dua,$mahasiswa_tiga];

function Keterangan($jumlahSKSTotal) {
    if($jumlahSKSTotal > 7) {return "Tidak Revisi";}
    else{return  "Revisi KRS"; }
}

foreach($seluruh_mahasiswa as $i => $mahasiswa) {
    $jumlahSKSTotal = array_sum($mahasiswa["SKS"]);
    $seluruh_mahasiswa[$i]["Total SKS"] = $jumlahSKSTotal;
    $seluruh_mahasiswa[$i]["Keterangan"] = Keterangan($jumlahSKSTotal);
}

function warna($a, $i) {
    if($i == 0) {
        if($a > 7) {
            return "green";
        }
        else {
            return "red";
        }
    }
    var_dump($a);
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <table border='1.5' cellpadding='10' cellspacing='0'>
        <tr>
            <?php foreach($seluruh_mahasiswa[0] as $key => $value) {
            echo "<th style='background-color: lightgray'>$key </th>";
            } ?>
        </tr>

    
    <?php foreach($seluruh_mahasiswa as $mahasiswa) : ?>
        <?php foreach($mahasiswa["Mata Kuliah diambil"] as $a => $matkul) : ?>
            <tr>
                <td><?= $a == 0 ? $mahasiswa["No"] : " " ?></td>
                <td><?= $a == 0 ? $mahasiswa["Nama"] : " " ?></td>
                <td><?= $matkul; ?></td>
                <td><?= $mahasiswa["SKS"][$a] ?></td>
                <td><?= $a == 0 ? $mahasiswa["Total SKS"] : " " ?></td>
                <td style="background-color: <?= warna($mahasiswa["Total SKS"], $a)?>;"><?= $a == 0 ? $mahasiswa["Keterangan"] : " "?></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>