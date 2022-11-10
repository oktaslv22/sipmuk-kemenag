<?php

namespace App\Controllers;

use App\Models\M_User;
use App\Config\Autoload;
use App\Models\M_UserInvalid;

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
                'rules' => 'required|min_length[4]|is_unique[users.user_email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'is_unique' => 'Email sudah digunakan sebelumnya'
                ]
            ],
            'user_name' => [
                'rules' => 'required|min_length[4]|is_unique[users.user_name]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[4]|',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter'
                ]
            ],
            'user_password' => [
                'rules' => 'required|min_length[4]|',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $user_email = \Config\Services::email();

        $user_email->setFrom('esbestoree@gmail.com', 'Kanwil Kemenag Provinsi Lampung');
        $user_email->setTo($this->request->getPost('user_email'));
        $token = hash('MD5', $this->request->getPost('user_name') . $this->request->getPost('user_email'));
        // return $token;
        $user_email->setSubject('Verify Your Email Address');
        $data['link'] = base_url('verifikasi_akun') . '/' . $token;
        $data['name'] = $this->request->getVar('name');
        $user_email->setMessage(view('email', $data));
        $user_email->send();
        // exit();

        // $ //users = new M_User();
        // $users = array();

        $model = new M_UserInvalid();
        $model->insert([
            'user_email' => $this->request->getVar('user_email'),
            'user_name' => $this->request->getVar('user_name'),
            'name' => $this->request->getVar('name'),
            'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_BCRYPT),
            'token' => $token,
        ]);
        session()->setFlashdata('error', 'Silakan cek email anda untuk verifikasi!');
        return redirect()->to('/login');
    }

    public function verifikasi($token)
    {
        $model = new M_UserInvalid();
        $data_user = $model->where('token', $token)->first();
        $model_user = new M_User();
        $model_user->insert([
            'user_name' => $data_user['user_name'],
            'name' => $data_user['name'],
            'user_password' => $data_user['user_password'],
            'user_email' => $data_user['user_email'],
        ]);

        $model->delete($data_user['id']);
        session()->setFlashdata('error', 'Akun anda sudah terverifikasi, silahkan login!^^');
        return redirect()->to('/login');
    }
}