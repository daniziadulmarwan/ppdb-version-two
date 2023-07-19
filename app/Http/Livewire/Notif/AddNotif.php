<?php

namespace App\Http\Livewire\Notif;

use App\Models\Notif;
use Livewire\Component;

class AddNotif extends Component
{
    public $text;
    public $ids;

    protected $rules = [
        'ids' => 'required',
        'text' => 'required'
    ];

    public function render()
    {
        return view('livewire.notif.add-notif');
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
