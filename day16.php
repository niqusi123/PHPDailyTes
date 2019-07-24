<?php

$target = 1;
     $array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
     print_r($array);die;
     var_dump(find($target,$array));
     function find($target,$array){
          foreach ($array as $key => $value) {
          	if(in_array($target,$value)){
                return true;
        	}else{
        		return false;
        	}
          }
        	
        
     }