<!DOCTYPE html>
<html>
<head>
    <style>
        .error {
            color: red;
            font-size: 14px;
        }
        .form-row {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

<?php 
$namakosong = "";
$nimkosong = "";
$genderkosong = "";
$nama = "";
$nim = "";
$jenis_kelamin = "";
$output = "";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jenis_kelamin = $_POST['gender'] ?? "";

    if(empty($nama)){
        $namakosong = "* nama tidak boleh kosong";
    }

    if (empty($nim)) {
        $nimkosong = "* nim tidak boleh kosong";
    }

    if (empty($jenis_kelamin)){
        $genderkosong = "* jenis kelamin tidak boleh kosong";
    }

    if (!empty($nama) && !empty($nim) && !empty($jenis_kelamin)) {
        $output = "<h2>Output:</h2><p>$nama<br>$nim<br>$jenis_kelamin</p>";
    }
}
?>

<form action="" method="post">
    <div class="form-row">
        Nama: <input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
        <span class="error"><?php echo $namakosong; ?></span>
    </div>
    <div class="form-row">
        NIM: <input type="text" name="nim" value="<?php echo htmlspecialchars($nim); ?>">
        <span class="error"><?php echo $nimkosong; ?></span>
    </div>
    <div class="form-row">
        Jenis Kelamin:
        <span class="error"><?php echo $genderkosong; ?></span><br>
        <input type="radio" name="gender" value="Laki-laki" <?php if($jenis_kelamin == "Laki-laki") echo "checked"; ?>>Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan" <?php if($jenis_kelamin == "Perempuan") echo "checked"; ?>>Perempuan<br>
    </div>
    <button type="submit" name="submit">Submit</button>
</form>

<div>
    <?php echo $output; ?>
</div>

</body>
</html>