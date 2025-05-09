<?php 
include "Koneksi.php";


function tambahDataBuku($koneksi, $judul_buku, $penulis, $penerbit, $tahun_terbit){
    
    mysqli_query($koneksi, "INSERT INTO buku SET 
    judul_buku='$judul_buku',
    penulis = '$penulis',
    penerbit = '$penerbit',
    tahun_terbit = '$tahun_terbit'");

    echo "<meta http-equiv=refresh content=1;URL='Buku.php'>";

}
function tambahDataMember($koneksi, $nama_member, $nomor_member, $alamat){
    
    mysqli_query($koneksi, "INSERT INTO member SET 
    nama_member ='$nama_member',
    nomor_member = '$nomor_member',
    alamat = '$alamat',
    tgl_mendaftar = NOW(),
    tgl_terakhir_bayar = NOW()");

    echo "<meta http-equiv=refresh content=1;URL='Member.php'>";
}

function tambahDataPeminjaman($koneksi, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku){
    
    mysqli_query($koneksi, "INSERT INTO peminjaman SET 
    tgl_pinjam ='$tgl_pinjam',
    tgl_kembali = '$tgl_kembali',
    id_member = '$id_member',
    id_buku = '$id_buku'
    ");

    echo "<meta http-equiv=refresh content=1;URL='Peminjaman.php'>";
}

function TampilDataBuku($koneksi){
    $ambil_data = mysqli_query($koneksi, "SELECT * FROM buku");
    while ($tampil = mysqli_fetch_array($ambil_data)) {
        echo "
        <tr class='odd:bg-white even:bg-gray-200'>
            <td class='border border-black p-2 text-center'>$tampil[id_buku]</td>
            <td class='border border-black p-2 text-center'>$tampil[judul_buku]</td>
            <td class='border border-black p-2 text-center'>$tampil[penulis]</td>
            <td class='border border-black p-2 text-center'>$tampil[penerbit]</td>
            <td class='border border-black p-2 text-center'>$tampil[tahun_terbit]</td>
            <td class='border border-black p-2 text-center'>
                <a href='?kode=$tampil[id_buku]'>
                    <button class='bg-red-500 text-black font-semibold px-4 py-2 rounded-xl hover:bg-black hover:text-white transition duration-300 transform hover:scale-105'>
                        Hapus
                    </button>
                </a>
            </td>
            <td class='border border-black p-2 text-center'>
                <a href='FormUbahBuku.php?kode=$tampil[id_buku]'>
                    <button class='bg-yellow-400 text-black font-semibold px-4 py-2 rounded-xl hover:bg-black hover:text-yellow-500 transition duration-300 transform hover:scale-105'>
                        Ubah
                    </button>
                </a>
            </td>
        </tr>
        ";
    }
}
function TampilDataMember($koneksi){
    $ambil_data = mysqli_query($koneksi, "SELECT * FROM member");
    while ($tampil = mysqli_fetch_array($ambil_data)) {
        echo "
        <tr class='odd:bg-white even:bg-gray-200'>
            <td class='border border-black p-2 text-center'>$tampil[id_member]</td>
            <td class='border border-black p-2 text-center'>$tampil[nama_member]</td>
            <td class='border border-black p-2 text-center'>$tampil[nomor_member]</td>
            <td class='border border-black p-2 text-center'>$tampil[alamat]</td>
            <td class='border border-black p-2 text-center'>$tampil[tgl_mendaftar]</td>
            <td class='border border-black p-2 text-center'>$tampil[tgl_terakhir_bayar]</td>
            <td class='border border-black p-2 text-center'>
                <a href='?kode=$tampil[id_member]'>
                    <button class='bg-red-500 text-black font-semibold px-4 py-2 rounded-xl hover:bg-black hover:text-white transition duration-300 transform hover:scale-105'>
                        Hapus
                    </button>
                </a>
            </td>
            <td class='border border-black p-2 text-center'>
                <a href='FormUbahMember.php?kode=$tampil[id_member]'>
                    <button class='bg-yellow-400 text-black font-semibold px-4 py-2 rounded-xl hover:bg-black hover:text-yellow-500 transition duration-300 transform hover:scale-105'>
                        Ubah
                    </button>
                </a>
            </td>
        </tr>

        
        ";
    }
}

function TampilDataPeminjaman($koneksi){
    $ambil_data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
    while ($tampil = mysqli_fetch_array($ambil_data)) {
        echo "
        <tr class='odd:bg-white even:bg-gray-200'>
            <td class='border border-black p-2 text-center'>$tampil[id_peminjaman]</td>
            <td class='border border-black p-2 text-center'>$tampil[tgl_pinjam]</td>
            <td class='border border-black p-2 text-center'>$tampil[tgl_kembali]</td>
            <td class='border border-black p-2 text-center'>$tampil[id_member]</td>
            <td class='border border-black p-2 text-center'>$tampil[id_buku]</td>
            <td class='border border-black p-2 text-center'>
                <a href='?kode=$tampil[id_peminjaman]'>
                    <button class='bg-red-500 text-black font-semibold px-4 py-2 rounded-xl hover:bg-black hover:text-white transition duration-300 transform hover:scale-105'>
                        Hapus
                    </button>
                </a>
            </td>
            <td class='border border-black p-2 text-center'>
                <a href='FormUbahPeminjaman.php?kode=$tampil[id_peminjaman]'>
                    <button class='bg-yellow-400 text-black font-semibold px-4 py-2 rounded-xl hover:bg-black hover:text-yellow-500 transition duration-300 transform hover:scale-105'>
                        Ubah
                    </button>
                </a>
            </td>
        </tr>

        
        ";
    }
}

function HapusDataBuku($koneksi, $kode){
    mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$kode'");
}

function HapusDataMember($koneksi, $kode){
    mysqli_query($koneksi, "DELETE FROM member WHERE id_member='$kode'");
}

function HapusDataPeminjaman($koneksi, $kode){
    mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman='$kode'");
}

function UbahDataBuku($koneksi, $id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit){
    
    mysqli_query($koneksi, "UPDATE buku SET 
    judul_buku='$judul_buku',
    penulis = '$penulis',
    penerbit = '$penerbit',
    tahun_terbit = '$tahun_terbit'
    WHERE id_buku = '$id_buku'
    ");
}

function UbahDataMember($koneksi, $id_member, $nama_member, $nomor_member, $alamat, $tgl_terakhir_bayar){
    
    mysqli_query($koneksi, "UPDATE member SET 
    nama_member ='$nama_member',
    nomor_member = '$nomor_member',
    alamat = '$alamat', 
    tgl_terakhir_bayar = '$tgl_terakhir_bayar'
    WHERE id_member='$id_member'");
}
function UbahDataPeminjaman($koneksi, $id_peminjaman, $tgl_pinjam, $tgl_kembali, $id_member, $id_buku){
    
    mysqli_query($koneksi, "UPDATE peminjaman SET 
    tgl_pinjam ='$tgl_pinjam',
    tgl_kembali = '$tgl_kembali',
    id_member = '$id_member',
    id_buku = '$id_buku'
    WHERE id_peminjaman='$id_peminjaman'");
}
?>
