<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public $deleteUserModal = false;

    // public function showModal()
    // {
    //     $this->showModal = true;
    // }

    public function render()
    {
        return view('livewire.manage-users');
    }

    public function deleteUser(User $user)
    {
        $user->delete();
    }
}
