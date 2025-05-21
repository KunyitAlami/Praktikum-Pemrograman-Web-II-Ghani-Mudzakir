<?= $this->extend('Template/template') ?>

<?= $this->section('isi_beranda') ?>
<div class="flex flex-col md:flex-row bg-[#393E46] min-h-screen max-h-screen font-[Poppins]" id="wadah_semua">
    <div id="wilayah_kiri" class="overflow-hidden rounded-r-2xl w-full md:w-1/2 h-auto justify-center bg-[#EEEEEE] text-[#393E46]">
        <h1 class="text-5xl font-bold mt-28 text-center">Buat Akun di</h1>
        <h1 class="text-5xl font-bold mt-4 text-[#00ADB5] text-center">Perpustakaan Mudzakir</h1>
        <?php if(session()->getFlashdata('errors')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mt-4 ml-4 mr-4 mb-4">
                <ul class="list-disc pl-5">
                    <?php foreach(session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <form action="<?= base_url('/register/save') ?>" method="post" class="px-6 md:px-20">
            <div class="relative z-0 w-full mb-5 mt-10 group">
                <input type="email" name="email" id="email_daftar" class="block py-2.5 px-0 w-full text-sm text-[#393E46] bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                <label for="email" class="peer-focus:font-medium absolute text-sm text-[#393E46] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-[#393E46] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukan Email Anda</label>
            </div>
            <div class="relative z-0 w-full mb-5 mt-10 group">
                <input type="text" name="username" id="usn_daftar" class="block py-2.5 px-0 w-full text-sm text-[#393E46] bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                <label for="username" class="peer-focus:font-medium absolute text-sm text-[#393E46] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-[#393E46] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukan Username Anda</label>
            </div>
            <div class="relative z-0 w-full mb-5 mt-10 group">
                <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-[#393E46] bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                <label for="password" class="peer-focus:font-medium absolute text-sm text-[#393E46] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-[#393E46] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukan Password Anda</label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Buat Akun</button>
        </form>
    </div>
    <div id="wilayah_kanan" class="w-full md:w-1/2 min-h-screen bg-[#393E46] flex items-center justify-center">
        <div class="text-center text-[#EEEEEE] px-6 md:px-16">
            <h1 class="text-5xl font-bold">Halo, selamat datang di</h1>
            <h1 class="text-5xl font-bold p-2 text-[#00ADB5]">Perpustakaan Mudzakir</h1>
            <p class="text-2xl mt-14">Satu langkah lagi untuk terhubung dengan <span class="text-[#00ADB5]">Perpustakaan Mudzakir</span>. Yuk, buat akunmu sekarang!</p>
            <a href="<?= base_url('login') ?>" class="mt-8 inline-block">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-[#EEEEEE] rounded-lg group bg-[#00ADB5] hover:bg-[#EEEEEE] hover:text-[#393E46]">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-transparent rounded-md">Sudah punya akun</span>
                </button>
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
