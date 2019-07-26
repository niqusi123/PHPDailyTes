<?php
var_dump(Number([1,2,3,4,1])) ;
function Number($n){
	$sum=0;
   $data=array_count_values($n);
   if($data==1){
    $sum++;
   }
   return $sum;
 

}
