<?php

namespace App\Controllers;

use App\Models\M_User;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function register()
    {
        //melakukan validasi untuk data yang di post
        if ($this->request->getVar()) {
            $data = $this->request->getvar();
            $validate = $this->validation->run($data, 'register');
            $errors = $this->validation->getErrors();

            //jika tidak ada error
            if (!$errors) {
                // $m_User = new \App\Models\M_User();
                // $user = new \App\Entities\User();
                // $user->user_email = $this->request->getPost('user_email');
                // $user->user_name = $this->request->getPost('user_name');
                // $user->name = $this->request->getPost('name');
                // $user->user_password = $this->request->getPost('user_password');
                // $user->created_by = 0;
                // $user->updated_at = date("Y-m-d H:i:s");

                // $m_User->save($user);
                $users = new M_User();
                $users->insert([
                    'user_email' => $this->request->getVar('user_email'),
                    'user_name' => $this->request->getVar('user_name'),
                    'name' => $this->request->getVar('name'),
                    'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_BCRYPT),
                ]);
                return view('form_login');
            }
            $this->session->setFlashdata('errors', $errors);
        }
        return view('form_regist');
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getvar();
            $validate = $this->validation->run($data, 'login');
            $errors = $this->validation->getErrors();

            if ($errors) {
                return view('form_login');
            }
            $users = new M_User();
            $user_name = $this->request->getVar('user_name');
            $user_password = $this->request->getVar('user_password');
            $dataUser = $users->where([
                'user_name' => $user_name,
            ])->first();

            if ($dataUser) {
                $salt = $dataUser->salt;
                if ($dataUser->user_password !== md5($salt . $user_password)) {
                    $this->session->setFlashdata('errors', ['Password Salah!']);
                } else {
                    $sessData = [
                        'user_name' => $dataUser->user_name,
                        'id' => $dataUser->id,
                        'isLoggedIn' => TRUE
                    ];
                    $this->session->set($sessData);
                    return redirect()->to(site_url('/'));
                }
            } else {
                $this->session->setFlashdata('errors', ['User Tidak Ditemukan!']);
            }
        }
        return view('form_login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}