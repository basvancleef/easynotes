<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public User $user;

    #[Rule('required')]
    public $name = '';

    #[Rule('required')]
    public $roles = [];

    public function mount(User $user)
    {
        $this->user = $user;

        $this->name  = $user->name;
        $this->roles = $user->roles()->get();
    }

    public function save()
    {
        $this->user->roles()->sync($this->roles);

        $this->user->update(
            $this->all()
        );

        return redirect()->to('/users');
    }

    public function render()
    {
        return view('livewire.pages.users.edit-user', [
            'existingRoles' => Role::all(),
        ])->layout('layouts.app');
    }
}
