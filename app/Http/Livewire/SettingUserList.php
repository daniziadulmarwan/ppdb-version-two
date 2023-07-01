<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class SettingUserList extends Component
{
    public $data = [];

    protected $listeners = [
        'createNewUser' => 'mount',
        'destroyUserData' => 'destroy',
        'destroyDataUser' => 'mount'
    ];

    public function render()
    {
        return view('livewire.setting-user-list');
    }

    public function mount()
    {
        $this->data = User::select('id', 'name', 'username', 'password_text', 'role')->get();
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $this->emit('destroyDataUser');
    }
}
