<?= $this->extend('Layout/template') ?>
<?= $this->section('isi_beranda') ?>

<main class="bg-[#A08963] font-[Poppins] py-10 px-6">
    <a href="/">
        <button class="py-2.5 px-5 mb-10 text-sm font-medium text-[#DBDBDB] bg-[#706D54] rounded-lg">
            Home
        </button>
    </a>

    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col lg:flex-row items-center gap-5 rounded-2xl shadow-2xl bg-[#706D54]">
            <img src="<?= base_url('gambar/gambar_ketiga.png') ?>" alt="Ghani"
                class="w-72 h-auto rounded-2xl ml-24 z-10" />
            <div class="flex-1 ml-20">
                <h1 class="text-8xl font-bold text-white mb-4 ml-16">
                    <span class="text-[#C9B194]">About</span> Me!
                </h1>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
            <div class="rounded-3xl p-6 text-white bg-[#706D54]">
                <h2 class="text-2xl font-bold text-center mb-2">Profil Singkat & Minat</h2>
                <p><?= esc($profil) ?></p>
            </div>
            <div class="rounded-3xl p-6 text-white bg-[#706D54]">
                <h2 class="text-2xl font-bold text-center mb-2">Pengalaman & Aktivitas</h2>
                <p><?= esc($pengalaman) ?></p>
            </div>
        </div>

        <div id="kontak" class="bg-[#706D54] rounded-3xl p-6 mt-10 text-white text-center">
            <h2 class="text-2xl font-bold mb-2">Contact Me Now!</h2>
            <?= $kontak ?>
        </div>
    </div>
</main>

<?= $this->endSection() ?>
