<?php

namespace App\Livewire\Bill;

use Livewire\Component;
use App\Models\BhaiaonInside;

class BillAonComponent extends Component
{
    public $bhaiaon, $count;
    public $search, $dataQ = 15, $date, $dateS, $dateE;
    public $hiddenId;

    public function render()
    {
        $this->bhaiaon = BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->get();
        $this->count = count(BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get());
        return view('livewire.bill.bill-aon-component');
    }

    public function dataQS(){
        $this->bhaiaon = BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->get();
        $this->count = count(BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get());
    }

    public function searchData(){
        if(!empty($this->dateS)){
            if($this->search){
                $this->bhaiaon = BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->where('valuedt',$this->date)->orderBy('id','desc')->limit($this->dataQ)->get();
                $this->count = count(BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->where('valuedt',$this->date)->orderBy('id','desc')->limit($this->dataQ)->get());
            }else{
                $this->bhaiaon = BhaiaonInside::where('valuedt',$this->date)->orderBy('id','desc')->limit($this->dataQ)->get();
                $this->count = count(BhaiaonInside::where('valuedt',$this->date)->orderBy('id','desc')->limit($this->dataQ)->get());
            }
        }else{
            $this->bhaiaon = BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->orderBy('id','desc')->limit($this->dataQ)->get();
            $this->count = count(BhaiaonInside::whereAny(['no','branch_send','name_aon'],'LIKE','%'.$this->search.'%')->limit($this->dataQ)->get());
        }
    }

    public function delete($ids)
    {
        $this->hiddenId = $ids;
        $this->dispatch('show-modal-delete');
    }

    public function destroy()
    {
        $doc = BhaiaonInside::find($this->hiddenId);
        $doc->del = 0;
        $doc->save();
        $this->dispatch('hide-modal-delete');
        $this->dispatch('alert', type: 'success', message: 'ລົບຂໍ້ມູສຳເລັດ');

    }

}
