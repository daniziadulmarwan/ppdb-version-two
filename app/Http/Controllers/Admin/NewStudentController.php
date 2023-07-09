<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\NewStudentsDataTable;
use App\Exports\StudentExport;
use App\Http\Controllers\Controller;
use App\Models\NewStudent;
use App\Models\Province;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NewStudentController extends Controller
{
    public function index(NewStudentsDataTable $dataTable)
    {
        return $dataTable->render('admin.student.index');
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

    public function export()
    {
        return Excel::download(new StudentExport, 'students-' . time() . '.csv');
        // return Excel::download(new StudentExport, 'students-' . time() . '.html', \Maatwebsite\Excel\Excel::HTML);
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
