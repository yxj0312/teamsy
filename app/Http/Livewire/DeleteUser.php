<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteUser extends Component
{
    public $showModal = false;

    // public function showModal()
    // {
    //     $this->showModal = true;
    // }

    public function render()
    {
        return view('livewire.delete-user');
    }
}
