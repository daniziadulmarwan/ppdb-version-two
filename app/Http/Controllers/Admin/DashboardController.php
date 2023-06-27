<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewStudent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = NewStudent::all();

        $total = $data->count();
        $mts = collect($data)->where('jenjang', 1)->count();
        $ma = collect($data)->where('jenjang', 2)->count();
        $ponpes = collect($data)->where('is_pesantren', 1)->count();

        return view('admin.dashboard.index', compact('total', 'mts', 'ma', 'ponpes'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
