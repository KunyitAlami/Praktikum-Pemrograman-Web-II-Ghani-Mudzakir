<?php
include_once "Koneksi.php";
include_once "Model.php";

$kode = $_GET['kode'];
$sql = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman='$kode'");
$data = mysqli_fetch_array($sql);

$result_member = mysqli_query($koneksi, "SELECT id_member FROM peminjaman WHERE id_peminjaman='$kode'");
$row_member = mysqli_fetch_assoc($result_member);
$id_member_tercatat = $row_member['id_member'];

$result_buku = mysqli_query($koneksi, "SELECT id_buku FROM peminjaman WHERE id_peminjaman='$kode'");
$row_buku = mysqli_fetch_assoc($result_buku);
$id_buku_tercatat = $row_buku['id_buku'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <title>Form Tambah Peminjaman Perpustakaan Mudzakir</title>
            <script src="https://cdn.tailwindcss.com"></script> 
    </head>
    <body>
            <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl mx-auto px-4 py-2 flex items-center justify-between">
                    <h1 class="text-2xl font-bold text-black dark:text-white">
                        Perpustakaan Mudzakir
                    </h1>
                    <a href="Peminjaman.php">
                        <button type="button" class="text-white bg-gray-700 hover:bg-gray-400 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Meminjam:</label>
                            <input value="<?php echo $data['tgl_pinjam'] ?>" type="date" name="tgl_pinjam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ghani Mudzakir" required />
                        </div>
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mengembalikan:</label>
                            <input value="<?php echo $data['tgl_kembali'] ?>" type="date" name="tgl_kembali" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="08123456789" required />
                        </div>
                        <div class="mb-5">
                            <label for="id_member" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Siapa yang mau meminjam:
                            </label>
                            <select name="id_member" id="id_member" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">-- Pilih ID Member --</option>
                                <?php
                                include "Koneksi.php";
                                $sql_member = mysqli_query($koneksi, "SELECT id_member, nama_member FROM member");
                                while ($row = mysqli_fetch_assoc($sql_member)) {
                                    $selected = ($row['id_member'] == $data['id_member']) ? "selected" : "";
                                    echo "<option value='" . $row['id_member'] . "' $selected>" . $row['id_member'] . " - " . $row['nama_member'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-5">
                            <label for="id_buku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Buku yang dipinjam:
                            </label>
                            <select name="id_buku" id="id_buku" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="">-- Pilih ID Buku --</option>
                                <?php
                                include "Koneksi.php";
                                $sql_buku = mysqli_query($koneksi, "SELECT id_buku, judul_buku FROM buku");
                                while ($row = mysqli_fetch_assoc($sql_buku)) {
                                    $selected = ($row['id_buku'] == $data['id_buku']) ? "selected" : "";
                                    echo "<option value='" . $row['id_buku'] . "' $selected>" . $row['id_buku'] . " - " . $row['judul_buku'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>


                        <div class="mb-5">
                            <button name="kirim" class="text-white bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah Data</button>
                        </div>
                </form>
            </div>
    </body>
</html>

<?php
if (isset($_POST['kirim'])) {
    $id_peminjaman = $_GET['kode'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $id_member = $_POST['id_member'];
    $id_buku = $_POST['id_buku'];

    $hasil = UbahDataPeminjaman($koneksi, $id_peminjaman, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku);
    
    echo "<meta http-equiv=refresh content=1;URL='Peminjaman.php'>";
}
?>
