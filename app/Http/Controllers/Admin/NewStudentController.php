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
        $propinsi = Province::all();
        return view('admin.student.create', compact('propinsi'));
    }

    public function store(Request $request)
    {
        $rules = [
            'jenjang' => ['required', 'in:1,2'],
            'is_pesantren' => ['required', 'in:1,2'],
            'tahun_lulus' => ['required'],
            'jenis_pendaftaran' => ['required', 'in:1,2'],
            'pilihan_kelas' => ['nullable', 'in:7,8,9,10,11,12'],

            'tahun_ppdb' => ['required'],

            'fullname' => ['required'],
            'nisn' => ['required', 'min:10', 'max:10'],
            'nik' => ['nullable', 'min:16', 'max:16'],
            'gender' => ['required', 'in:1,2'],
            'born_place' => ['required'],
            'born_date' => ['required'],
            'agama' => ['required', 'in:1,2,3,4,5,6'],
            'status_keluarga' => ['required', 'in:1,2,3,4'],
            'jumlah_saudara' => ['nullable'],
            'anak_ke' => ['nullable'],
            'wa_number' => ['required'],
            'email' => ['nullable'],

            'address' => ['required'],
            'rt' => ['nullable'],
            'rw' => ['nullable'],
            'kode_pos' => ['nullable', 'max:5', 'min:5'],
            'province' => ['required'],
            'regency' => ['required'],
            'district' => ['required'],
            'village' => ['required'],

            'no_kk' => ['nullable'],
            'nik_ayah' => ['nullable'],
            'nama_ayah' => ['required'],
            'pekerjaan_ayah' => ['nullable', 'in:1,2,3,4,5,6,7,8,9,10'],
            'penghasilan_ayah' => ['nullable', 'in:1,2,3,4,5,6,7'],
            'nik_ibu' => ['nullable'],
            'nama_ibu' => ['nullable'],
            'pekerjaan_ibu' => ['nullable', 'in:1,2,3,4,5,6,7,8,9,10'],

            'asal_sekolah' => ['nullable'],
            'seri_ijazah' => ['nullable'],
            'kip_number' => ['nullable'],

            'kk' => ['nullable', 'image', 'file', 'max:1024'],
            'akte' => ['nullable', 'image', 'file', 'max:1024'],
            'foto' => ['nullable', 'image', 'file', 'max:1024'],
            'agree' => ['accepted'],
        ];

        $validated = $request->validate($rules);
        dd($validated);
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
        $data = NewStudent::findOrFail($id);
        $data->delete();
        return response()->json($data);
    }
}
