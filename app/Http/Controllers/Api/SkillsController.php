<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data = Skills::all();

        if ($data) {
            $respon = [
                'response' => 'Data berhasil ditampilkan',
                'data' => $data
            ];
            return response($respon, 200);
        }else{
            $respon = [
                'response' => 'Data tidak ditemukan',
            ];
            return response($respon);
        }
    }
}
