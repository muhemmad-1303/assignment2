<?php
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    foreach($_POST as $key=>$value){
        ${$key}=val($value);
    }
   }

   
    function val($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
function add($num1,$num2){
    return floatval($num1)+floatval($num2);
 }
function sub($num1,$num2){
    return floatval($num1)-floatval($num2);
 }
 function mul($num1,$num2){
    return floatval($num1)*floatval($num2);
 }
 
 if($operation=="add"){
    $result=add($firstvalue,$secondvalue);
    echo $result;
 }
 else if($operation=="sub"){
   $result=sub($firstvalue,$secondvalue);
 }
 else if($operation=="mul"){
     $result=mul($firstvalue,$secondvalue);
 }
 else if($operation=="square"){
    $result=floatval($firstvalue)*floatval($firstvalue);
    $secondvalue="";
}
else if($operation=="squareroot"){
    $result=sqrt(floatval($firstvalue));
    $secondvalue="";
}

 header("location:simple.php?result=".$result."&operation=".$operation."&first=".$firstvalue."&second=".$secondvalue);
 
 




?>