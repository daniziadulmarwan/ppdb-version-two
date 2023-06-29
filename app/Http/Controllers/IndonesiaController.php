<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;

class IndonesiaController extends Controller
{
    public function GetRegency(Request $request)
    {
        $kabupaten = Regency::where('province_id', $request->id)->orderBy('name', 'ASC')->get();
        foreach ($kabupaten as $item) {
            echo "<option value='$item->id'>$item->name</option>";
        }
    }

    public function GetRegencyById(Request $request)
    {
        $item = Regency::where('id', $request->id)->first();
        echo "<option value='$item->id'>$item->name</option>";
    }

    public function GetDistrict(Request $request)
    {
        $kecamatan = District::where('regency_id', $request->id)->orderBy('name', 'ASC')->get();
        foreach ($kecamatan as $item) {
            echo "<option value='$item->id'>$item->name</option>";
        }
    }

    public function GetDistrictById(Request $request)
    {
        $item = District::where('id', $request->id)->first();
        echo "<option value='$item->id'>$item->name</option>";
    }

    public function GetVillage(Request $request)
    {
        $kelurahan = Village::where('district_id', $request->id)->orderBy('name', 'ASC')->get();
        foreach ($kelurahan as $item) {
            echo "<option value='$item->id'>$item->name</option>";
        }
    }

    public function GetVillageById(Request $request)
    {
        $item = Village::where('id', $request->id)->first();
        echo "<option value='$item->id'>$item->name</option>";
    }
}
