<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class NotifAddNotif extends Component
{
    public $userToNotif = [];
    public $text;

    public $dataUsers = [];

    public function render()
    {
        return view('livewire.notif-add-notif');
    }

    public function mount()
    {
        $this->dataUsers = User::select('id', 'name')->get();
    }

    public function submit()
    {
        dd($this->userToNotif);
    }
}
