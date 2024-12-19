<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\Gejala;
use App\Models\Penyakit;

class DiagnosaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('diagnosa.index', compact('gejalas'));
    }

    public function diagnosa(Request $request)
    {
        $inputGejala = $request->input('gejala');
        $rules = Rule::all();

        foreach ($rules as $rule) {
            $ruleGejala = json_decode($rule->kode_gejala);
            if (count(array_intersect($inputGejala, $ruleGejala)) == count($ruleGejala)) {
                $penyakit = Penyakit::find($rule->penyakit_id);
                return view('diagnosa.result', compact('penyakit'));
            }
        }

        return view('diagnosa.result', ['penyakit' => null]);
    }
}
