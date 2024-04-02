<?php

namespace App\Livewire\Bill;

use Livewire\Component;
use App\Models\BhaiaonInside;

class BillAonComponent extends Component
{
    public $bhaiaon, $count;
    public $search, $dataQ = 15, $dateS, $dateE;

    public function render()
    {
        $this->bhaiaon = BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->get();
        $this->count = count(BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get());
        return view('livewire.bill.bill-aon-component');
    }

    public function searchData(){
        if(!empty($this->dateS)){
            if($this->search){
                $this->bhaiaon = BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->where('valuedt',$this->date)->orderBy('id','desc')->limit($this->dataQ)->get();
                $this->count = count(BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->where('valuedt',$this->date)->orderBy('id','desc')->limit($this->dataQ)->get());
            }else{
                $this->bhaiaon = BhaiaonInside::where('valuedt','like','%'.$this->date.'%')->orderBy('id','desc')->limit($this->dataQ)->get();
                $this->count = count(BhaiaonInside::where('valuedt','like','%'.$this->date.'%')->orderBy('id','desc')->limit($this->dataQ)->get());
            }
        }else{
            $this->bhaiaon = BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->get();
            $this->count = count(BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get());
        }
    }
}
