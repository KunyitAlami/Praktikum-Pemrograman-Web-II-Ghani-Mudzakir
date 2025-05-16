<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Pages extends BaseController
{
    protected $profileModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }

    public function index(): string
    {
        $data['intro'] = $this->profileModel->getIntroBeranda();
        return view('Pages/beranda', $data);
    }

    public function about(): string
    {
        $data['profil'] = $this->profileModel->getProfilSingkat();
        $data['pengalaman'] = $this->profileModel->getPengalaman();
        $data['kontak'] = $this->profileModel->getKontak();
        return view('Pages/profil', $data);
    }
}
