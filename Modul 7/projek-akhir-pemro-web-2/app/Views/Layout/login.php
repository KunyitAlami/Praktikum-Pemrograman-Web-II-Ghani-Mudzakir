<?= $this->extend('Template/template') ?>

<?= $this->section('isi_beranda') ?>
<div class="flex flex-row bg-[#EEEEEE] min-h-screen max-h-screen font-[Poppins] overflow-x-hidden" id="wadah_semua">
    <div id="wilayah_kiri" class="top-0 left-0 w-2/4 min-h-screen bg-[#EEEEEE]">
        <div class="ml-2 mr-2 p-2 text-center flex flex-col text-[#222831] translate-y-1/2">
            <h1 class="text-5xl font-bold">
                Berjumpa kembali di
            </h1>
            <h1 class="text-5xl font-bold p-2 text-[#00ADB5]">
                Perpustakaan Mudzakir
            </h1>
            <p class="text-2xl text-[#222831] mt-14" > 
                Untuk bisa masuk ke dalam <span class="text-[#00ADB5]">Perpustakaan Mudzakir</span> serta tetap terhubung dengan kami,
                Silahkan Sign in Terlebih Dahulu Ya!
            </p>
            <a href="<?= base_url('register') ?>" class="mt-8">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-[#EEEEEE] rounded-lg group bg-[#00ADB5] hover:bg-[#222831] hover:text-[#EEEEEE]">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-transparent rounded-md">
                        Buat Akun Sekarang!
                    </span>
                </button>
            </a>
        </div>
    </div>
    <div id="wilayah_kanan" class="p-6 rounded-l-2xl w-2/4 h-auto justify-center bg-[#393E46] text-[#EEEEEE]">
        <h1 class="text-5xl font-bold mt-20 justify-center text-center ">Sign in to</h1>
        <h1 class="text-5xl font-bold mt-4 justify-center text-[#00ADB5] text-center ">Perpustakaan Mudzakir</h1>
        <?php if(session()->getFlashdata('success')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mt-4 ml-4 mr-4 mb-4">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-100 text-red-800 p-2 rounded mt-2">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>


        <form action="<?= base_url('/login/auth') ?>" method="post" class="translate-y-8 ml-20 mr-20">
            <div class="relative z-0 w-full mb-5 mt-10 group">
                <input type="email" name="email" id="email_masuk" class="block py-2.5 px-0 w-full text-sm text-[#EEEEEE] bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                <label for="email" class="peer-focus:font-medium absolute text-sm text-[#EEEEEE] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#EEEEEE] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukan Email Anda</label>
            </div>
            <div class="relative z-0 w-full mb-5 mt-10 group">
                <input type="text" name="username" id="usn_masuk" class="block py-2.5 px-0 w-full text-sm text-[#EEEEEE] bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                <label for="username" class="peer-focus:font-medium absolute text-sm text-[#EEEEEE] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#EEEEEE] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukan Username Anda</label>
            </div>
            <div class="relative z-0 w-full mb-5 mt-10 group">
                <input type="password" name="password" id="pass_masuk"  class="block py-2.5 px-0 w-full text-sm text-[#EEEEEE] bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required />
                <label for="password" class="peer-focus:font-medium absolute text-sm text-[#EEEEEE] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-[#EEEEEE] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Masukan Password Anda</label>
            </div>

            <button type="submit" class="text-[#EEEEEE] bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Sign in</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
