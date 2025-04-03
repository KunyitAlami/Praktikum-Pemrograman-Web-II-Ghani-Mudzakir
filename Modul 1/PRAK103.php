<?php
    $nilai_celcius = 37.841;
    $nilai_fahrenheit;
    $nilai_reamur;
    $nilai_kelvin;

    function ubahKeFarenhait($c){
        return (9/5*$c)+32;
    }
    function ubahKeReamur($c){
        return 4/5*$c;
    }
    function ubahKeKelvin($c){
        return $c + 273.15; 
    }

    echo "Fahrenheit (F) = ". number_format(ubahKeFarenhait($nilai_celcius), 4);
    echo "Reamur (R) = ". number_format(ubahKeReamur($nilai_celcius), 4);
    echo "Kelvin (K) = ". number_format(ubahKeKelvin($nilai_celcius), 4);

?>
