<?php

namespace App\Http\Livewire;

use App\Models\Pendaftaran;
use App\Models\Province;
use Livewire\Component;

class ShowStudent extends Component
{
    public $data;

    protected $listeners = ['getStudentId' => 'show'];

    public function render()
    {
        return view('livewire.show-student');
    }

    public function show($id)
    {
        $result = Pendaftaran::find($id);
        $province = Province::find($result->province);
        $this->data = $result;
    }
}
