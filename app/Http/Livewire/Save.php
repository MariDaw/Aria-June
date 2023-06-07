<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;


class Save extends Component
{


    public function render()
    {
        return view('livewire.save');
    }

public $change = false;
    public $add = false;

    public $noAdd = false;

    public function clickFunction()
    {
        $this->change= true;
    }
    public function isAdd()
    {
        $this->add == false ? $this->add = true : $this->add = false;
    }
}
