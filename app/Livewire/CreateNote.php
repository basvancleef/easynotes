<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateNote extends Component
{
    #[Rule('required')]
    public $title = '';

    #[Rule('required')]
    public $description = '';

    public function save()
    {
        $this->validate();

        Auth::user()->notes()->create(
            $this->only(['title', 'description'])
        );

        return redirect()->to('/notes');
    }

    public function render()
    {
        return view('livewire.pages.notes.create-note')
            ->layout('layouts.app');
    }
}

