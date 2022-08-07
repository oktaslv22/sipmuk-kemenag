<?php

namespace App\Controllers;

use App\Models\M_User;

class Register extends BaseController
{
    public function index()
    {
        // return view('form_regist');
    }

    public function process()
    {
        //         if (!$this->validate([
        //             'user_email' => [
        //                 'rules' => 'required|min_length[4]|is_unique[users.user_email]',
        //                 'errors' => [
        //                     'required' => '{field} Harus diisi',
        //                     'min_length' => '{field} Minimal 4 Karakter',
        //                     'is_unique' => 'Email sudah digunakan sebelumnya'
        //                 ]
        //             ],
        //             'user_name' => [
        //                 'rules' => 'required|min_length[4]|is_unique[users.user_name]',
        //                 'errors' => [
        //                     'required' => '{field} Harus diisi',
        //                     'min_length' => '{field} Minimal 4 Karakter',
        //                     'is_unique' => 'Username sudah digunakan sebelumnya'
        //                 ]
        //             ],
        //             'name' => [
        //                 'rules' => 'required|min_length[4]|',
        //                 'errors' => [
        //                     'required' => '{field} Harus diisi',
        //                     'min_length' => '{field} Minimal 4 Karakter'
        //                 ]
        //             ],
        //             'user_password' => [
        //                 'rules' => 'required|min_length[4]|',
        //                 'errors' => [
        //                     'required' => '{field} Harus diisi',
        //                     'min_length' => '{field} Minimal 4 Karakter',
        //                 ]
        //             ],

        //         ])) {
        //             session()->setFlashdata('error', $this->validator->listErrors());
        //             return redirect()->back()->withInput();
        //         }
        //         $users = new M_User();
        //         $users->insert([
        //             'user_email' => $this->request->getVar('user_email'),
        //             'user_name' => $this->request->getVar('user_name'),
        //             'name' => $this->request->getVar('name'),
        //             'user_password' => password_hash($this->request->getVar('user_password'), PASSWORD_BCRYPT),
        //         ]);
        //         return redirect()->to('/login');
    }
}