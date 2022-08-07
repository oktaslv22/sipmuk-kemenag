<?php

namespace App\Controllers;

use App\Models\M_biodata3;

class Biodata3 extends BaseController
{
    protected $biodata3;

    function __construct()
    {
        $this->biodata3 = new M_biodata3();
    }

    public function index()
    {
        $data['biodata3'] = $this->biodata3->findAll();
        return view('v_keg3', $data);
    }

    public function create3()
    {
        return view('form_biodata3');
    }

    public function store3()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nip' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tmpt_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tempat_tugas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'npwp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama_rek' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nomor_rek' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama_bank' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tempat_tinggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kab_kota' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat_rumah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat_kantor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->biodata3->insert([
            'nama' => $this->request->getVar('nama'),
            'nip' => $this->request->getVar('nip'),
            'tmpt_lahir' => $this->request->getVar('tmpt_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'tempat_tugas' => $this->request->getVar('tempat_tugas'),
            'jabatan' => $this->request->getVar('jabatan'),
            'npwp' => $this->request->getVar('npwp'),
            'nama_rek' => $this->request->getVar('nama_rek'),
            'nomor_rek' => $this->request->getVar('nomor_rek'),
            'nama_bank' => $this->request->getVar('nama_bank'),
            'tempat_tinggal' => $this->request->getVar('tempat_tinggal'),
            'kab_kota' => $this->request->getVar('kab_kota'),
            'alamat_rumah' => $this->request->getVar('alamat_rumah'),
            'alamat_kantor' => $this->request->getVar('alamat_kantor'),
            'telp' => $this->request->getVar('telp')


        ]);

        session()->setFlashdata('message', 'Pendaftaran Berhasil');
        return redirect()->to('/');
    }

    function delete($id)
    {
        $dataBiodata = $this->biodata3->find($id);
        if (empty($dataBiodata)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Biodata Tidak ditemukan !');
        }
        $this->biodata3->delete($id);
        session()->setFlashdata('message', 'Delete Data Berhasil');
        return redirect()->to('/v_keg3');
    }

    function form_after_biodata()
    {
        return view('form_after_biodata');
    }

    public function export()
    {
        $data = [
            'biodata' => $this->model->getAllData()
        ];
        echo view('excel', $data);
    }
}