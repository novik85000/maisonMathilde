<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Compteur extends Component
{
    public $number;
    public $testText;

    public function render()
    {
        return view('livewire.compteur');
    }

    public function mount()
    {
        $this->number = 0;
        $this->testText = "text";
    }

    public function sum()
    {
        $this->number++;
    }

    public function save()
    {
        dd($this->testText);
    }

}
