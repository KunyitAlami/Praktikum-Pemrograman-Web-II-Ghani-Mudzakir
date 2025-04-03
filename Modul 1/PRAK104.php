<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Smartphone Samsung</title>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 2px;
            border: 2px solid black;
        }
        th {
            text-align: center;
            font-weight: bold;
            border: 2px solid black;
        }
        td {
            text-align: left;
            border: 2px solid black;
        }
    </style>
</head>
<body>

<?php
    $hapeSamsung = [
        "Samsung Galaxy S22",
        "Samsung Galaxy S22+",
        "Samsung Galaxy A03",
        "Samsung Galaxy Xcover 5"
    ];
?>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php
    foreach ($hapeSamsung as $hpS) {
        echo "<tr><td>$hpS</td></tr>";
    }
    ?>
</table>

</body>
</html>
