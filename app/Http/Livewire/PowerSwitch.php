<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PowerSwitch extends Component
{
    public $switch = 'on';

    public function render()
    {
        return view('livewire.power-switch');
    }

    public function changeSwitch()
    {

        $this->switch = 'on';
    }
}
