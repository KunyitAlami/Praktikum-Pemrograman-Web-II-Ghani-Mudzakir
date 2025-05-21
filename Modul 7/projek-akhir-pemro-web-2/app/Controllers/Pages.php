<?php

namespace App\Controllers;

class Pages extends BaseController
{
    private function checkLogin()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }
        return null;
    }

    public function index()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        return view('Logged/beranda');
    }

    public function lihat()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        return view('Logged/Buku');
    }

    public function tambah()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        return view('Logged/TambahBuku');
    }

    public function ubah()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        return view('Logged/UpdateBuku');
    }

    public function hapus()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        return view('Logged/HapusBuku');
    }
}
