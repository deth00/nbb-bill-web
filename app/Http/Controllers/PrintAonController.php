<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintAonController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'ທະນາຄານ ນະໂຍບາຍ',
        ]; 
        $customPaper = [0, 0, 368.50, 581.10];

        $pdfs = mb_convert_encoding(\View::make('livewire.bill.aon.pdf', $data), 'HTML-ENTITIES', 'UTF-8');

        return PDF::loadHtml($pdfs)->setPaper('A4', 'portrait')->stream('ໃບໂອນ.pdf',array('Attachment'=>0));
    }
}
