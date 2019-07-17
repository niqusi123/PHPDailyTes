<?php
$array = [2,4,3,6,3,2,5,5];
var_dump(day10($array));
function day10($array){
  $data=array_count_values($array);
 asort($data);
  $arr=array_keys($data);

  return [$arr[0],$arr[1]];


}