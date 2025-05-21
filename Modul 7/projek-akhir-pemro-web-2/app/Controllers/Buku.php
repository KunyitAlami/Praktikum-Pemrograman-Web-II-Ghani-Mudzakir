<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    private function checkLogin()
    {
        if (!session()->get('logged_in')) {
            redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.')->send();
            exit;
        }
    }


    public function index()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $data = [
            'buku' => $this->bukuModel->findAll()
        ];
        return view('Logged/Buku', $data);
    }

    public function hapus()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $data = [
            'buku' => $this->bukuModel->findAll()
        ];
        return view('Logged/HapusBuku', $data);
    }

    public function ubah()
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $data = [
            'buku' => $this->bukuModel->findAll()
        ];
        return view('Logged/UpdateBuku', $data);
    }

    public function simpan()
    {
        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ];

        $this->bukuModel->save($data);

        return redirect()->to('/logged/lihat')->with('success', 'Data buku berhasil ditambahkan!');
    }


    public function delete($id)
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $this->bukuModel->delete($id);
        return redirect()->to('/logged/hapus')->with('success', 'Data buku berhasil dihapus.');
    }

    public function edit($id)
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $data = [
            'buku' => $this->bukuModel->getBuku($id)
        ];
        return view('Logged/FormEdit', $data);
    }

    public function update($id)
    {
        $redirect = $this->checkLogin();
        if ($redirect) return $redirect;

        $this->bukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'tahun_terbit' => $this->request->getVar('tahun_terbit')
        ]);

        return redirect()->to('/logged/ubah')->with('success', 'Data buku berhasil diperbarui.');
    }
}
