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
                        <span class="flex items-center justify-center w-12 h-12 bg-blue-200 rounded-full mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-plus-icon lucide-book-plus"><path d="M12 7v6"/><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="M9 10h6"/></svg>   
                        </span>
                    </a>
                    <a href="<?= base_url('/logged/hapus') ?>">
                        <span class="flex items-center justify-center w-12 h-12 mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-minus-icon lucide-book-minus"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="M9 10h6"/></svg>
                        </span>
                    </a>
                    <a href="<?= base_url('/logged/ubah') ?>">
                        <span class="flex items-center justify-center w-12 h-12 mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-up-icon lucide-book-up"><path d="M12 13V7"/><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="m9 10 3-3 3 3"/></svg>                    
                        </span>
                    </a>
                </div>
            </div>
        </div>


     <!-- isi halaman ini -->
    <div class="flex flex-col min-h-screen w-full bg-[#00ADB5]">
        <div class="m-6 min-w-screen">
            <h1 class="text-[#222831] text-3xl font-bold">Tambah Data Buku</h1>
        </div>
        <div class="ml-6 mr-12 mt-10 mb-12 w-[500px] h-auto bg-white flex flex-col rounded-lg translate-x-[440px]">
            <div class="text-3xl text-center m-6">
                <h3 class="font-bold">Form Penambahan Buku</h3>
                <h3>Perpustakaan Mudzakir</h3>
            </div>
            <div class="m-2">
                <?php if(session()->has('errors')): ?>
                    <div class="mb-5 p-3 bg-red-200 text-red-800 rounded">
                        <ul>
                            <?php foreach(session('errors') as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form class="max-w-sm mx-auto" method="post" action="<?= base_url('logged/Buku/simpan') ?>">
                    <?= csrf_field() ?>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku:</label>
                        <input type="text" name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Negeri Para Bedebah" required />
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis:</label>
                        <input type="text" name="penulis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tere Liye" required />
                    </div>
                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penerbit:</label>
                        <input type="text" name="penerbit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Gramedia" required />
                    </div>
                    <div class="mb-9">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Terbit:</label>
                        <input type="number" name="tahun_terbit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="2012" required />
                    </div>
                    <div>
                        <button type="submit" name="kirim" class="text-white bg-gray-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Buku</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    </div>

<?= $this->endSection() ?>
