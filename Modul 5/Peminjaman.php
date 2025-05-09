<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Data Peminjaman Perpustakaan Mudzakir</title>
        <script src="https://cdn.tailwindcss.com"></script> 
    </head>
    <body class="bg-gray-300">
        <div class="flex flex-row pr-10">
            <div class="bg-gray-800 fixed top-0 left-0 w-64 min-h-screen">
                <h3 class="text-3xl p-5 text-white text-center">
                    Data Peminjaman
                </h3>
                <div class="pt-5 pl-5 text-white text-left flex flex-col">
                    <div class="pt-4">
                        <a href="Index.php">
                            <button class=" pl-3 w-48 h-10 bg-gray-800 text-left rounded-xl 
                                hover:bg-white hover:text-green-800 transition duration-300 transform hover:scale-105">
                                Kembali
                            </button>
                        </a>
                    </div>
                    <div class="pt-4">
                        <a href="FormPeminjaman.php">
                            <button class=" pl-3 w-48 h-10 bg-gray-800 text-left rounded-xl 
                                hover:bg-white hover:text-green-800 transition duration-300 transform hover:scale-105">
                                Tambah Data
                            </button>
                        </a>
                    </div>
                </div>
        </div>
        <div class="ml-80 mr-9">
            <div class="pt-10 pb-10 pr-10 ">
                <h1 class="text-4xl">
                    Daftar Peminjaman Buku Perpustakaan Mudzakir
                </h1>
            </div>
            <table class="table-auto w-full border-collapse border border-black">
                <thead class="bg-gray-400 border border-black">
                    <tr class="text-black">
                        <th class="border-collapse border border-black px-5 py-2">
                            ID Peminjaman
                        </th>
                        <th class="border-collapse border border-black px-5 py-2">
                            Tanggal Peminjaman
                        </th>
                        <th class="border-collapse border border-black px-5 py-2">
                            Tanggal Pengembalian
                        </th>
                        <th class="border-collapse border border-black px-5 py-2">
                            ID Member
                        </th>
                        <th class="border-collapse border border-black px-5 py-2">
                            ID Buku
                        </th>
                        <th class="border-collapse border border-black px-5 py-2 w-40" colspan="2">
                            Opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "Model.php";
                        include "Koneksi.php";

                        $tampilDataPeminjaman = TampilDataPeminjaman($koneksi);
                        if (isset($_GET['kode'])) {
                            $id = $_GET['kode'];
                            HapusDataPeminjaman($koneksi, $id);
                            echo "<meta http-equiv=refresh content=2;URL='Peminjaman.php'>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>