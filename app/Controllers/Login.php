<?php

namespace App\Controllers;

use App\Models\M_User;

class Login extends BaseController
{
    public function index()
    {
        return view('form_login');
    }

    public function process()
    {
        $users = new M_User();
        $user_name = $this->request->getVar('user_name');
        $user_password = $this->request->getVar('user_password');
        $dataUser = $users->where([
            'user_name' => $user_name,
        ])->first();
        if ($dataUser) {
            if (password_verify($user_password, $dataUser->user_password)) {
                session()->set([
                    'user_name' => $dataUser->user_name,
                    'user_email' => $dataUser->user_email,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}