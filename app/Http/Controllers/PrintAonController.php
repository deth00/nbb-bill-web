<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BhaiaonInside;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintAonController extends Controller
{
    public function generatePDF($id)
    {
        $data = BhaiaonInside::find($id); 
        // $customPaper = [0, 0, 368.50, 581.10];

        $pdfs = mb_convert_encoding(\View::make('livewire.bill.aon.pdf', ['data'=>$data]), 'HTML-ENTITIES', 'UTF-8');

        return PDF::loadHtml($pdfs)->setPaper('A4', 'portrait')->stream('ໃບໂອນ.pdf',array('Attachment'=>0));
    }
}
