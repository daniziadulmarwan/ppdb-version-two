<?php

namespace App\Http\Livewire\Setting;

use App\Models\SettingTime;
use Livewire\Component;

class SwitchButton extends Component
{
    public $value = true;

    protected $listeners = [
        'turnSwitch' => 'turn',
        'turnedSwitch' => 'mount'
    ];

    public function render()
    {
        return view('livewire.setting.switch-button');
    }

    public function mount()
    {
        $data = SettingTime::first();
        if ($data->time == 'off') {
            $this->value = false;
        } else {
            $this->value = true;
        }
    }

    public function turn($val)
    {
        $data = SettingTime::first();
        $data->time = $val;
        $data->save();
        $this->emit('turnedSwitch', [
            'value' => $data->time
        ]);
    }
}
