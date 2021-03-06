<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public $showDeleteUserModal = false;

    public User $currentUser;

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
        $user->delete();
    }

    public function confirmDelete(User $user)
    {
        $this->currentUser = $user;

        $this->showDeleteUserModal = true;
    }

    public function mount()
    {
        $this->currentUser = new User();
    }
}
