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

    // public function convert($moneys)
    // {
    //     $laoNumbers = [
    //         0 => "ສູນ",
    //         1 => "ໜຶ່ງ",
    //         2 => "ສອງ",
    //         3 => "ສາມ",
    //         4 => "ສີ່",
    //         5 => "ຫ້າ",
    //         6 => "ຫົກ",
    //         7 => "ເຈັດ",
    //         8 => "ແປດ",
    //         9 => "ເກົ້າ"
    //     ];
    //     $units = ['', 'ສິບ', 'ຮ້ອຍ', 'ພັນ', 'ສິບ', 'ແສນ', 'ລ້ານ', 'ສິບ', 'ຮ້ອຍ', 'ຕື້', 'ສິບ', 'ຮ້ອຍ', 'ພັນ', 'ສິບ', 'ຮ້ອຍ'];

    //     // Convert European number format to standard format
    //     $number = str_replace('.', '', $moneys);  // Remove thousands separator
    //     $number = str_replace(',', '.', $number);  // Replace decimal separator

    //     // Check if it's a valid number
    //     if (!is_numeric($number)) {
    //         return "ຂໍ້ມູນຜິດພາດ";
    //     }

    //     // Split integer and decimal parts
    //     $parts = explode('.', $number);
    //     $integerPart = intval($parts[0]);
    //     $decimalPart = isset($parts[1]) ? intval($parts[1]) : null;

    //     // Function to convert integer to Lao text
    //     function convertIntegerToLao($num, $laoNumbers, $units)
    //     {
    //         if ($num == 0) return $laoNumbers[0];

    //         $numStr = strval($num);
    //         $length = strlen($numStr);
    //         $result = "";
    //         for ($i = 0; $i < $length; $i++) {
    //             $digit = intval($numStr[$i]);
    //             $position = $length - $i - 1;

    //             if ($digit != 0) {
    //                 // Special handling for ten-thousands (10,000-99,999)
    //                 if ($position == 4) {
    //                     if ($digit == 1) {
    //                         $result .= "ສິບ";
    //                     } elseif ($digit == 2) {
    //                         $result .= "ຊາວ";
    //                     } else {
    //                         $result .= $laoNumbers[$digit] . "ສິບ";
    //                     }
    //                     $result .= "ພັນ";
    //                     continue;
    //                 }

    //                 // Special handling for thousands (1,000-9,999)
    //                 if ($position == 3) {
    //                     // Special case for 1 following a ten (e.g., 11,000)
    //                     if ($digit == 1 && $i > 0 && $numStr[$i-1] == '1') {
    //                         $result .= "ເອັດພັນ";
    //                         continue;
    //                     }
    //                     $result .= $laoNumbers[$digit] . "ພັນ";
    //                     continue;
    //                 }

    //                 // Special cases for 1 in units position
    //                 if ($position == 0 && $digit == 1 && $i > 0) {
    //                     $result .= "ເອັດ";
    //                     continue;
    //                 }

    //                 // Special cases for 2 in tens position
    //                 if ($position == 1 && $digit == 2) {
    //                     $result .= "ຊາວ";
    //                     continue;
    //                 }

    //                 // Special cases for 1 in tens position
    //                 if ($position == 1 && $digit == 1) {
    //                     $result .= "ສິບ";
    //                     continue;
    //                 }

    //                 // Standard cases
    //                 $result .= $laoNumbers[$digit];

    //                 // Add unit if not zero position
    //                 if ($position > 0 && $position != 3 && $position != 4) {
    //                     $result .= $units[$position];
    //                 }
    //             }
    //         }
    //         // dd($result);
    //         return trim($result);
    //     }

    //     // Convert integer part
    //     $integerText = convertIntegerToLao($integerPart, $laoNumbers, $units);

    //     // Convert decimal part if exists
    //     if ($decimalPart !== null) {
    //         $decimalText = convertIntegerToLao($decimalPart, $laoNumbers, [""]);
    //         return $integerText . " ຈຸດ " . $decimalText;
    //     }

    //     return $integerText;
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
            9 => "ເກົ້າ",
            10 => "ເອັດ" // Special case for 1 in units position
        ];

        $units = [
            '',         // 0 (units)
            'ສິບ',      // 1 (tens)
            'ຮ້ອຍ',     // 2 (hundreds)
            'ພັນ',      // 3 (thousands)
            'ພັນ',      // 4 (ten thousands)
            'ແສນ',     // 5 (hundred thousands)
            'ລ້ານ',     // 6 (millions)
            'ລ້ານ',     // 7 (ten millions)
            'ລ້ານ',     // 8 (hundred millions)
            'ຕື້',      // 9 (billions)
            'ຕື້',      // 10 (ten billions)
            'ຕື້',      // 11 (hundred billions)
            'ພັນຕື້'   // 12 (trillions)
        ];

        // Convert European number format to standard format
        $number = str_replace('.', '', $moneys);  // Remove thousands separator
        $number = str_replace(',', '.', $number);  // Replace decimal separator

        // Check if it's a valid number
        if (!is_numeric($number)) {
            return "ຂໍ້ມູນຜິດພາດ";
        }

        // Split integer and decimal parts
        $parts = explode('.', $number);
        $integerPart = $parts[0];
        $decimalPart = isset($parts[1]) ? $parts[1] : null;

        // Function to convert integer to Lao text
        function convertIntegerToLao($num, $laoNumbers, $units)
        {
            if ($num == 0) return $laoNumbers[0];

            $numStr = ltrim($num, '0');
            $length = strlen($numStr);
            $result = "";
            // dd($length );
            // Handle numbers from 1,000,000,000,000 to 9,999,999,999,999
            if ($length == 13) {
                $trillions = $numStr[0]; // First digit (1-9)
                $remaining = substr($numStr, 1); // Remaining digits (1,000,000,000,000 to 9,999,999,999,999)

                // Handle trillions part
                $result .= $laoNumbers[$trillions] . "ພັນ";

                // Handle remaining digits
                if ($remaining != '000000000000') {
                    $result .= convertIntegerToLao($remaining, $laoNumbers, $units);
                }

                return $result;
            }

            // Handle numbers from 100,000,000,000 to 9,999,999,999,999
            if ($length == 12) {
                $hundredBillions = $numStr[0]; // First digit (1-9)
                $remaining = substr($numStr, 1); // Remaining digits (10,000,000,000 to 99,999,999,999)


                // Handle hundred-billions part
                $result .= $laoNumbers[$hundredBillions] . "ຮ້ອຍ";

                // Handle remaining digits
                if ($remaining != '00000000000') {
                    $result .= convertIntegerToLao($remaining, $laoNumbers, $units);
                }

                return $result;
            }

            if ($length == 11) {
                $tenBillions = $numStr[0]; // First digit (1-9)
                $remaining = substr($numStr, 1); // Remaining digits (10,000,000,000 to 99,999,999,999)

                // Handle hundred-billions part
                if ($tenBillions == '1') {
                    $result .= "ສິບ";
                } elseif ($tenBillions == '2') {
                    $result .= "ຊາວ";
                } else {
                    $result .= $laoNumbers[$tenBillions] . "ສິບ";
                }

                // Handle billions part
                $billions = $numStr[1]; // Second digit (0-9)
                if ($billions == '1') {
                    $result .= "ເອັດ";
                } elseif ($billions != '0') {
                    $result .= $laoNumbers[$billions];
                }

                $result .= "ຕື້";

                // Handle remaining digits
                $remaining = substr($numStr, 2);
                if ($remaining != '00000000000') {
                    $result .= convertIntegerToLao($remaining, $laoNumbers, $units);
                }

                return $result;
            }

            // // Handle numbers from 1,000,000,000 to 9,999,999,999
            if ($length == 10) {
                $billions = $numStr[0]; // First digit (1-9)
                $remaining = substr($numStr, 1); // Remaining digits (100,000,000 to 999,999,999)

                // Handle billions part
                $result .= $laoNumbers[$billions] . "ຕື້";

                // Handle remaining digits
                if ($remaining != '000000000') {
                    $result .= convertIntegerToLao($remaining, $laoNumbers, $units);
                }
                return $result;
            }

            // Handle numbers from 100,000,000 to 999,999,999
            if ($length == 9) {
                $hundredMillions = $numStr[0]; // First digit (1-9)
                $remaining = ltrim(substr($numStr, 1), '0'); // Remaining digits without leading zeros
                // dd($remaining);
                // Handle hundred-millions part
                $result .= $laoNumbers[$hundredMillions] . "ຮ້ອຍ";
                if (empty($remaining)) {
                    $result .= 'ລ້ານ';
                    # code...
                }

                // Handle remaining digits
                if ($remaining != '00000000') {
                    $result .= convertIntegerToLao($remaining, $laoNumbers, $units);
                } else {
                    $result .= 'ລ້ານ';
                }
                // dd($result);
                return $result;
            }

            // Handle numbers from 10,000,000 to 99,999,999
            // if ($length == 8) {
            //     $tenMillions = $numStr[0]; // First digit (1-9)
            //     $remaining = substr($numStr, 1); // Remaining digits (1,000,000 to 9,999,999)

            //     // Handle ten-millions part
            //     if ($tenMillions == '1') {
            //         // Special case for 11,000,000
            //         if (substr($numStr, 0, 2) == '11') {
            //             $result .= "ສິບເອັດລ້ານ";
            //             $remaining = substr($numStr, 2); // Remove the first two digits
            //         } else {
            //             $result .= "ສິບ";
            //         }
            //     } elseif ($tenMillions == '2') {
            //         if (substr($numStr, 0, 2) == '21') {
            //             $result .= "ຊາວເອັດລ້ານ";
            //             $remaining = substr($numStr, 2); // Remove the first two digits
            //         } else {
            //             $result .= "ຊາວ";
            //         }
            //     } else {
            //         $result .= $laoNumbers[$tenMillions] . "ສິບ";
            //     }

            //     // Handle remaining digits
            //     if ($remaining != '0000000') {
            //         $result .= convertIntegerToLao($remaining, $laoNumbers, $units);
            //     } else {
            //         $result .= 'ລ້ານ';
            //     }
            //     return $result;
            // }

            if ($length == 8) {
                $tenMillions = $numStr[0]; // First digit (1-9)
                $remaining = substr($numStr, 1); // Remaining digits (1,000,000 to 9,999,999)

                // Handle ten-millions part
                if ($tenMillions == '1') {
                    $result .= "ສິບ";
                } elseif ($tenMillions == '2') {
                    $result .= "ຊາວ";
                } else {
                    $result .= $laoNumbers[$tenMillions] . "ສິບ";
                }

                // Handle millions part
                $millions = $numStr[1]; // Second digit (0-9)
                if ($millions == '1') {
                    $result .= "ເອັດ";
                } elseif ($millions != '0') {
                    $result .= $laoNumbers[$millions];
                }

                $result .= "ລ້ານ";

                // Handle remaining digits
                $remaining = substr($numStr, 2);
                if ($remaining != '000000') {
                    $result .= convertIntegerToLao($remaining, $laoNumbers, $units);
                }
                return $result;
            }

            // Handle numbers from 1,000,000 to 9,999,999
            if ($length == 7) {
                $millions = $numStr[0]; // First digit (1-9)
                $hundredThousandsToThousands = substr($numStr, 1); // Remaining digits (100,000 to 999,999)

                // Handle millions part
                $result .= $laoNumbers[$millions] . "ລ້ານ";

                // Handle remaining hundred-thousands to thousands
                if ($hundredThousandsToThousands != '000000') {
                    $result .= convertIntegerToLao($hundredThousandsToThousands, $laoNumbers, $units);
                }
                return $result;
            }

            // Handle numbers from 100,000 to 999,999
            if ($length == 6) {
                $hundredThousands = $numStr[0]; // First digit (1-9)
                $tenThousands = $numStr[1];    // Second digit (0-9)

                // Handle hundred-thousands part
                $result .= $laoNumbers[$hundredThousands] . "ແສນ";

                // Handle remaining ten-thousands and thousands
                $remaining = substr($numStr, 1);
                if ($remaining != '00000') {
                    $result .= convertIntegerToLao($remaining, $laoNumbers, $units);
                }
                return $result;
            }

            // Handle numbers from 10,000 to 99,999
            if ($length == 5) {
                $tenThousands = $numStr[0]; // First digit (1-9)
                $thousands = $numStr[1];    // Second digit (0-9)

                // Handle ten-thousands part
                if ($tenThousands == '1') {
                    $result .= "ສິບ";
                } elseif ($tenThousands == '2') {
                    $result .= "ຊາວ";
                } else {
                    $result .= $laoNumbers[$tenThousands] . "ສິບ";
                }

                // Handle thousands part
                if ($thousands == '1') {
                    $result .= "ເອັດ";
                } elseif ($thousands != '0') {
                    $result .= $laoNumbers[$thousands];
                }

                $result .= "ພັນ";

                // Handle remaining hundreds/tens/units if any
                $remaining = substr($numStr, 2);
                if ($remaining != '000') {
                    $result .= convertIntegerToLao($remaining, $laoNumbers, $units);
                }

                return $result;
            }

            // Regular number conversion for numbers below 10,000
            for ($i = 0; $i < $length; $i++) {
                $digit = (int)$numStr[$i];
                $position = $length - $i - 1;

                if ($digit != 0) {
                    // Special cases for 1 in units position
                    if ($position == 0 && $digit == 1 && $i > 0) {
                        $result .= "ເອັດ";
                        continue;
                    }

                    // Special cases for 2 in tens position
                    if ($position == 1 && $digit == 2) {
                        $result .= "ຊາວ";
                        continue;
                    }

                    // Special cases for 1 in tens position
                    if ($position == 1 && $digit == 1) {
                        $result .= "ສິບ";
                        continue;
                    }

                    // Standard cases
                    $result .= $laoNumbers[$digit];

                    // Add unit if not zero position
                    if ($position > 0) {
                        $result .= $units[$position];
                    }
                }
            }



            return $result ;
        }

        // Convert integer part
        $integerText = convertIntegerToLao($integerPart, $laoNumbers, $units);

        // Convert decimal part if exists
        if ($decimalPart !== null) {
            $decimalText = convertIntegerToLao($decimalPart, $laoNumbers, ['']);
            return $integerText . " ຈຸດ " . $decimalText;
        }

        return $integerText;
    }
}
