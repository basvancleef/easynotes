<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public function render()
    {
        return view('livewire.pages.users.show-users', [
            'users' => User::all(),

        ])->layout('layouts.app');
    }

    public function delete(User $user)
    {
        $user->delete();
    }
}
