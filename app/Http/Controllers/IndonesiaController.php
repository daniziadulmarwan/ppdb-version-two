<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class IndonesiaController extends Controller
{
   public function provinsi(Request $request)
   {
        $data = Province::where('name', 'LIKE', '%'. $request->keyword . '%')->paginate(20);
        return response()->json($data);
   }
}
