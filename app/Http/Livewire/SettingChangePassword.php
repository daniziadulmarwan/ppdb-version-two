<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SettingChangePassword extends Component
{
    public $newPassword;
    public $confirmNewPassword;

    protected $rules = [
        'newPassword' => 'required|min:6|required_with:confirmNewPassword|same:confirmNewPassword',
        'confirmNewPassword' => 'required',
    ];

    public function render()
    {
        return view('livewire.setting-change-password');
    }

    public function updatePassword()
    {
        $this->validate();
    }
}
