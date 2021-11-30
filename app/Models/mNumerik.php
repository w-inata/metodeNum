<?php

namespace App\Models;

use CodeIgniter\Model;

use function Complex\ln;

class mNumerik extends Model
{
    public function bagiDua()
    {
        //f(x)=ln x + x - 5 =0
        $a = 3.2;
        $b = 4;
        $epsilon = 0.000001;
        $c = 0;
        $res = [];
        $no = 1;

        for ($i = 0; $i < 10; $i++) {

            $c = ($a + $b) / 2;
            $fa = log($a) + $a - 5;
            $fc = log($c) + $c - 5;

            array_push($res, [
                "no" => $no,
                "a" => number_format($a, 7),
                "b" => number_format($b, 7),
                "c" => number_format($c, 7),
                "fa" => number_format($fa, 7),
                "fc" => number_format($fc, 7),
                "ab" => number_format(abs($a - $b), 7)
            ]);

            if (($fa * $fc) < 0) {
                $b = $c;
            } else {
                $a = $c;
            }
            if (abs($a - $b) < $epsilon) {
                $i = 10;
            } else {
                $i = 0;
                $no++;
            }
        }
        return $res;
    }

    public function regulaFalsi()
    {
        //f(x)=ln x + x - 5 =0
        $a = 3.2;
        $b = 4;
        $epsilon = 0.000001;
        $c = 0;
        $res = [];
        $no = 1;

        for ($i = 0; $i < 10; $i++) {

            $fa = log($a) + $a - 5;
            $fb = log($b) + $b - 5;
            $c = $b - (($fb * ($b - $a)) / ($fb - $fa));
            $fc = log($c) + $c - 5;

            array_push($res, [
                "no" => $no,
                "a" => number_format($a, 7),
                "b" => number_format($b, 7),
                "c" => number_format($c, 7),
                "fa" => number_format($fa, 7),
                "fb" => number_format($fb, 7),
                "fc" => number_format($fc, 7),
                "ab" => number_format(abs($a - $b), 7)
            ]);

            if (($fa * $fc) < 0) {
                $b = $c;
            } else {
                $a = $c;
            }
            if ((abs($a - $b) < $epsilon) || ($fc < $epsilon)) {
                $i = 10;
            } else {
                $i = 0;
                $no++;
            }
        }
        return $res;
    }

    public function iterasiTitikTetap()
    {
        $x = 4; //terkaan awal
        //f(x)=ln x + x - 5 =0      //x = 5 - ln x

        $xSebelumnya = 0;
        $epsilon = 0.000001;
        $res = [];

        for ($i = 0; $epsilon < abs($x - $xSebelumnya); $i++) {

            array_push($res, [
                "no" => $i,
                "x" => number_format($x, 7),
                "xr1xr" => number_format(abs($x - $xSebelumnya), 7),
            ]);

            $xSebelumnya = $x;
            $x = 5 - log($xSebelumnya);
        }
        return $res;
    }

    public function newtonRaphson()
    {
        $x = 4; //terkaan awal
        //f(x)=ln x + x - 5 =0      //f'(x)= 1/x + 1

        $xSebelumnya = 0;
        $epsilon = 0.000001;
        $res = [];

        for ($i = 0; $epsilon < abs($x - $xSebelumnya); $i++) {

            array_push($res, [
                "no" => $i,
                "x" => number_format($x, 7),
                "xr1" => number_format((log($x) + $x - 5) / ((1 / $x) + 1), 7),
            ]);

            $xSebelumnya = $x;
            $x = $xSebelumnya - ((log($x) + $x - 5) / ((1 / $x) + 1));
        }
        return $res;
    }

    public function secant()
    {

        //f(x)=ln x + x - 5 =0      //f'(x)= 1/x + 1
        $x0 = 3.2;
        $x1 = 4;
        $x = 3.2;
        $xSebelumnya = 0;
        $epsilon = 0.000001;
        $res = [];

        for ($i = 0; $epsilon < abs($x - $xSebelumnya); $i++) {

            array_push($res, [
                "no" => $i,
                "x" => number_format($xSebelumnya, 7),
                "xr1" => number_format($xSebelumnya - $x, 7),
            ]);

            $xSebelumnya = $x1;
            $x = $x - ((log($x) + $x - 5) * ($x1 - $x0) / ((log($x1) + $x1 - 5) - (log($x0) + $x0 - 5)));
            $x0 = $x1;
            $x1 = $x;
        }
        return $res;
    }
}
