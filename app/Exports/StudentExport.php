<?php

namespace App\Exports;

use App\Models\NewStudent;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class StudentExport implements FromView
{
    public function view(): View
    {
        return view('exports.student', [
            'data' => NewStudent::all()
        ]);
    }
}
