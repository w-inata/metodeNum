<?php

namespace App\Controllers;

use PHPExcel;
use PHPExcel_IOFactory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Statistika extends BaseController
{


    public function index()
    {
        // untuk panggil database
        $datasModel = new \App\Models\DatasModel();

        // untuk ambil semua data
        $datas = $datasModel->findAll();

        // untuk tempat menampung data yang akan dikirim
        $data = [
            "title" => "Beranda",
            "datas" => $datas,
        ];
        return view('statistika/index', $data); // buka view index dan kirim data
    }

    public function tambahData()
    {
        $data = [
            "title" => "Tambah Data",
        ];
        return view('statistika/tambahData', $data);
    }

    public function tabelFrekuensi()
    {
        $datasModel = new \App\Models\DatasModel();

        $data = [
            "title" => "Tabel Frekuensi",
            "min" => $datasModel->getMin(),
            "max" => $datasModel->getMax(),
            "avg" => $datasModel->getAvg(),
            "frekuensiTabel" => $datasModel->getFrekuensiTabel(),
        ];
        return view('statistika/tabelFrekuensi', $data);
    }

    public function saveData()
    {
        // untuk panggil database
        $datasModel = new \App\Models\DatasModel();

        $skor = $this->request->getPost('skor');

        $datasModel->insert(["skor" => $skor]);

        return redirect()->to('statistika');
    }

    public function deleteData()
    {
        // untuk panggil database
        $datasModel = new \App\Models\DatasModel();

        $id = $this->request->getGet('id');

        $datasModel->delete(["id" => $id]);

        return redirect()->to('statistika');
    }

    public function editData()
    {
        $id = $this->request->getGet('id');
        $skor = $this->request->getGet('skor');

        $data = [
            "title" => "Edit Data",
            "id" => $id,
            "skor" => $skor,
        ];

        return view('statistika/editData', $data);
    }

    public function saveEditData()
    {
        // untuk panggil database
        $datasModel = new \App\Models\DatasModel();

        $id = $this->request->getPost('id');
        $skor = $this->request->getPost('skor');
        $datasModel->update(["id" => $id], ["skor" => $skor]);

        return redirect()->to('statistika');
    }

    public function dataBergolong()
    {
        $datasModel = new \App\Models\DatasModel();

        $data = [
            "title" => "Tabel Data Bergolong",
            "r" => $datasModel->getRentangan(),
            "k" => $datasModel->getKelas(),
            "i" => $datasModel->getInterval(),
            "bergolongTabel" => $datasModel->getBergolongTabel(),
        ];
        return view('statistika/dataBergolong', $data);
    }

    public function importData()
    {
        $data = [
            "title" => "Import Data",
        ];
        return view('statistika/importData', $data);
    }

    public function importValidation()
    {
        $validation = \config\Services::validation();

        $valid = $this->validate(
            [
                'fileImport' => [
                    'label' => 'Imputan File',
                    'rules' => 'upload[fileImport]ext_in[fileImport,xls,xlsx]',
                    'errors' => [
                        'uploaded' => '{field} wajib diisi',
                        'ext_in' => '{filed} harus ekstensi xls atau xlsx'
                    ]
                ]
            ]
        );
        if (!$valid) {
            $this->session->setFlashdata('pesan', $validation->getError('fileImport'));

            return redirect()->to('/statistika');
        }
    }

    public function saveImportData()
    {
        // untuk panggil database
        $datasModel = new \App\Models\DatasModel();

        $skor = $this->request->getPost('skorImport');

        $datasModel->insert(["skorImport" => $skor]);

        return redirect()->to('/statistika');
    }


    public function chikuadrat()
    {
        $datasModel = new \App\Models\DatasModel();
        $allData =

            $data = [
                "title" => "Tabel chi-kuadrat",
                'jmlData' => $datasModel->allData(),
                'avg' => $datasModel->getAvg(),
                'sb' => $datasModel->standardepedensi(),
                'bergolongtabel' => $datasModel->getBergolongTabel(),
            ];


        return view('statistika/chikuadrat', $data);
    }

    public function liliefors()
    {
        $datasModel = new \App\Models\DatasModel();

        $data = [
            "title" => "Tabel liliefors",
        ];


        return view('statistika/liliefors', $data);
    }
}
