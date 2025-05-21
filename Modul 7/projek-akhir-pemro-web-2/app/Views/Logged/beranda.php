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
                        <span class=" flex items-center justify-center w-12 h-12 bg-blue-200 rounded-full mb-8">
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
                        <span class="flex items-center justify-center w-12 h-12 mb-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-up-icon lucide-book-up"><path d="M12 13V7"/><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="m9 10 3-3 3 3"/></svg>                    
                        </span>
                    </a>
                </div>
            </div>
        </div>


     <!-- isi halaman ini -->
        <div class="flex flex-col min-h-screen w-full bg-[#00ADB5]">
            <div class="m-6 min-w-screen ">
                <h1 class="text-[#222831] text-3xl font-bold">Beranda</h1>
                <a href="<?= base_url('logout') ?>">
                    <button class="bg-gray-100 px-2.5 py-2 rounded-xl">
                        Log Out
                    </button>
                </a>
            </div>
            <div class="m-10 min-w-screen h-52 rounded-2xl text-[#EEEEEE]">
                <div class="text-4xl m-6 font-bold text-center">
                    <h1 class="mb-2">
                        Halo,
                    </h1>
                    <h1>
                        📖Selamat datang di <span class="text-[#222831]">Perpustakaan Mudzakir</span>📖
                    </h1>
                </div>
                <div class="ml-6 mt-14 text-center text-[#222831] text-3xl font-semibold">
                    <p>Sudah siap menjelajah Perpustakaan hari ini?</p>
                </div>
            </div>

            <div class="m-10 min-w-screen h-[350px] bg-[#00ADB5] rounded-2xl flex flex-row">
                <div class="bg-[#EEEEEE] w-64 h-64 rounded-2xl m-10 flex flex-col">
                    <span class="flex items-center justify-center w-64 h-48 mb-3 rounded-tr-2xl rounded-tl-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text-icon lucide-book-text"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="M8 11h8"/><path d="M8 7h6"/></svg>
                    </span>
                    <h1 class="font-bold text-xl text-center mb-6"><a href="<?= base_url('/logged/lihat') ?>" class="hover:underline hover:text-[#00ADB5]">Lihat Daftar Buku</a></h1>
                </div>
                <div class="bg-[#EEEEEE] w-64 h-64 rounded-2xl m-10">
                    <span class="flex items-center justify-center w-64 h-48 mb-3 rounded-tr-2xl rounded-tl-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-plus-icon lucide-book-plus"><path d="M12 7v6"/><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="M9 10h6"/></svg>   
                    </span>
                    <h1 class="font-bold text-xl text-center mb-6"><a href="<?= base_url('/logged/tambah') ?>" class="hover:underline hover:text-[#00ADB5]">Tambah Daftar Buku</a></h1>
                </div>
                <div class="bg-[#EEEEEE] w-64 h-64 rounded-2xl m-10">
                    <span class="flex items-center justify-center w-64 h-48 mb-3 rounded-tr-2xl rounded-tl-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-minus-icon lucide-book-minus"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="M9 10h6"/></svg>
                    </span>
                    <h1 class="font-bold text-xl text-center mb-6"><a href="<?= base_url('/logged/hapus') ?>" class="hover:underline hover:text-[#00ADB5]">Hapus Daftar Buku</a></h1>
                </div>
                <div class="bg-[#EEEEEE] w-64 h-64 rounded-2xl m-10">
                    <span class="flex items-center justify-center w-64 h-48 mb-3 rounded-tr-2xl rounded-tl-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-up-icon lucide-book-up"><path d="M12 13V7"/><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20"/><path d="m9 10 3-3 3 3"/></svg>                    
                    </span>
                    <h1 class="font-bold text-xl text-center mb-6"><a href="<?= base_url('/logged/ubah') ?>"  class="hover:underline hover:text-[#00ADB5]">Update Daftar Buku</a></h1>
                </div>
            </div>
            <div>
                <span class="block text-sm text-[#222831] sm:text-center dark:text-gray-400 mb-7">© 2025 Perpustakaan Mudzakir All Rights Reserved.</span>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
