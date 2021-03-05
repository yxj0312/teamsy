<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ManageUsers extends Component
{
    public $showModal = false;

    // public function showModal()
    // {
    //     $this->showModal = true;
    // }

    public function render()
    {
        return view('livewire.manage-users');
    }

    public function handle()
    {
        dd('delete user');
    }
}
