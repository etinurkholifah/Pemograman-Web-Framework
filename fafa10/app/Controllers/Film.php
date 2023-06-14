<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//Step 1//
use App\Models\FilmModel;

class Film extends BaseController
{
    //Step2//
    protected $film;
    //Step 3 membuat fungsi construct untuk inisiasi class model//
    public function __construct()
    {
        //Step 4 inisialisasi//
        $this->film = new FilmModel();
    }
    
    public function index()
    {
        $data['data_film'] =$this->film->getAllDataJoin();
        return view("index", $data);
    }
    public function all()
    {
        $data['semuafilm'] =$this->film->getAllDataJoin();
        return view("semuafilm", $data);
       
    }
    public function film_by_id()
    {
        dd($this->film->getDataByID(1));
    }
    public function film_by_genre()
    {
        dd($this->film->getDataBy("Horor"));
    }
    public function film_order()
    {
        dd($this->film->getOrderBy());
    }
    public function film_limit_five()
    {
        dd($this->film->getLimit());
    }
}
