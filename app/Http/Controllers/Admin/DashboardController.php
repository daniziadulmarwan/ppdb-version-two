<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Pendaftaran::all();

        $total = $data->count();
        $mts = collect($data)->where('jenjang', 1)->count();
        $ma = collect($data)->where('jenjang', 2)->count();
        $ponpes = collect($data)->where('is_pesantren', 1)->count();

        return view('admin.dashboard.index', compact('total', 'mts', 'ma', 'ponpes'));
    }
}
