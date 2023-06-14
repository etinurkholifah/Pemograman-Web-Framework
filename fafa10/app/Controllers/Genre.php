<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//Step 1
use App\Models\GenreModel;

class Genre extends BaseController
{
    //Step 2
    protected $genre;
    //Step 3
    public function __construct()
    {
      //Step 4
      $this->genre = new GenreModel();
    }

    public function index()
    {
        $data['data_genre'] =$this->genre->getGenre();
        return view("genre/index", $data);
    }
    public function all(){
    
        $data['semuagenre'] =$this->genre->getAllData();
        return view("semuagenre", $data);
    }
    
    public function genre (){
        dd($this->genre->getDataBy("Horor"));
    }
    
}

