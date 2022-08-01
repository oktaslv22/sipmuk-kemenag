<?php

namespace App\Controllers;

use App\Models\M_User;

class Register extends BaseController
{
    public function index()
    {
        return view('form_regist');
    }

    public function process()
    {
        if (!$this->validate([
            'user_email' => [
                'rules' => 'required|min_length[4]|max_length[20]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'user_name' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.user_name]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'user_password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new M_User();
        $users->insert([
            'user_email' => $this->request->getVar('user_email'),
            'user_name' => $this->request->getVar('user_name'),
            'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_BCRYPT),
        ]);
        return redirect()->to('/login');
    }
}