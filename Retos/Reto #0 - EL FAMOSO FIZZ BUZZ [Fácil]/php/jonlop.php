<?php
function fizzbuzz(int $number) : string {
    
   $val = '';

    if ($number % 3 == 0 && $number % 5 == 0){
        $val = 'fizzbuzz';
    } 
    elseif ($number % 3 == 0){
        $val = 'fizz';
        
    } 
    elseif ($number % 5 == 0){
        $val = 'buzz';

    }else{
        $val = $number;
    }

    return $val;
  
    

}

for ($i = 1; $i <= 100; $i++){
    echo fizzbuzz($i)."\n";
}
