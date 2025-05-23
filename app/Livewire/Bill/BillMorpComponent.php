<?php

namespace App\Livewire\Bill;

use Livewire\Component;
use App\Models\BhaiMorp;

class BillMorpComponent extends Component
{
    public $data, $count;
    public $search, $dataQ = 15, $dateS, $dateE;
    public $hiddenId, $name, $money, $note;


    public function render()
    {
        $this->data = BhaiMorp::whereAny(['no', 'name_mop', 'tel', 'acno_fak', 'name_hub', 'tel_hub', 'acno_hub'], 'LIKE', '%' . $this->search . '%')->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->limit($this->dataQ)->get();
        $this->count = count(BhaiMorp::whereAny(['no', 'name_mop', 'tel', 'acno_fak', 'name_hub', 'tel_hub', 'acno_hub'], 'LIKE', '%' . $this->search . '%')->where('user_id', auth()->user()->id)->limit($this->dataQ)->get());
        return view('livewire.bill.bill-morp-component');
    }

    public function searchData()
    {
        if (!empty($this->dateS)) {
            if ($this->search) {
                $this->data = BhaiMorp::whereAny(['no', 'name_mop', 'tel', 'acno_fak', 'name_hub', 'tel_hub', 'acno_hub'], 'LIKE', '%' . $this->search . '%')->where('valuedt', 'like', '%' . $this->date . '%')->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->limit($this->dataQ)->get();
                $this->count = count(BhaiMorp::whereAny(['no', 'name_mop', 'tel', 'acno_fak', 'name_hub', 'tel_hub', 'acno_hub'], 'LIKE', '%' . $this->search . '%')->where('valuedt', 'like', '%' . $this->date . '%')->where('user_id', auth()->user()->id)->limit($this->dataQ)->get());
            } else {
                $this->data = BhaiMorp::where('valuedt', 'like', '%' . $this->date . '%')->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->limit($this->dataQ)->get();
                $this->count = count(BhaiMorp::where('valuedt', 'like', '%' . $this->date . '%')->where('user_id', auth()->user()->id)->limit($this->dataQ)->get());
            }
        } else {
            $this->data = BhaiMorp::whereAny(['no', 'name_mop', 'tel', 'acno_fak', 'name_hub', 'tel_hub', 'acno_hub'], 'LIKE', '%' . $this->search . '%')->where('user_id', auth()->user()->id)->orderBy('id', 'desc')->limit($this->dataQ)->get();
            $this->count = count(BhaiMorp::whereAny(['no', 'name_mop', 'tel', 'acno_fak', 'name_hub', 'tel_hub', 'acno_hub'], 'LIKE', '%' . $this->search . '%')->where('user_id', auth()->user()->id)->limit($this->dataQ)->get());
        }
    }

    public function delete($ids)
    {
        $this->hiddenId = $ids;
        $this->dispatch('show-modal-delete');
    }

    public function destroy()
    {
        $doc = BhaiMorp::find($this->hiddenId);
        $doc->del = 0;
        $doc->save();
        $this->dispatch('hide-modal-delete');
        $this->dispatch('alert', type: 'success', message: 'ລົບຂໍ້ມູສຳເລັດ');
    }

    public function showAP($ids)
    {
        $this->dispatch('show-modal-ap');
        $this->hiddenId = $ids;
        $doc = BhaiMorp::find($this->hiddenId);
        $this->name = $doc->name_mop;
        $this->money = $doc->money;
        // $this->note = $doc->note;
    }

    public function approve()
    {
        // dd($this->hiddenId);
        $doc = BhaiMorp::find($this->hiddenId);
        $doc->status = 'FAP';
        $doc->del = 4;
        $doc->save();
        $this->dispatch('hide-modal-ap');
        $this->dispatch('alert', type: 'success', message: 'ອະນຸມັດສຳເລັດ');
    }
}
