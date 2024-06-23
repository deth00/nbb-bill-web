<?php

namespace App\Livewire\Bill\Mop;

use Livewire\Component;
use App\Models\BhaiMorp;

class PrintComponent extends Component
{
    public $hidId;
    public function mount($id){
        $this->hidId = $id;
    }

    public function render()
    {
        $data = BhaiMorp::find($this->hidId);
        return view('livewire.bill.mop.print-component',compact('data'));
    }
}
