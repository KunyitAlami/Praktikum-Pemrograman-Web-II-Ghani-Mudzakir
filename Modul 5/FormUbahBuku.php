<?php
include_once "Koneksi.php";
include_once "Model.php";

$sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$_GET[kode]'");
$data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form Ubah Data Buku Perpustakaan Mudzakir</title>
        <script src="https://cdn.tailwindcss.com"></script> 
    </head>
    <body>
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl mx-auto px-4 py-2 flex items-center justify-between">
                <h1 class="text-2xl font-bold text-black dark:text-white">
                    Perpustakaan Mudzakir
                </h1>
                <a href="Buku.php">
                    <button type="button" class="text-white bg-gray-700 hover:bg-gray-400 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-600 dark:hover:bg-blue-700 dark:focus:ring-gray-800">
                        Kembali
                    </button>
                </a>
            </div>
        </nav>
        <div class="mt-24 mx-auto w-2/4 h-auto">
            <div class="text-4xl p-5 text-black text-center">
                <h3>Ada yang perlu diganti di</h3>
                <h3>Perpustakaan Mudzakir?</h3>
            </div>
            <form class="max-w-sm mx-auto" method="post">
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku:</label>
                        <input type="text" name="judul_buku" value="<?php echo "$data[judul_buku]"?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ghani Mudzakir" required />
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis:</label>
                        <input type="text" name="penulis" value="<?php echo "$data[penulis]"?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ghani Mudzakir" required />
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penerbit:</label>
                        <input type="text", name="penerbit" value="<?php echo "$data[penerbit]"?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ghani Mudzakir" required />
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Terbit:</label>
                        <input type="text", name="tahun_terbit" value="<?php echo "$data[tahun_terbit]"?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ghani Mudzakir" required />
                    </div>
                    <div class="mb-5">
                        <button name="kirim" class="text-white bg-gray-700 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah Data</button>
                    </div>
            </form>
        </div>
    </body>
</html>

<?php 
include_once "Model.php";
include_once "Koneksi.php";

if (isset($_POST['kirim'])) {
    $id_buku = $_GET['kode'];
    $judul_buku=$_POST['judul_buku'];
    $penulis=$_POST['penulis'];
    $penerbit=$_POST['penerbit'];
    $tahun_terbit=$_POST['tahun_terbit'];

    $hasil = UbahDataBuku($koneksi, $id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit);
    echo "<meta http-equiv=refresh content=1;URL='Buku.php'>";
}



?>