<?php

namespace App\Http\Livewire\Setting;

use App\Models\User;
use Livewire\Component;

class ChangePassword extends Component
{
    public $newPassword;
    public $confirmNewPassword;

    protected $rules = [
        'newPassword' => 'required|min:6|required_with:confirmNewPassword|same:confirmNewPassword',
        'confirmNewPassword' => 'required',
    ];

    public function render()
    {
        return view('livewire.setting.change-password');
    }

    public function updatePassword()
    {
        $this->validate();

        $user = User::find(auth()->user()->id);

        $user->password = bcrypt($this->newPassword);
        $user->password_text = $this->newPassword;
        $user->save();
        $this->emit('passwordChanged');
    }
}
