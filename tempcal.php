<?php 

   if($_SERVER["REQUEST_METHOD"]=="POST"){
    $in_tempvalue=floatval(val($_POST['invalue']));
    $in_unit=val($_POST['inunit']);
    $out_unit=val($_POST['outunit']);
   }
    function val($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    function celtokel($data){
         return ($data)+273.15;
    }
    function fahtokel($data){
        return ($data-32)*5/9+273.15;
    }
    function keltofah($data){
        return ($data-273.15)*(9/5)+32;
    }
    function keltocel($data){
        return ($data-273.15);
    }
    $result=0;
    if($in_unit==$out_unit){
       $result=$in_tempvalue;
    }
    else if($in_unit=="kelvin" and $out_unit=="fahrenheit"){
        $result=keltofah($in_tempvalue);
    }
    else if($in_unit=="kelvin" and $out_unit=="celcius"){
        $result=keltocel($in_tempvalue);
    }
    else if($in_unit!="kelvin" and $out_unit=="kelvin"){
        if($in_unit=="celcius"){
            $result=celtokel($in_tempvalue);
        }
        else{
            $result=fahtokel($in_tempvalue);
        }
    }
    else if($in_unit!="kelvin" and $out_unit!="kelvin"){
        if($in_unit=="celcius"){
             $result=celtokel($in_tempvalue);
             $result=keltofah($result);
        }
        else{
             $result=fahtokel($in_tempvalue);
             $result=keltocel($result);
        }
    }
    header("location:temp.php?result=".$result."&invalue=".$in_tempvalue."&inunit=".$in_unit."&outunit=".$out_unit);
?>