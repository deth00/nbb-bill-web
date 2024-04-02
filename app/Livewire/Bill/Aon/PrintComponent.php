<?php

namespace App\Livewire\Bill\Aon;

use Livewire\Component;
use App\Models\BhaiaonInside;

class PrintComponent extends Component
{
    public $hidId;
    public function mount($id){
        $this->hidId = $id;
    }

    public function render()
    {
        $data = BhaiaonInside::find($this->hidId);
        return view('livewire.bill.aon.print-component',compact('data'));
    }
}
