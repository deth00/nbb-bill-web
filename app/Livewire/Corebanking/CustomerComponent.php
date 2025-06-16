<?php

namespace App\Livewire\Corebanking;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CustomerComponent extends Component
{
    public $show ="none";
    public $branch_id, $start, $end;
    public $data = [], $data_cus_info = [];
    public $sel_cus = [];
    public $data2;
    
    public $selected = false;
    public $selectedIds = [];

    public function mount(){
        $this->start = date('Y-m-d');  $this->end = date('Y-m-d');
    }

    public function render()
    {
        return view('livewire.corebanking.customer-component');
    }

    public function processMark()
    {
        if ($this->checked) {
            $this->mark();
        } else {
            $this->unMark();
        }

    }

    public function searchData(){
        // dd(date('m-d-Y',strtotime($this->start)), date('m-d-Y',strtotime($this->end)));
        $this->validate([
            'start'=>'required',
            'end'=>'required',
        ],[
            'start.required'=>'ກະລຸນາເລືອກ ວັນທີເລີ່ມຕົ້ນ ກ່ອນ!',
            'end.required'=>'ກະລຸນາປເລືອກ ວັນທີສິ້ນສຸດ ກ່ອນ!',
        ]);

        $this->show = 'show';
        $response = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJyZXN1bHQiOnsiYXV0aF9pZCI6NSwiYXV0aF9uYW1lIjoibmJiIiwiYXV0aF9wYXNzIjoiJDJiJDEwJHptUWltdTBCOHI2UmRBWHI5OEc1ZWVwVWJ0a0djVk5SZFdqbGRLMS5vWnUzQTRGSEJFaVRxIiwiYXV0aF9zdGFydCI6IjIwMjMtMDktMTRUMDY6MDk6MDQuMDAwWiJ9LCJpYXQiOjE3NDc4MTcwOTgsImV4cCI6MTc2MzgwMTA5OH0.HQzHZtQbSjhLkMNBFp0b0ffRYln9aRv9LEKIWv1Jsx0')
            ->post('192.168.10.55:6601/nbb/api/crd/get-schedule', [
            "auth_id" => 5,
            "auth_name" => "nbb",
            "branchid" => "0301",
            "fromDate" => "05-11-2025",
            "toDate" => "06-11-2025"
            ])->json();
            // dd($response);
        if ($response['success'] == '1') {
            $this->data = $response;
        } else {
            $this->dispatch('alert', type: 'error', message: 'ບໍ່ສາມາດເຊື່ອມຕໍ່ API ໄດ້');
            $this->data = [];
        }
    }

    public function showPrint(){
        // dd($this->selectedIds);
        // $this->data2 = $this->sel_cus[0];
    }
}
