<?php

namespace App\Http\Livewire;

use App\Models\NewStudent;
use Livewire\Component;

class EditStudent extends Component
{
    public $studentId;
    public $fullname;

    protected $listeners = ['getIdStudent' => 'getStudentId'];

    protected $rules = [
        'fullname' => 'required',
    ];

    public function render()
    {
        return view('livewire.edit-student');
    }

    public function getStudentId($id)
    {
        $data = NewStudent::find($id);
        $this->studentId = $id;
        $this->fullname = "";
    }

    public function save()
    {
        $this->validate($this->rules);
    }
}
