<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Candidates;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    // tambahkan create pada skillset controller jika digunakan dalam 1 form
    public function store(Request $request)
    {
        // Mengecek validasi data inputan
        $validator = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'year' => 'required|integer',
            'job_id' => 'required|integer',
        ]);
        // menambahkan data ke database
        $data = Candidates::create($validator);

        // Mengecek data dan menampilkan respon
        if ($data) {
            $respon = [
                'response' => 'Data berhasil disimpan',
                'data' => $data
            ];
            return response($respon, 200);
        } else {
            $respon = [
                'response' => 'Periksa kembali data, Isi semua data yang ada',
            ];
            return response($respon);
        }
    }
}
