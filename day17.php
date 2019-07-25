<?php

 $arr_A=[1,3,6,9]; $arr_B=[2,4,5,8,20];
 var_dump(combine($arr_A,$arr_B));
 function combine($arr_A,$arr_B){
    $arr =array_merge($arr_A,$arr_B);
    sort($arr);
   return $arr;
 }