<?php

function addition($num1,$num2){
   return $num1 + $num2;
}

function division($num1,$num2){
   if($num1 ==0)
   {
	   $msg = "Div zero error";
	   return $msg;
   }
   else{
	   return $num1 % $num2;   
   }
  
}

  $sum = addition(1,5);
  echo "Sum is ". $sum;
  
  
  $div = division(1,5);
  echo "Division is ". $div;
?>