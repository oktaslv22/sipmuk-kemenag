<?php

namespace App\Controllers;

use App\Models\M_biodata3;
use App\Models\M_dashboard;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Biodata3 extends BaseController
{
    protected $biodata3;

    function __construct()
    {
        $this->biodata3 = new M_biodata3();
    }

    public function index()
    {
        $model_dasboard = new M_dashboard();
        $currentPage =  $this->request->getVar('page_biodata') ? $this->request->getVar('page_biodata') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $biodata3 = $this->M_biodata3->search($keyword);
        } else {
            $biodata3 = $this->biodata3;
        }

        // $data['biodata'] = $this->biodata->findAll();
        $data['biodata3'] = $biodata3->paginate(10, 'biodata3');
        $data['pager'] = $this->biodata3->pager;
        $data['currentPage'] = $currentPage;
        $data['total_1'] = $model_dasboard->total_1();
        $data['total_2'] = $model_dasboard->total_2();
        $data['total_3'] = $model_dasboard->total_3();

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
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'numeric' => '{field} Harus diisi angka'
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
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'numeric' => '{field} Harus diisi angka'
                ]
            ],
            'nama_rek' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nomor_rek' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'numeric' => '{field} Harus diisi angka'
                ]
            ],
            'nama_bank' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'alpha_space' => '{field} Harus diisi huruf'
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
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'numeric' => '{field} Harus diisi angka'
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
        return redirect()->to('admin/view_keg3');
    }

    function form_after_biodata()
    {
        return view('form_after_biodata');
    }

    public function export()
    {
        $biodata3 = $this->biodata3->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'NIP');
        $sheet->setCellValue('D1', 'Tempat Lahir');
        $sheet->setCellValue('E1', 'Tanggal Lahir');
        $sheet->setCellValue('F1', 'Tempat Tugas');
        $sheet->setCellValue('G1', 'Jabatan');
        $sheet->setCellValue('H1', 'NPWP');
        $sheet->setCellValue('I1', 'Nama Rekening');
        $sheet->setCellValue('J1', 'Nomor Rekening');
        $sheet->setCellValue('K1', 'Nama Bank');
        $sheet->setCellValue('L1', 'Tempat Tinggal');
        $sheet->setCellValue('M1', 'Kabupaten/Kota');
        $sheet->setCellValue('N1', 'Alamat Rumah');
        $sheet->setCellValue('O1', 'Alamat Kantor');
        $sheet->setCellValue('P1', 'Nomor Telepon');

        $column = 2; //start column
        foreach ($biodata3 as $key => $value) {
            $sheet->setCellValue('A' . $column, ($column - 1));
            $sheet->setCellValue('B' . $column, $value->nama);
            $sheet->setCellValue('C' . $column, $value->nip);
            $sheet->setCellValue('D' . $column, $value->tmpt_lahir);
            $sheet->setCellValue('E' . $column, $value->tgl_lahir);
            $sheet->setCellValue('F' . $column, $value->tempat_tugas);
            $sheet->setCellValue('G' . $column, $value->jabatan);
            $sheet->setCellValue('h' . $column, $value->npwp);
            $sheet->setCellValue('I' . $column, $value->nama_rek);
            $sheet->setCellValue('J' . $column, $value->nomor_rek);
            $sheet->setCellValue('K' . $column, $value->nama_bank);
            $sheet->setCellValue('L' . $column, $value->tempat_tinggal);
            $sheet->setCellValue('M' . $column, $value->kab_kota);
            $sheet->setCellValue('N' . $column, $value->alamat_rumah);
            $sheet->setCellValue('O' . $column, $value->alamat_kantor);
            $sheet->setCellValue('P' . $column, $value->telp);
            $column++;
        }
        $sheet->getStyle('A1:P1')->getFont()->setBold(true);
        $sheet->getStyle('A1:P1')->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('FFFFFF00');
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],

                ],
            ],
        ];
        $sheet->getStyle('A1:P' . ($column - 1))->applyFromArray($styleArray);

        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
        $sheet->getColumnDimension('F')->setAutoSize(true);
        $sheet->getColumnDimension('G')->setAutoSize(true);
        $sheet->getColumnDimension('H')->setAutoSize(true);
        $sheet->getColumnDimension('I')->setAutoSize(true);
        $sheet->getColumnDimension('J')->setAutoSize(true);
        $sheet->getColumnDimension('K')->setAutoSize(true);
        $sheet->getColumnDimension('L')->setAutoSize(true);
        $sheet->getColumnDimension('M')->setAutoSize(true);
        $sheet->getColumnDimension('N')->setAutoSize(true);
        $sheet->getColumnDimension('O')->setAutoSize(true);
        $sheet->getColumnDimension('P')->setAutoSize(true);

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=SosialisasiBOP.xlsx');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit();
    }
}