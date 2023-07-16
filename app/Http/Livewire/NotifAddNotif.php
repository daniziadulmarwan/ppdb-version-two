<?php

namespace App\Http\Livewire;

use App\Models\Notif;
use App\Models\User;
use Livewire\Component;

class NotifAddNotif extends Component
{
    public $text;
    public $ids;

    protected $rules = [
        'ids' => 'required',
        'text' => 'required'
    ];

    public function render()
    {
        return view('livewire.notif-add-notif', [
            'data' => User::select('id', 'name')->where('role', '!=', 'admin')->get(),
            'notif' => Notif::whereRelation('user', 'role', '!=', 'admin')->get()
        ]);
    }

    public function save()
    {
        $this->validate();

        foreach ($this->ids as $id) {
            Notif::create([
                'user_id' => $id,
                'text' => $this->text
            ]);
        }

        return redirect('/admin/notif');
    }
}
