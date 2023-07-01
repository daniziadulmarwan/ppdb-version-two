<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SettingEditUser extends Component
{
    public $name;
    public $username;
    public $password;
    public $confirm_password;
    public $role;

    public function render()
    {
        return view('livewire.setting-edit-user');
    }
}
