<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $data = Jobs::all();

        if ($data) {
            $respon = [
                'response' => 'Data berhasil ditampilkan',
                'data' => $data
            ];
            return response($respon, 200);
        }else{
            $respon = [
                'response' => 'Data tidak ada',
            ];
            return response($respon);
        }
    }
}
