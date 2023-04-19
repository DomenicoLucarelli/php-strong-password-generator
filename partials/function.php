<?php 

function passwordGenerator($length){

    $password = [];
  
    $characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!?~@#-_+<>[]{}0123456789';
  
    $charactersLength = strlen($characters);
  
    for($i = 0 ; $i < $length ; $i++){
  
      $n = rand(0, $charactersLength);
  
      $password[] = $characters[$n];
    }
  
    return implode($password);
  
  }
  



