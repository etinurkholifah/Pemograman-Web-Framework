<?php

namespace App\Models;

use CodeIgniter\Model;

class TreasureModel extends Model
{
    public function getTreasure(){

        $data =[
            [
                "nama_member" => "Choi Hyunsuk",
                "tanggal_lahir"     => "21 April 1999",
                "golongan_darah"  => "A"
            ],
            [
                "nama_member" => "Prak Jihoon",
                "tanggal_lahir"     => "14 Maret 2000",
                "golongan_darah"  => "B",
            ],
            [
                "nama_member" => "Kanemoto Yoshi",
                "tanggal_lahir"     => "15 Mei 2000",
                "golongan_darah"  => "A"
            ],
            [
                "nama_member" => "Kim junkyu",
                "tanggal_lahir"     => "09 September 2000",
                "golongan_darah"  => "O"
            ],
            [
                "nama_member" => "Yoon Jaehyuk",
                "tanggal_lahir"     => "23 Juli 2001",
                "golongan_darah"  => "O"
            ],
            [
                "nama_member" => "Hamada Asahi",
                "tanggal_lahir"     => "20 Agustus 2001",
                "golongan_darah"  => "AB"
            ],[
                "nama_member" => "Kim Doyoung",
                "tanggal_lahir"     => "03 Desember 2003",
                "golongan_darah"  => "B"
            ],
            [
                "nama_member" => "Watanabe Haruto",
                "tanggal_lahir"     => "05 April 2004",
                "golongan_darah"  => "B"
            ],
            [
                "nama_member" => "Prak Jeongwoo",
                "tanggal_lahir"     => "28 September 2004",
                "golongan_darah"  => "O"
            ],
            [
                "nama_member" => "So Junghwan",
                "tanggal_lahir"     => "18 Febuari 2005",
                "golongan_darah"  => "B"
            ]
          ];
          return $data;
        }
    }  
