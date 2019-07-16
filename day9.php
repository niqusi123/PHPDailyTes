<?php
$arr=[3,32,321];
echo day9($arr);
function day9($arr){
   for ($i=0; $i <3; $i++) { 
   	  for ($j=0; $j < 3; $j++) { 
   	  for ($k=0; $k < 3; $k++) { 
   	  	   if($arr[$i]!=$arr[$j]&&$arr[$j]!=$arr[$k]&&$arr[$i]!=$arr[$k]){
   	  	   	   $array[]=$arr[$i].$arr[$j].$arr[$k];

   	  	   }
   	    }
   	  }
   }
    sort($array);
   return $array[0];
}