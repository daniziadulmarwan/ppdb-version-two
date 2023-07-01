<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateNewUser extends Component
{
    public $name;
    public $username;
    public $password;
    public $confirm_password;
    public $role;

    protected $rules = [
        'name' => 'required',
        'username' => 'required|min:6',
        'password' => 'required|min:6|required_with:confirm_password|same:confirm_password',
        'confirm_password' => 'required',
        'role' => 'required',
    ];

    public function render()
    {
        return view('livewire.create-new-user');
    }

    public function submit()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'username' => $this->username,
            'password_text' => $this->password,
            'password' => bcrypt($this->password),
            'role' => $this->role,
        ]);

        $this->reset();
        $this->emit('createNewUser', 'Success create new account');
    }
}
