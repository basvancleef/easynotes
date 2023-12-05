<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditNote extends Component
{
    public Note $note;

    #[Rule('required')]
    public $title = '';

    #[Rule('required')]
    public $description = '';

    public function mount(Note $note)
    {
        $this->note         = $note;
        $this->title        = $note->title;
        $this->description  = $note->description;
    }

    public function save()
    {
        $this->note->update(
            $this->all()
        );
        return redirect()->to('/notes');
    }

    public function render()
    {
        return view('livewire.pages.notes.edit-note')->layout('layouts.app');
    }
}
