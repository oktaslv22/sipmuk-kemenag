<?php

namespace App\Controllers;

use App\Models\M_biodata;
use App\Models\M_dashboard;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Biodata extends BaseController
{
    protected $biodata;

    function __construct()
    {
        $this->biodata = new M_biodata();
    }

    public function index()
    {
        $model_dasboard = new M_dashboard();
        $currentPage =  $this->request->getVar('page_biodata') ? $this->request->getVar('page_biodata') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $biodata = $this->M_biodata->search($keyword);
        } else {
            $biodata = $this->biodata;
        }

        // $data['biodata'] = $this->biodata->findAll();
        $data['biodata'] = $biodata->paginate(10, 'biodata');
        $data['pager'] = $this->biodata->pager;
        $data['currentPage'] = $currentPage;
        $data['total_1'] = $model_dasboard->total_1();
        $data['total_2'] = $model_dasboard->total_2();
        $data['total_3'] = $model_dasboard->total_3();

        return view('v_keg1', $data);
    }

    public function create()
    {
        return view('form_biodata');
    }

    public function store()
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

        $this->biodata->insert([
            'nama' => $this->request->getVar('nama'),
            'nip' => $this->request->getVar('nip'),
            'tmpt_lahir' => $this->request->getVar('tmpt_lahir'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'tempat_tugas' => $this->request->getVar('tempat_tugas'),
            'jabatan' => $this->request->getVar('jabatan'),
            'alamat_rumah' => $this->request->getVar('alamat_rumah'),
            'alamat_kantor' => $this->request->getVar('alamat_kantor'),
            'telp' => $this->request->getVar('telp')


        ]);
        session()->setFlashdata('message', 'Pendaftaran Berhasil');
        return redirect()->to('/');
    }

    function delete($id)
    {
        $dataBiodata = $this->biodata->find($id);
        if (empty($dataBiodata)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Biodata Tidak ditemukan !');
        }
        $this->biodata->delete($id);
        session()->setFlashdata('message', 'Delete Data Berhasil');
        return redirect()->to('admin/view_keg1');
    }

    function detail()
    {
        return json_encode($this->biodata - find($id));
    }

    function form_after_biodata()
    {
        return view('form_after_biodata');
    }

    public function export()
    {
        $biodata = $this->biodata->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'NIP');
        $sheet->setCellValue('D1', 'Tempat Lahir');
        $sheet->setCellValue('E1', 'Tanggal Lahir');
        $sheet->setCellValue('F1', 'Tempat Tugas');
        $sheet->setCellValue('G1', 'Jabatan');
        $sheet->setCellValue('H1', 'Alamat Rumah');
        $sheet->setCellValue('I1', 'Alamat Kantor');
        $sheet->setCellValue('J1', 'Nomor Telepon');

        $column = 2; //start column
        foreach ($biodata as $key => $value) {
            $sheet->setCellValue('A' . $column, ($column - 1));
            $sheet->setCellValue('B' . $column, $value->nama);
            $sheet->setCellValue('C' . $column, $value->nip);
            $sheet->setCellValue('D' . $column, $value->tmpt_lahir);
            $sheet->setCellValue('E' . $column, $value->tgl_lahir);
            $sheet->setCellValue('F' . $column, $value->tempat_tugas);
            $sheet->setCellValue('G' . $column, $value->jabatan);
            $sheet->setCellValue('H' . $column, $value->alamat_rumah);
            $sheet->setCellValue('I' . $column, $value->alamat_kantor);
            $sheet->setCellValue('J' . $column, $value->telp);
            $column++;
        }
        $sheet->getStyle('A1:J1')->getFont()->setBold(true);
        $sheet->getStyle('A1:J1')->getFill()
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
        $sheet->getStyle('A1:J' . ($column - 1))->applyFromArray($styleArray);

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


        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=PelatihanEMIS.xlsx');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
        exit();
    }
}