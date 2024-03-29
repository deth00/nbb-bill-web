<?php

namespace App\Livewire\Bill\Aon;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintComponent extends Component
{
    public function render()
    {
        return view('livewire.bill.aon.print-component');
    }

    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
        ]; 
        $customPaper = [0, 0, 368.50, 581.10];
        $pdf = PDF::loadView('livewire.bill.aon.pdf',$data)
                    ->setPaper($customPaper, 'portrait');
        return $pdf->download('itsolutionstuff.pdf');
    }
}
