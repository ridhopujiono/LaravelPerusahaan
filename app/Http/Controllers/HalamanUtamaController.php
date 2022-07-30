<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use App\Models\partner;
use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function index()
    {
        $layanan = layanan::all();
        $partner = partner::all();
        return view('utama.index', [
            "layanan" => $layanan,
            "partner" => $partner
        ]);
    }
}
