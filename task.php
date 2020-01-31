<?php
    // example 1
//    $limit = 4;
//    $maxOrder = 17;
//    $sizes = [2, 5, 6, 8];
    // small
//    $limit = 10;
//    $maxOrder = 100;
//    $sizes = [4, 14, 15, 18, 29, 32, 36, 82, 95, 95];
    // medium
    $limit = 50;
    $maxOrder = 4500;
    $inputLine = "7 12 12 13 14 28 29 29 30 32 32 34 41 45 46 56 61 61 62 63 65 68 76 77 77 92 93 94 97 103 113 114 114 120 135 145 145 149 156 157 160 169 172 179 184 185 189 194 195 195";
    $sizes = explode(" ", $inputLine);
    
    $mainList = [];
    $tempList = [];
    
    $mainTotal = 0;
    $tempTotal = 0;
    
    for($i = count($sizes) - 1; $i >= 0; $i--) {
        $tempList = [];
        $tempTotal = 0;
        $totTmp = 0;
        for($j = $i; $j >= 0; $j--) {
            $totTmp = $tempTotal + $sizes[$j];
            if ($totTmp == $maxOrder) {
               $tempTotal = $totTmp;
               $tempList[] = $j;
               break;
            } elseif ($totTmp < $maxOrder) {
               $tempTotal = $totTmp;
               $tempList[] = $j;
               continue; 
            } elseif ($totTmp > $maxOrder) {
               continue; 
            }
        }
        
        if ($mainTotal < $tempTotal) {
            $mainTotal = $tempTotal;
            $mainList = $tempList;
        }
    }
    
    print_r($mainList);
?>

