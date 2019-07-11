<?php
$arr=[1,2,3,4,5,6];
function array1($arr){
    $j=[];
    $o=[];
    foreach ($arr as $key => $value) {
    if($value%2==0){
        $o[]=$value;
    }else{
    	$j[]=$value;
    }
  }
  return array_merge($j,$o);
}
print_r(array1($arr));
