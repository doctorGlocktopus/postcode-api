<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Zip;

$zip;
$input;
$code;
$name;

class Call extends Component
{
    public function mount() {
        $this->zip = Zip::all();
        $this->input = "";
        $this->code = "";
        $this->name = "";
    }
    public function render()
    {
        return view('livewire.call');
    }
}
