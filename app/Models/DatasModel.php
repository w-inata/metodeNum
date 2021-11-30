<?php

namespace App\Models;

use CodeIgniter\Model;

class DatasModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'datas';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['skor'];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    public function getAsArray()
    {
        $tmp = $this->findAll();
        $res = [];
        foreach ($tmp as $t) {
            array_push($res, $t['skor']);
        }
        return $res;
    }

    public function getMin()
    {
        $arr = $this->getAsArray();
        $res = min($arr);
        return $res;
    }

    public function getMax()
    {
        $arr = $this->getAsArray();
        $res = max($arr);
        return $res;
    }

    public function getAvg()
    {
        $arr = $this->getAsArray();
        $res = array_sum($arr) / count($arr);
        return $res;
    }

    public function getFrekuensiTabel()
    {
        $arr = $this->getAsArray();
        $key = array_unique($arr);
        sort($key);
        $res = [];

        foreach ($key as $k) {
            array_push($res, [
                "key" => $k,
                "value" => count(array_keys($arr, $k)),

            ]);
        }

        return $res;
    }

    public function getRentangan()
    {
        $arr = $this->getAsArray();
        $res = max($arr) - min($arr);
        return $res;
    }

    public function getKelas()
    {
        $arr = $this->getAsArray();
        $res = ceil(1 + 3.3 * log10(count($arr)));
        return $res;
    }

    public function getInterval()
    {
        $arr = $this->getAsArray();
        $res = ceil($this->getRentangan() / $this->getKelas());
        return $res;
    }

    public function getBergolongTabel()
    {
        $arr = $this->getAsArray();
        $key = array_unique($arr);
        sort($key);
        $res = [];
        $i = $this->getInterval();

        for ($a = min($arr); $a <= max($arr); $a += $i) {
            $golong = 0;
            for ($b = $a; $b <= $a + $i; $b++) {
                $golong = $golong + count(array_keys($arr, $b));
            }
            array_push($res, [
                "key" => $a,
                "keyLast" => $a + $i - 1,
                "value" => $golong,
            ]);
        }
        return $res;
    }

    public function allData()
    {
        $arr = $this->getAsArray();
        $banyakData = count($arr);

        return $banyakData;
    }


    public function standardepedensi()
    {
        $arr = $this->getAsArray();

        $jmlData = array_sum($arr);
        $countData = count($arr);

        $jmlKuadrat = 0;
        foreach ($arr as $a) {
            $jmlKuadrat = $jmlKuadrat + ($a * $a);
        }


        $res = sqrt(($jmlKuadrat - (($jmlData * $jmlData) / $countData)) / ($countData - 1));

        return $res;
    }
}
