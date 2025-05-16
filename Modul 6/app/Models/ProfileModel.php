<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    public function getIntroBeranda()
    {
        return [
            'intro1' => 'Halo perkenalkan saya adalah Ghani Mudzakir, saya adalah mahasiswa PSTI ULM yang tengah menekuni machine learning dan aktif dalam organisasi kampus.',
            'intro2' => 'Saya memiliki visi menjadi seorang Data Scientist dan CTO di masa depan dengan semangat kepemimpinan dan komunikasi yang kuat.',
            'intro3' => 'Cari tahu lebih tentang aku atau hubungi aku sekarang ya!',
        ];
    }

    public function getProfilSingkat(): string
    {
        return "Halo! Nama saya Ghani Mudzakir, seorang mahasiswa dari Program Studi Teknologi Informasi di Fakultas Teknik Universitas Lambung Mangkurat dengan NIM 2310817110011. Saat ini saya lahir serta berdomisili di Banjarmasin. Saya memiliki minat yang kuat di bidang big data terutama di machine learning development dan sedang aktif mengembangkan keterampilan di bidang tersebut.

Saya dikenal sebagai pribadi yang teliti, kreatif, dan mudah beradaptasi. Dalam keseharian, saya menikmati kegiatan seperti bermain musik dan berorganisasi yang membantu saya menjaga keseimbangan antara akademik dan pengembangan diri.";
    }

    public function getPengalaman(): string
    {
        return "Saya memiliki kemampuan di beberapa bidang seperti Python dan soft skill seperti public speaking. Selain itu, saya aktif terlibat dalam berbagai kegiatan organisasi, salah satunya sebagai Koordiv PSDM di HMTI FT ULM 2025 yang memberi saya pengalaman dalam manajemen tim dan komunikasi publik.";
    }

    public function getKontak(): string
    {
        return '<h4>Jika ingin mengenal saya lebih jauh atau melihat portofolio saya, silakan kunjungi laman di bawah ini.</h4>
        <p>
    Instagram: <a href="https://www.instagram.com/ghanimdzkr" target="_blank" rel="noopener noreferrer">ghanimdzkr</a> | 
    LinkedIn: <a href="https://www.linkedin.com/in/ghanimudzakir" target="_blank" rel="noopener noreferrer">Ghani Mudzakir</a></p>';
    }
}
