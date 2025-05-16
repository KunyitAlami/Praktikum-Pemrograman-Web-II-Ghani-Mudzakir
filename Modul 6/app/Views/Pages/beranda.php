<?= $this->extend('Layout/template') ?>

<?= $this->section('isi_beranda') ?>

<div class="flex font-[Poppins]">
    <div class="fixed top-0 left-0 w-2/5 min-h-screen bg-[#C9B194]">
        <div class="relative w-full h-full p-2">
            <h2 class="absolute top-32 left-24 text-6xl font-bold subpixel-antialiased text-[#DBDBDB]">
                <a class="text-[#706D54]">Let's </a> Find <a class="text-[#706D54]"> Out</a>
            </h2>
            <h2 class="absolute top-48 left-14 text-6xl font-bold subpixel-antialiased text-[#DBDBDB]">
                 Who <a class="text-[#706D54]">is</a> this <a class="text-[#706D54]">Guy?</a>
            </h2>
            <img src="<?= base_url('gambar/gambar_profil.png') ?>"
                alt="Gambar Selamat Datang"
                class="absolute left-1/2 transform -translate-x-1/2 translate-y-44 scale-90 max-w-sm h-auto " />
        </div>
    </div>

    <div class="ml-[40%] w-[60%] px-10 pt-5 mt-16">
        <div class="flex flex-col pt-5">
            <h2 class="text-6xl font-bold subpixel-antialiased pt-10 text-[#A08963]">Assalamualaikum,</h2>
            <h2 class="text-6xl font-bold subpixel-antialiased text-[#A08963]">Salam Kenal🙌🏻</h2>
        </div>

        <div class="mt-10">
            <p class="mb-10"><?= $intro['intro1']; ?></p>
            <p class="mb-10"><?= $intro['intro2']; ?></p>
            <p class="mb-10"><?= $intro['intro3']; ?></p>
        </div>
        <div class="mt-12 relative">
            <a href="/Pages/about">            
                <button type="button"
                    class="text-white bg-[#A08963] hover:bg-[#706D54] focus:ring-4 focus:ring-gray-300 font-lg rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Profil Lengkap
                </button>
            </a>
            <button type="button"
                class="text-white bg-[#A08963] hover:bg-[#706D54] focus:ring-4 focus:ring-gray-300 font-lg rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                <a href="<?= base_url('Pages/about') ?>#kontak">Contact Me Now!</a>
            </button>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
