<?php

namespace App\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditUser extends Component
{
    public User $user;

    #[Rule('required')]
    public $name = '';

    #[Rule('required')]
    public $userRoles = [];

    public function mount(User $user)
    {
        $this->user = $user;

        $this->name  = $user->name;
        $this->userRoles = $user->roles()->getPivotColumns();
    }

    public function save()
    {
        $values = array_map('intval', $this->userRoles);
        $this->user->roles()->sync($values);

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
