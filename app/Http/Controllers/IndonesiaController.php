<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class IndonesiaController extends Controller
{
   public function provinsi()
   {
        $data = Province::where('name', 'LIKE', '%'. request('keyword') . '%')->get();
        return response()->json($data);
   }
}
