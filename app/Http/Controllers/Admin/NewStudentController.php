<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewStudent;
use App\Models\Province;
use Illuminate\Http\Request;

class NewStudentController extends Controller
{
    public function index()
    {
        $data = NewStudent::latest()->get();
        return view('admin.student.index', compact('data'));
    }

    public function create()
    {
        $data = Province::all();
        return view('admin.student.create', compact('data'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $data = NewStudent::find($id);
        $province = Province::all();
        return view('admin.student.edit', compact('data', 'province'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
