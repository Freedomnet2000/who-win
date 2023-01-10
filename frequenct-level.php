<?php

function innerCount($arrayOfInt,$search,$i = 0)
{
    $count = 0;
    foreach ($arrayOfInt as $val) {
        if (!is_array($val)) {
            if ($val == $search) {
                $count++;
            }
        }
    }
    return[$i,$count];
}

    function freqCount($input,$search,$i = 0, $res=[]) {
        $arrayToMerge = [];
        $tmpValArray = [];
        foreach ($input as $val) {
            if (!is_array($val)) {
                $tmpValArray[] = $val;
            }
            else{
                foreach ($val as $innerVal) {
                    $arrayToMerge[] =  $innerVal;
                }
            }
        }
        $res[] = innerCount($tmpValArray,$search,$i);
        if (count($arrayToMerge)>0){
            $i++;
            $res = freqCount($arrayToMerge,$search,$i,$res);
        }
        return  $res;
    }


//print_r(freqCount([1,4,4,[1,1,[1,2,1,1]]], 1));
print_r(freqCount([1,5,5,[5,[1,2,1,1],5,5],5,[5]], 5));
//print_r(freqCount([1,[2],1,[[2]],1,[[[2]]],1,[[[[2]]]]], 2));

//print_r(freqCount([1,2,[1,2,1,11,[1,2]],[1,2,[3,4]],1,[1],[[[[1]]]]], 2));

