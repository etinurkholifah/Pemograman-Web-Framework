<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//Step 1
use App\Models\TreasureModel;

class Treasure extends BaseController
{
    //Step 2
    protected $treasure;
    //Step 3
    public function __construct()
    {
        //Step 4
        $this->treasure = new TreasureModel();
    }
    public function index()
    {
        $data['data_treasure'] =$this->treasure->getTreasure();
        return view("Index1", $data);
    }
}
