<?php

namespace App\Livewire;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowNotes extends Component
{
    public function render()
    {
        return view('livewire.pages.notes.show-notes', [
            'notes' => Auth::user()->notes,

        ])->layout('layouts.app');
    }

    public function delete(Note $note)
    {
        $note->delete();
    }
}
