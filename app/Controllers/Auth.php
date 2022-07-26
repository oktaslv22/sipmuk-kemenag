<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_User;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function login()
    {

        // $muser = new M_User();
        // $login = $this->request->getPost('login');
        // if ($login) {
        //     $user_name = $this->request->getPost('user_name');
        //     $user_password = $this->request->getPost('user_password');

        //     if ($user_name == '' or $user_password == '') {
        //         $err = "Masukkan Username dan Password!";
        //     }
        //     if ($err) {
        //         session()->setFlashdata('error', $err);
        //         return redirect()->to("login");
        //     }
        // }
        return view('form_login');
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

    public function register()
    {
        // Jika Menerima Suatu Post
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'register');
            $errors = $this->validatiion->getErrors();

            // jika tidak error
            if (!$errors) {
                $M_User = new \App\Models\M_User();
                $user = new \App\Entities\User();
                $user->user_name = $this->request->getPost('user_name');
                $user->user_password = $this->request->getPost('user_password');
                $user->created_by = 0;
                $user->created_date = date("Y-m-d H:i:s");
                $M_User->save($M_User);

                return view('form_login');
            }
            $this->session->setFlashdata('errors', '$errors');
        }
        // Jika Tidak Menerima Suatu Post
        return view('form_regist');
    }
}