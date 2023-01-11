<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SkillSets;
use Illuminate\Http\Request;

class SkillSetsController extends Controller
{
    public function tambah(Request $request)
    {
        // menampung inputan skill kedalam array, ubah koma untuk me
        $skil = explode(',', $request->skill_id);

        // melakukan loop kemudian menambahkan data ke database
        foreach ($skil as $skillset) {
            $index = 0;
            $data[] = SkillSets::create([
                'candidate_id' => $request->candidate_id,
                'skill_id' => $skillset[$index],
            ]);

            $index++;
        }

        // Mengecek data dan menampilkan respon
        if ($data) {
            $respon = [
                'response' => 'Data berhasil disimpan',
                'data' => $data
            ];
            return response($respon, 200);
        }
        else{
            $respon = [
                'response' => 'Periksa kembali data, Isi semua data yang ada',
            ];
            return response($respon);
        }
    }
}
