<?php

namespace App\Http\Livewire;

use App\Models\Notif;
use Livewire\Component;

class NotifList extends Component
{
    public $total;
    public $lists = [];

    protected $listeners = [
        'notifReaded' => 'mount'
    ];

    public function render()
    {
        return view('livewire.notif-list');
    }

    public function mount()
    {
        $this->total = Notif::where('user_id', auth()->user()->id)->where('seen_by_user', 'no')->count();
        $this->lists = Notif::where('user_id', auth()->user()->id)->latest()->get();
    }

    public function read($id)
    {
        $notif = Notif::find($id);
        if ($notif->seen_by_user == 'no') {
            $notif->seen_by_user = 'yes';
            $notif->save();
        }
        $this->emit('notifReaded');
    }
}
