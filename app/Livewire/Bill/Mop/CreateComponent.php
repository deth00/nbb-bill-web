<?php

namespace App\Livewire\Bill\Mop;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\NumberToStringController;

class CreateComponent extends Component
{
    public $hiddenId;
    public $hideText = 'none', $check;
    public $searchCus = '0508099576', $data_search1, $data_serach2, $data_serach_cus, $data_search_cus_acno;
    public $name_mop, $tel, $address, $acno_fak;
    public $money, $money_name, $crc = 'LAK';
    public $san, $has, $sow, $sip, $har, $sng, $nug, $hal;
    public $san2, $has2, $sow2, $sip2, $har2, $sng2, $nug2, $hal2;
    public $name_hub, $address_hub, $tel_hub, $card_no, $card_type, $branch_name, $unit, $acno_hub, $bank_name, $bank_no, $money_fees, $lek_ac;

    public function render()
    {
        if($this->check == 'true'){
            $this->hideText = 'show';
        }else{
            $this->hideText = 'none';
        }
        return view('livewire.bill.mop.create-component');
    }

    public function searchCusData(){

        $this->data_search1 = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJyZXN1bHQiOnsiYXV0aF9pZCI6NSwiYXV0aF9uYW1lIjoibmJiIiwiYXV0aF9wYXNzIjoiJDJiJDEwJHptUWltdTBCOHI2UmRBWHI5OEc1ZWVwVWJ0a0djVk5SZFdqbGRLMS5vWnUzQTRGSEJFaVRxIiwiYXV0aF9zdGFydCI6IjIwMjMtMDktMTRUMDY6MDk6MDQuMDAwWiJ9LCJpYXQiOjE3MTU1NzI5NzQsImV4cCI6MTcyMzM0ODk3NH0.Qeu30YegewTKnyjyurywbjyCzi8e9SmTtxjddiVhHJw')
        ->post('192.168.10.55:6604/nbb/api/ctm/get/info', [
            "auth_id" => "5",
            "auth_name" => "nbb",
            "ctmcode" => $this->searchCus
        ])->json();

        $this->data_search2 = Http::withToken('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJyZXN1bHQiOnsiYXV0aF9pZCI6NSwiYXV0aF9uYW1lIjoibmJiIiwiYXV0aF9wYXNzIjoiJDJiJDEwJHptUWltdTBCOHI2UmRBWHI5OEc1ZWVwVWJ0a0djVk5SZFdqbGRLMS5vWnUzQTRGSEJFaVRxIiwiYXV0aF9zdGFydCI6IjIwMjMtMDktMTRUMDY6MDk6MDQuMDAwWiJ9LCJpYXQiOjE3MTU1NzI5NzQsImV4cCI6MTcyMzM0ODk3NH0.Qeu30YegewTKnyjyurywbjyCzi8e9SmTtxjddiVhHJw')
        ->post('192.168.10.55:6604/nbb/api/ctm/get/credit', [
            "auth_id" => "5",
            "auth_name" => "nbb",
            "ctmcode" => $this->searchCus
        ])->json();

        $this->name_mop = $this->data_search1['fullname'];
        $this->tel = $this->data_search1['mphone']['HP'];
        $this->address = $this->data_search1['address'];
        $this->acno_fak = $this->data_search2['0']['acno'];
        $this->dispatch('alert', type: 'success', message: 'ຄົ້ນຫາສຳເລັດ');
        // dd($this->data_search1);

    }

    public function addAon(){
        if($this->check == true){
            $this->hideText = 'show';
        }else{
            $this->hideText = 'none';
        }
    }

    public function addMoney(){
        $this->dispatch('show-addmoney');
    }

    public function storeMoney(){
        if(!empty($this->san) || !empty($this->has) || !empty($this->sow) || !empty($this->sip) || !empty($this->har) || !empty($this->sng) || !empty($this->nug) || !empty($this->hal)){
            $sans = 0; $hass = 0; $sows = 0; $sips = 0; $hars = 0; $sngs = 0; $nugs = 0; $hals = 0;

            if(!empty($this->san)){
                $sum = str_replace(',', '', $this->san);
                if (intval($sum)) {
                    $sans = $sum;
                    $this->san2 = $sum;
                }else{
                    $this->emit('alert', ['type' => 'warning', 'message' => 'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!']);
                }
            }else{ //------------------------------- 100.0000 -------------------------------//
                $sans = 0;
            }
    
            if(!empty($this->has)){
                $sum = str_replace(',', '', $this->has);
                if (intval($sum)) {
                    $hass = $sum;
                    $this->has2 = $sum;
                }else{
                    $this->emit('alert', ['type' => 'warning', 'message' => 'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!']);
                }
            }else{
                $hass = 0;
            }
    
            if(!empty($this->sow)){
                $sum = str_replace(',', '', $this->sow);
                if (intval($sum)) {
                    $sows = $sum;
                    $this->sow2 = $sum;
                }else{
                    $this->emit('alert', ['type' => 'warning', 'message' => 'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!']);
                }
            }else{
                $sows = 0;
            }
    
            if(!empty($this->sip)){
                $sum = str_replace(',', '', $this->sip);
                if (intval($sum)) {
                    $sips = $sum;
                    $this->sip2 = $sum;
                }else{
                    $this->emit('alert', ['type' => 'warning', 'message' => 'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!']);
                }
            }else{
                $sips = 0;
            }
    
            if(!empty($this->har)){
                $sum = str_replace(',', '', $this->har);
                if (intval($sum)) {
                    $hars = $sum;
                    $this->har2 = $sum;
                }else{
                    $this->emit('alert', ['type' => 'warning', 'message' => 'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!']);
                }
            }else{
                $hars = 0;
            }
    
            if(!empty($this->sng)){
                $sum = str_replace(',', '', $this->sng);
                if (intval($sng)) {
                    $sngs = $sum;
                    $this->sng2 = $sum;
                }else{
                    $this->emit('alert', ['type' => 'warning', 'message' => 'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!']);
                }
            }else{
                $sngs = 0;
            }
    
            if(!empty($this->nug)){
                $sum = str_replace(',', '', $this->nug);
                if (intval($sum)) {
                    $nugs = $sum;
                    $this->nug2 = $sum;
                }else{
                    $this->emit('alert', ['type' => 'warning', 'message' => 'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!']);
                }
            }else{
                $nugs = 0;
            }
    
            if(!empty($this->hal)){
                $sum = str_replace(',', '', $this->hal);
                if (intval($sum)) {
                    $hals = $sum;
                    $this->hal2 = $sum;
                }else{
                    $this->emit('alert', ['type' => 'warning', 'message' => 'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!']);
                }
            }else{
                $hals = 0;
            }
    
            $this->money = $sans + $hass + $sows + $sips + $hars + $sngs + $nugs + $hals;
    
            $translate = new NumberToStringController();
            $result = $translate->convert($this->money);
            $this->money_name = $result;
    
            $this->dispatch('hide-addmoney');
            $this->dispatch('alert', type: 'success', message: 'ບັນທຶກຈຳນວນເງິນສຳເລັດ');
        }else{
            $this->dispatch('alert', type: 'error', message: 'ກະລຸນາເພີ່ມຈຳນວນເງິນກ່ອນ');
        }
    }
}
