<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function register()
    {
        return view('Layout/register');
    }

    public function registerPost()
    {
        // Validasi input
        if (!$this->validate([
            'email' => 'required|valid_email|is_unique[user.email]',
        ])) {
            // Jika validasi gagal, kembali ke halaman register dengan input sebelumnya dan pesan error
            return redirect()->back()->withInput()->with('errors', ['Email sudah terpakai!']);

        }

        // Jika lolos validasi, simpan data user
        $this->userModel->save([
            'email' => $this->request->getVar('email'),
            'username'=> $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }
    public function loginPost()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $this->userModel->where('email', $email)->first();

        if ($user) {

            if (password_verify($password, $user['password'])) {
                session()->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'logged_in' => true
                ]);

                return redirect()->to('/logged/beranda');
            } else {
                return redirect()->back()->withInput()->with('error', 'Password salah!');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Email tidak ditemukan!');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Berhasil logout.');
    }



}
