<?= $this->extend('Template/Logged/template_dua') ?>

<?= $this->section('isi_beranda') ?>

    <div class="flex flex-row font-[Poppins]">
        <!-- navigasi bagian kiri -->
        <div class="min-h-screen w-28 bg-[#EEEEEE] flex flex-col">
            <div class="flex flex-row mb-4">
                <img class="ml-8 mt-6 mb-10 w-10 h-auto rounded-full" src="<?= base_url('logo.jpeg') ?>" > 
            </div>
            <div class="min-h-screen">
                <div class="flex flex-col ml-6 mr-6 text-center m-10">
                    <a href="<?= base_url('/logged/beranda') ?>">
                        <span class=" flex items-center justify-center w-12 h-12 mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-icon lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                        </span>
                    </a>
                    <a href="<?= base_url('/logged/lihat') ?>">
                        <span class=" flex items-center justify-center w-12 h-12 mb-8">                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text-icon lucide-book-text"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="M8 11h8"/><path d="M8 7h6"/></svg>
                        </span>
                    </a>
                    <a href="<?= base_url('/logged/tambah') ?>">
                        <span class="flex items-center justify-center w-12 h-12 mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-plus-icon lucide-book-plus"><path d="M12 7v6"/><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="M9 10h6"/></svg>   
                        </span>
                    </a>
                    <a href="<?= base_url('/logged/hapus') ?>">
                        <span class="flex items-center justify-center w-12 h-12 mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-minus-icon lucide-book-minus"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="M9 10h6"/></svg>
                        </span>
                    </a>
                    <a href="<?= base_url('/logged/ubah') ?>">
                        <span class="flex items-center justify-center w-12 h-12 bg-blue-200 rounded-full mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-up-icon lucide-book-up"><path d="M12 13V7"/><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="m9 10 3-3 3 3"/></svg>                    
                        </span>
                    </a>
                </div>
            </div>
        </div>


     <!-- isi halaman ini -->
        <div class="flex flex-col min-h-screen w-full bg-[#00ADB5]">
            <div class="m-6 min-w-screen ">
                <h1 class="text-[#222831] text-3xl font-bold">Update Data Buku</h1>
                <div class="bg-white rounded-lg shadow-lg ml-6 mr-12 mt-12 p-6 overflow-auto">
                    <h2 class="text-xl font-semibold mb-4">Daftar Buku</h2>
                    <table class="min-w-full text-center border border-gray-200 border-collapse">
                        <thead class="bg-[#222831] text-white">
                            <tr>
                                <th class="py-2 px-4 border-b border-gray-300">No</th>
                                <th class="py-2 px-4 border-b border-gray-300">Judul Buku</th>
                                <th class="py-2 px-4 border-b border-gray-300">Penulis</th>
                                <th class="py-2 px-4 border-b border-gray-300">Penerbit</th>
                                <th class="py-2 px-4 border-b border-gray-300">Tahun Terbit</th>
                                <th class="py-2 px-4 border-b border-gray-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white text-[#222831]">
                            <?php $i = 1; foreach ($buku as $a) : ?>
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4 border-b border-gray-200"><?= $i++  ?></td>
                                <td class="py-2 px-4 border-b border-gray-200"><?= $a['judul'] ?></td>
                                <td class="py-2 px-4 border-b border-gray-200"><?= $a['penulis'] ?></td>
                                <td class="py-2 px-4 border-b border-gray-200"><?= $a['penerbit'] ?></td>
                                <td class="py-2 px-4 border-b border-gray-200"><?= $a['tahun_terbit'] ?></td>
                                <td class="py-2 px-4 border-b border-gray-200">
                                <a href="<?= base_url('logged/edit/' . $a['id'])?>">
                                    <button class="bg-yellow-200 rounded-lg px-2.5 py-2 hover:bg-yellow-500 hover:text-white">
                                        Update Data
                                    </button>
                                </a>    
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="mt-4">
                        <a href="<?= base_url('logged/lihat') ?>">
                            <p class="underline hover:text-blue-700 hover:underline">ingin melihat seluruh data buku?</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
