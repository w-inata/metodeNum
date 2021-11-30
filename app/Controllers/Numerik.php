<?php

namespace App\Controllers;

use PHPExcel;
use PHPExcel_IOFactory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Numerik extends BaseController
{
    public function bagiDua()
    {
        $datasModel = new \App\Models\mNumerik();

        $datas = [
            "title" => "Metode Bagi Dua",
            "bagiDua" => $datasModel->bagiDua(),
        ];
        return view('numerik/bagiDua', $datas);
    }

    public function regulaFalsi()
    {
        $datasModel = new \App\Models\mNumerik();

        $datas = [
            "title" => "Metode Regula Falsi",
            "regula" => $datasModel->regulaFalsi(),
        ];
        return view('numerik/regulaFalsi', $datas);
    }

    public function iterasiTitikTetap()
    {
        $datasModel = new \App\Models\mNumerik();

        $datas = [
            "title" => "Metode Iterasi Titik Tetap",
            "titikTetap" => $datasModel->iterasiTitikTetap(),
        ];
        return view('numerik/iterasiTitikTetap', $datas);
    }

    public function newtonRaphson()
    {
        $datasModel = new \App\Models\mNumerik();

        $datas = [
            "title" => "Metode Newton Raphson",
            "newton" => $datasModel->newtonRaphson(),
        ];
        return view('numerik/newtonRaphson', $datas);
    }

    public function secant()
    {
        $datasModel = new \App\Models\mNumerik();

        $datas = [
            "title" => "Metode Secant",
            "secant" => $datasModel->secant(),
        ];
        return view('numerik/secant', $datas);
    }
}
