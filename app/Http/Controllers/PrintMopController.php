<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BhaiMorp;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintMopController extends Controller
{
    public function generatePDF($id)
    {
        $data = BhaiMorp::find($id); 
        $data->del = 2;
        $data->save();
        $pdfs = mb_convert_encoding(\View::make('livewire.bill.mop.pdf', ['data'=>$data]), 'HTML-ENTITIES', 'UTF-8');
        return PDF::loadHtml($pdfs)->setPaper('A4', 'portrait')->stream('ໃບມອບເງິນສົດ.pdf',array('Attachment'=>0));
        
    }
}
