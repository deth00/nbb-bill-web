<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberToStringController extends Controller
{
    // public function convert($moneys){
    //     $numbers = $moneys;
    //     $digit=array('','ໜຶ່ງ','ສອງ','ສາມ','ສີ່','ຫ້າ','ຫົກ','ເຈັດ','ແປດ','ເກົ້າ','ສິບ');
    //     $num=array('','ສິບ','ຮ້ອຍ','ພັນ','ສິບ','ແສນ','ລ້ານ','ສິບ','ຮ້ອຍ','ຕື້','ສິບ','ຮ້ອຍ','ພັນ','ສິບ','ຮ້ອຍ');
    //     $number = explode(".",$numbers);
    //     $count = count($number);
    //     $convert='';
    //     $c_num[0]=$len=strlen($number[0]);
    //     $minus_len = 0;
    //     $minus = [];
    //     //ຄິດໄລ່ຈຳນວນເຕັມ
    //     for($n=0;$n< $len;$n++){
    //         $c_num[0]--;
    //         $c = $n;
    //         $c_digit=substr($number[0],$n,1);
    //         $c_digit2=substr($number[0],$c-1,1);
    //         // dd($c_num);
    //         // $c_digit3=substr($number[0],$c+1,1);

    //         // $c_digit20=substr($number[0],$n,2);
    //         // $minus_len = $len - $n;
    //         // dd(substr($number[0],$n,2));
    //         if($c_num[0]==0 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
    //         if($c_num[0]==0 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
    //         if($c_num[0]==0 && $c_digit==2)$digit[$c_digit]='ສອງ';
    //         if($c_num[0]==1 && $c_digit==1)$digit[$c_digit]='';
    //         if($c_num[0]==1 && $c_digit==2)$digit[$c_digit]='ຊາວ';


    //         if($c_num[0]==2 && $c_digit==1)$digit[$c_digit]='ໜຶ່ງ';

    //         if($c_num[0]==3 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
    //         if($c_num[0]==3 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
    //         if($c_num[0]==4 && $c_digit==1)$digit[$c_digit]='';
    //         if($c_num[0]==4 && $c_digit==2)$digit[$c_digit]='ຊາວ';

    //         if($c_num[0]==5 && $c_digit==1)$digit[$c_digit]='ໜຶ່ງ';

    //         if($c_num[0]==6 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
    //         if($c_num[0]==6 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
    //         if($c_num[0]==7 && $c_digit==1)$digit[$c_digit]='';
    //         if($c_num[0]==7 && $c_digit==2)$digit[$c_digit]='ຊາວ';

    //         if($c_num[0]==8 && $c_digit==1)$digit[$c_digit]='ໜຶ່ງ';

    //         if($c_num[0]==9 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
    //         if($c_num[0]==9 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
    //         if($c_num[0]==10 && $c_digit==1)$digit[$c_digit]='';
    //         if($c_num[0]==10 && $c_digit==2)$digit[$c_digit]='ຊາວ';

    //         if($c_num[0]==11 && $c_digit==1)$digit[$c_digit]='ໜຶ່ງ';

    //         if($c_num[0]==12 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
    //         if($c_num[0]==12 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
    //         if($c_num[0]==13 && $c_digit==1)$digit[$c_digit]='';
    //         if($c_num[0]==13 && $c_digit==2)$digit[$c_digit]='ຊາວ';

    //         $convert.=$digit[$c_digit];

    //         // if($len == 8 && $digit[$c_digit] != 'ຊາວ')  $convert .= 'ລ້ານ'; ;

    //         if($digit[$c_digit] != 'ຊາວ' && $c_digit!=0){
    //                 $convert.=$num[$c_num[0]];
    //         }
    //     }

    //     if($count == 1){
    //         $convert .= 'ກິບ';
    //         $convert .= 'ຖ້ວນ';
    //     }
    //     if($count > 1){
    //         $c_num[1]=$len2=strlen($number[1]);
    //         //ຄິດໄລ່ຈຸດທົດສະນິຍົມ
    //         for($n=0;$n< $len2;$n++){
    //             $c_num[1]--;
    //             $c_digit=substr($number[1],$n,1);
    //             $c_digit2=substr($number[1],$n-1,1);

    //             if($c_num[1]==1)$convert .= 'ຈຸດ';
    //             if($c_num[1]==0 && $c_digit==1 && $c_digit2!=0)$digit[$c_digit]='ເອັດ';
    //             if($c_num[1]==0 && $c_digit==1 && $c_digit2==0)$digit[$c_digit]='ໜຶ່ງ';
    //             if($c_num[1]==0 && $c_digit==2)$digit[$c_digit]='ສອງ';
    //             if($c_num[1]==1 && $c_digit==2)$digit[$c_digit]='ຊາວ';
    //             if($c_num[1]==1 && $c_digit==1)$digit[$c_digit]='';

    //             $convert.=$digit[$c_digit];
    //             // dd($c_num[1]);
    //             if($digit[$c_digit] != 'ຊາວ' && $c_digit!=0)$convert.=$num[$c_num[1]];
    //         }
    //         if($number[1]!='')$convert .= 'ອັດ';
    //     }
    //     return $convert;
    // }

    public function convert($moneys)
    {
        $laoNumbers = [
            0 => "ສູນ",
            1 => "ໜຶ່ງ",
            2 => "ສອງ",
            3 => "ສາມ",
            4 => "ສີ່",
            5 => "ຫ້າ",
            6 => "ຫົກ",
            7 => "ເຈັດ",
            8 => "ແປດ",
            9 => "ເກົ້າ"
        ];
        $units = ['', 'ສິບ', 'ຮ້ອຍ', 'ພັນ', 'ສິບ', 'ແສນ', 'ລ້ານ', 'ສິບ', 'ຮ້ອຍ', 'ຕື້', 'ສິບ', 'ຮ້ອຍ', 'ພັນ', 'ສິບ', 'ຮ້ອຍ'];

        // Convert European number format to standard format
        $number = str_replace('.', '', $moneys);  // Remove thousands separator
        $number = str_replace(',', '.', $number);  // Replace decimal separator

        // Check if it's a valid number
        if (!is_numeric($number)) {
            return "ຂໍ້ມູນຜິດພາດ";
        }

        // Split integer and decimal parts
        $parts = explode('.', $number);
        $integerPart = intval($parts[0]);
        $decimalPart = isset($parts[1]) ? intval($parts[1]) : null;

        // Function to convert integer to Lao text
        function convertIntegerToLao($num, $laoNumbers, $units)
        {
            if ($num == 0) return $laoNumbers[0];

            $numStr = strval($num);
            $length = strlen($numStr);
            $result = "";
            for ($i = 0; $i < $length; $i++) {
                $digit = intval($numStr[$i]);
                $digit2 = intval($numStr[$i - 1]);
                // dd($digit,$digit2);
                $position = $length - $i - 1;
                // dd($position);
                if ($digit != 0) {
                    if ($position == 1 && $digit == 1) {
                        if ($position == 1 && $digit == 1 && $digit2 == 1) {
                            $laoNumbers[$digit] = 'ເອັດ';
                        }
                        $result .= "ສິບ";
                    } elseif ($position == 1 && $digit == 2) {
                        if ($position == 1 && $digit == 2 && $digit2 == 1) {
                            $laoNumbers[$digit2] = 'ເອັດ';
                        }
                        $result .= "ຊາວ";
                    } else {
                        $result .= $laoNumbers[$digit] . $units[$position];
                    }
                }
            }
            // dd($result);
            return trim($result);
        }

        // Convert integer part
        $integerText = convertIntegerToLao($integerPart, $laoNumbers, $units);

        // Convert decimal part if exists
        if ($decimalPart !== null) {
            $decimalText = convertIntegerToLao($decimalPart, $laoNumbers, [""]);
            return $integerText . " ຈຸດ " . $decimalText;
        }

        return $integerText;
    }
}
