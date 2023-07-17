<?php

namespace App\Http\Livewire\Setting;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $editId;

    public $nameEdit;
    public $usernameEdit;
    public $passwordEdit;
    public $confirm_passwordEdit;
    public $roleEdit;

    protected $listeners = ['getSettingEditId' => 'edit'];

    public function render()
    {
        return view('livewire.setting.edit-user');
    }

    public function edit($id)
    {
        $this->editId = $id;
        $data = User::find($id);

        $this->nameEdit = $data->name;
        $this->usernameEdit = $data->username;
        $this->roleEdit = $data->role;
    }

    public function update()
    {
        $data = User::find($this->editId);

        if ($this->passwordEdit == null) {
            $data->name = $this->nameEdit;
            $data->username = $this->usernameEdit;
            $data->role = $this->roleEdit;
            $data->save();
            $this->emit('userUpdated');
        } else {
            $data->name = $this->nameEdit;
            $data->username = $this->usernameEdit;
            $data->password = bcrypt($this->passwordEdit);
            $data->password_text = $this->passwordEdit;
            $data->role = $this->roleEdit;
            $data->save();
            $this->emit('userUpdated');
        }
    }
}
