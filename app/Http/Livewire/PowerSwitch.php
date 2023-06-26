<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PowerSwitch extends Component
{
    public $switch = 0;

    public function render()
    {
        return view('livewire.power-switch');
    }

    public function changeSwitch()
    {
        if ($this->switch == 0) {
            $this->switch = 1;
        } else {
            $this->switch = 0;
        }
    }
}
