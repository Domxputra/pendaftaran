<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJurusan;

class Jurusan extends BaseController
{
    protected $jurusan;

    public function __construct() {
        $this->jurusan = new ModelJurusan();
    }
    public function index()
    {
        $data['Jurusan'] = $this->jurusan->findAll();
        return view('jurusan');
    }

    function tambah(){

    }
}
