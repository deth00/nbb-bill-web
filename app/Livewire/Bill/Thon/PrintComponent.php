<?php

namespace App\Livewire\Bill\Thon;

use Livewire\Component;
use App\Models\BhaiThon;

class PrintComponent extends Component
{
    public $hidId;
    public function mount($id){
        $this->hidId = $id;
    }

    public function render()
    {
        $data = BhaiThon::find($this->hidId);
        return view('livewire.bill.thon.print-component',compact('data'));
    }
}
