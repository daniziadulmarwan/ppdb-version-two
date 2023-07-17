<?php

namespace App\Http\Livewire;

use App\Models\Theme as ModelsTheme;
use Livewire\Component;

class Theme extends Component
{
    public $value;

    protected $listeners = [
        'changeTheme' => 'changeThemes',
        'themeChanged' => 'mount'
    ];

    public function render()
    {
        return view('livewire.theme', [
            'theme' => ModelsTheme::first()
        ]);
    }

    public function mount()
    {
        $theme = ModelsTheme::first();
        if ($theme->mode == 'light') {
            $this->value = 'light';
        } else {
            $this->value = 'dark';
        }
    }

    public function changeThemes(string $value)
    {
        $theme = ModelsTheme::first();

        if ($value == 'on') {
            $theme->mode = 'dark';
            $theme->save();
        } else {
            $theme->mode = 'light';
            $theme->save();
        }

        $this->emit('themeChanged', [
            'value' => $theme->mode
        ]);
    }
}
