<?php

namespace App\Http\Livewire\Student;

use App\Models\Pendaftaran;
use App\Models\Province;
use Livewire\Component;

class Show extends Component
{
    public $data;

    protected $listeners = ['getStudentId' => 'show'];

    public function render()
    {
        return view('livewire.student.show');
    }

    public function show($id)
    {
        $result = Pendaftaran::find($id);
        $province = Province::find($result->province);
        $this->data = $result;
    }
}
