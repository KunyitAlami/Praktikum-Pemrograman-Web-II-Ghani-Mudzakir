<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            text-align: left;
            font-size: 76px;
            font-weight: bold;
            color: black;
            margin-bottom: 20px;
        }

        table {
            border-collapse: separate;
            border-spacing: 2px;
            width: 545px;
            border: 2px solid black;
        }

        th {
            background-color: rgb(255, 0, 0);
            padding: 16px;
            text-align: left;
            font-size: 40px;
            font-weight: bold;
            border: 2px solid black;
        }

        td {
            padding: 8px;
            text-align: left;
            border: 2px solid black;
        }
    </style>
</head>
<body>

<?php
$smartphones = [
    "s22" => "Samsung Galaxy S22",
    "s22plus" => "Samsung Galaxy S22+",
    "a03" => "Samsung Galaxy A03",
    "xcover5" => "Samsung Galaxy Xcover 5"
];
?>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php
    foreach ($smartphones as $key => $phone) {
        echo "<tr><td>$phone</td></tr>";
    }
    ?>
</table>

</body>
</html>
