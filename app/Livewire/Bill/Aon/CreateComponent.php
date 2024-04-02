<?php

namespace App\Livewire\Bill\Aon;

use Livewire\Component;

class CreateComponent extends Component
{
    public $money, $money_name;

    public function render()
    {
        return view('livewire.bill.aon.create-component');
    }

    public function generate(){
        if(!empty($this->money)){
            $moneys = str_replace(',', '', $this->money);
            if (intval($moneys)) {
                $this->money_name = $this->convert($moneys);
            }else{
                $this->dispatch('alert',type: 'error', message:'ກະລຸນາປ້ອນຈຳນວນເງິນເປັນຕົວເລກ!');
            }
        }else{
            $this->money_name = null;
        }
    }


    public function convert($moneys){
        $numbers = $moneys;
        $digit=array('','ໜຶ່ງ','ສອງ','ສາມ','ສີ່','ຫ້າ','ຫົກ','ເຈັດ','ແປດ','ເກົ້າ','ສິບ');
        $num=array('','ສິບ','ຮ້ອຍ','ພັນ','ສິບ','ແສນ','ລ້ານ','ສິບ','ຮ້ອຍ','ຕື້','ສິບ','ຮ້ອຍຕື້','ພັນ','ສິບ','ຮ້ອຍ');
        $number = explode(".",$numbers);
        $count = count($number);
        $convert='';
        $c_num[0]=$len=strlen($number[0]);
        $minus_len = 0;
        $minus = [];
        //ຄິດໄລ່ຈຳນວນເຕັມ
        for($n=0;$n< $len;$n++){
            $c_num[0]--;
            $c = $n;
            $c_digit=substr($number[0],$n,1);
            $c_digit2=substr($number[0],$c-1,1);
            $c_digit3=substr($number[0],$c+1,1);

            $minus_len = $len - $n;
            // dd($len-$n);
            if($c_num[0]==0 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
            if($c_num[0]==0 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
            if($c_num[0]==0 && $c_digit==2)$digit[$c_digit]='ສອງ';
            if($c_num[0]==1 && $c_digit==1)$digit[$c_digit]='';
            if($c_num[0]==1 && $c_digit==2)$digit[$c_digit]='ຊາວ';

            if($c_num[0]==2 && $c_digit==1)$digit[$c_digit]='ໜຶ່ງ';

            if($c_num[0]==3 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
            if($c_num[0]==3 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
            if($c_num[0]==4 && $c_digit==1)$digit[$c_digit]='';
            if($c_num[0]==4 && $c_digit==2)$digit[$c_digit]='ຊາວ';

            if($c_num[0]==5 && $c_digit==1)$digit[$c_digit]='ໜຶ່ງ';

            if($c_num[0]==6 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
            if($c_num[0]==6 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
            if($c_num[0]==7 && $c_digit==1)$digit[$c_digit]='';
            if($c_num[0]==7 && $c_digit==2)$digit[$c_digit]='ຊາວ';

            if($c_num[0]==8 && $c_digit==1)$digit[$c_digit]='ໜຶ່ງ';

            if($c_num[0]==9 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
            if($c_num[0]==9 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
            if($c_num[0]==10 && $c_digit==1)$digit[$c_digit]='';
            if($c_num[0]==10 && $c_digit==2)$digit[$c_digit]='ຊາວ';

            if($c_num[0]==11 && $c_digit==1)$digit[$c_digit]='ໜຶ່ງ';

            if($c_num[0]==12 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
            if($c_num[0]==12 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
            if($c_num[0]==13 && $c_digit==1)$digit[$c_digit]='';
            if($c_num[0]==13 && $c_digit==2)$digit[$c_digit]='ຊາວ';

            $convert.=$digit[$c_digit];

            // if($minus_len < 11)$convert.=$num[$c_num[0]];
 
            if($digit[$c_digit] != 'ຊາວ' && $c_digit!=0){
                $convert.=$num[$c_num[0]];
            }
        }

        if($count == 1){
            $convert .= 'ກິບ';
            $convert .= 'ຖ້ວນ';
        }
        if($count > 1){
            $c_num[1]=$len2=strlen($number[1]);
            //ຄິດໄລ່ຈຸດທົດສະນິຍົມ
            for($n=0;$n< $len2;$n++){
                $c_num[1]--;
                $c_digit=substr($number[1],$n,1);
                $c_digit2=substr($number[1],$n-1,1);
                
                if($c_num[1]==1)$convert .= 'ຈຸດ';
                if($c_num[1]==0 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
                if($c_num[1]==0 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
                if($c_num[1]==0 && $c_digit==2)$digit[$c_digit]='ສອງ';
                if($c_num[1]==1 && $c_digit==2)$digit[$c_digit]='ຊາວ';
                if($c_num[1]==1 && $c_digit==1)$digit[$c_digit]='';
                
                $convert.=$digit[$c_digit];
                // dd($c_num[1]);
                if($digit[$c_digit] != 'ຊາວ' && $c_digit!=0)$convert.=$num[$c_num[1]];
            }
            if($number[1]!='')$convert .= 'ອັດ';
        }
        return $convert;
    }

}
