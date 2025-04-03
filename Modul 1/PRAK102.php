<?php
    $jari_jari = 4.2;
    $tinggi = 5.4;

    function hitungVolumeTabung($r, $t) {
        return pi() * pow($r, 2) * $t;
    }

    $volume = hitungVolumeTabung($jari_jari, $tinggi);

    echo "Volume tabung dengan jari-jari $jari_jari cm dan tinggi $tinggi cm adalah " . number_format($volume, 3) . " m³.";
?>
