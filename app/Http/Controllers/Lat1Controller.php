<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lat1Controller extends Controller
{

    public function index()
    {
        $data['title'] = "Daftar Mahasiswa";
        $data['daf_mhs'] = array(
            array("nama" => "Agus", "asal" => "Bandung"),
            array("nama" => "Budi", "asal" => "Jakarta"),
            array("nama" => "Roni", "asal" => "Surabaya"),
        );
        
        return view('v_latihan2', $data);
    }

    
}
