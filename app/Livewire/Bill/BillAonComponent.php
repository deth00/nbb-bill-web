<?php

namespace App\Livewire\Bill;

use Livewire\Component;

class BillAonComponent extends Component
{
    public function render()
    {
        return view('livewire.bill.bill-aon-component');
    }

    public function print(){
        return redirect(route('print-aon'));
    }
}
