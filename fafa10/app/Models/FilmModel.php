<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{

    protected $table            ='film';
    protected $primarykey       ='id';
    protected $useAutoIncrement =true;
    protected $allowedFields    = ['nama_film', 'id_genre', 'duration', 'cover'];
    
    public function getFilm(){
    
    $data =[
        [
            "nama_film" => "Sewu Dino",
            "genre"     => "Horor",
            "duration"  => "1 jam 43 menit"
        ],
        [
            "nama_film" => "Fast And Forious X",
            "genre"     => "Action",
            "duration"  => "2 jam 9 menit"
        ],
        [
            "nama_film" => "Mistery class",
            "genre" => "Horor",
            "duration" => "3 jam 2 menit"
        ],
        [
            "nama_film" => "Docter Cha",
            "genre" => "Action",
            "duration" => "1 jam 23 menit"
        ],
        [
            "nama_film" => "My Treasure",
            "genre" => "Romantic",
            "duration" => "58 menit"
        ]
      ];
      return $data;
    }
    public function getAllDataJoin()
    {
        $query = $this->db->table("film")
            ->select("film.*,genre.nama_genre")
            ->join("genre", "genre.id = film.id_genre");
        return $query->get()->getResultArray();
    }
    public function getAllData()
    {
        return $this->findAll();
    }

    public function getDataByID($id)
    {
        return $this->find($id);
    }

    public function getDataBy($data)
    {
        return $this->where('genre', $data)->findAll();
    }

    public function getOrderBy()
    {
        return $this->orderBy('created_at', 'desc')->findAll();
    }

    public function getLimit()
    {
        return $this->limit(5)->get()->getResultArray();
    }
}
