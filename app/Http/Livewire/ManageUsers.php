<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public $showDeleteUserModal = false;

    // public function showModal()
    // {
    //     $this->showModal = true;
    // }

    public function render()
    {
        return view('livewire.manage-users')
            ->with('users', User::all());
    }

    public function deleteUser(User $user)
    {
        dd('123');
        $user->delete();
    }
}
