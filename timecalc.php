<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $in_tempvalue=floatval(val($_POST['invalue']));
    $in_unit=val($_POST["inunit"]);
    $out_unit=val($_POST["outunit"]);
   }
function val($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
function mictos($data){
    return $data/1000000;
}
function mltos($data){
    return $data/1000;
}
function mintos($data){
    return $data*60;
}
function hrtos($data){
    return $data*3600;
}
function daytos($data){
    return $data*86400;
}
function weektos($data){
    return $data*604800;
}
function montos($data){
    return $data*30.44*86400;
}
function yeartos($data){
    return $data*365.25*86400;
}
function stomic($data){
    return $data*1000000;
}
function stoml($data){
    return $data*1000;
}
function stomin($data){
    return $data/60;
}
function stohr($data){
    return $data/3600;
}
function stoday($data){
    return $data/86400;
}
function stoweek($data){
    return $data/604800;
}
function stomon($data){
    return $data/(30.44*86400);
}
function stoyear($data){
    return $data/(365.25*86400);
}
$result=0;
    if($in_unit==$out_unit){
        $result=$in_tempvalue;

    }
    else if($in_unit=="second"){
        if($out_unit=="micro"){
            $result=stomic($in_tempvalue);
        }
        else if($out_unit=="milli"){
            $result=stoml($in_tempvalue);
        }
        else if($out_unit=="minute"){
            $result=stomin($in_tempvalue);
        }
        else if($out_unit=="hour"){
            $result=stohr($in_tempvalue);
        }
        else if($out_unit=="day"){
            $result=stoday($in_tempvalue);
        }
        else if($out_unit=="month"){
            $result=stomon($in_tempvalue);
        }
        else if($out_unit=="year"){
            $result=stoyear($in_tempvalue);
        }     
    }
    else if($in_unit=="micro"){
        $result=mictos($in_tempvalue);
        if($out_unit=="second"){
            $result=$result;
        }
        else if($out_unit=="milli"){
            $result=stoml($result);
        }
        else if($out_unit=="minute"){
            $result=stomin($result);
        }
        else if($out_unit=="hour"){
            $result=stohr($result);;
        }
        else if($out_unit=="day"){
            $result=stoday($result);
        }
        else if($out_unit=="month"){
            $result=stomon($result);
        }
        else if($out_unit=="year"){
            $result=stoyear($result);
        }
        
    }
    else if($in_unit=="milli"){
        $result=mltos($in_tempvalue);
        if($out_unit=="second"){
            $result=$result;
        }
        else if($out_unit=="micro"){
            $result=stomic($result);
        }
        else if($out_unit=="minute"){
            $result=stomin($result);
        }
        else if($out_unit=="hour"){
            $result=stohr($result);;
        }
        else if($out_unit=="day"){
            $result=stoday($result);
        }
        else if($out_unit=="month"){
            $result=stomon($result);
        }
        else if($out_unit=="year"){
            $result=stoyear($result);
        }
        
    }
    else if($in_unit=="minute"){
        $result=mintos($in_tempvalue);
        if($out_unit=="second"){
            $result=$result;
        }
        else if($out_unit=="micro"){
            $result=stomic($result);
        }
        else if($out_unit=="milli"){
            $result=stoml($result);
        }
        else if($out_unit=="hour"){
            $result=stohr($result);;
        }
        else if($out_unit=="day"){
            $result=stoday($result);
        }
        else if($out_unit=="month"){
            $result=stomon($result);
        }
        else if($out_unit=="year"){
            $result=stoyear($result);
        }
        
    }
    else if($in_unit=="hour"){
        $result=hrtos($in_tempvalue);
        if($out_unit=="second"){
            $result=$result;
        }
        else if($out_unit=="micro"){
            $result=stomic($result);
        }
        else if($out_unit=="minute"){
            $result=stomin($result);
        }
        else if($out_unit=="milli"){
            $result=stoml($result);;
        }
        else if($out_unit=="day"){
            $result=stoday($result);
        }
        else if($out_unit=="month"){
            $result=stomon($result);
        }
        else if($out_unit=="year"){
            $result=stoyear($result);
        }
        
    }
    else if($in_unit=="day"){
        $result=daytos($in_tempvalue);
        if($out_unit=="second"){
            $result=$result;
        }
        else if($out_unit=="micro"){
            $result=stomic($result);
        }
        else if($out_unit=="minute"){
            $result=stomin($result);
        }
        else if($out_unit=="hour"){
            $result=stohr($result);;
        }
        else if($out_unit=="milli"){
            $result=stoml($result);
        }
        else if($out_unit=="month"){
            $result=stomon($result);
        }
        else if($out_unit=="year"){
            $result=stoyear($result);
        }
        
    }
    else if($in_unit=="month"){
        $result=montos($in_tempvalue);
        if($out_unit=="second"){
            $result=$result;
        }
        else if($out_unit=="micro"){
            $result=stomic($result);
        }
        else if($out_unit=="minute"){
            $result=stomin($result);
        }
        else if($out_unit=="hour"){
            $result=stohr($result);;
        }
        else if($out_unit=="day"){
            $result=stoday($result);
        }
        else if($out_unit=="milli"){
            $result=stoml($result);
        }
        else if($out_unit=="year"){
            $result=stoyear($result);
        }
        
    }
    else if($in_unit=="year"){
        $result=yeartos($in_tempvalue);
        if($out_unit=="second"){
            $result=$result;
        }
        else if($out_unit=="micro"){
            $result=stomic($result);
        }
        else if($out_unit=="minute"){
            $result=stomin($result);
        }
        else if($out_unit=="hour"){
            $result=stohr($result);;
        }
        else if($out_unit=="day"){
            $result=stoday($result);
        }
        else if($out_unit=="month"){
            $result=stomon($result);
        }
        else if($out_unit=="milli"){
            $result=stoml($result);
        }
        
    }
    
     header("location:time.php?result=".$result."&invalue=".$in_tempvalue."&inunit=".$in_unit."&outunit=".$out_unit);
?>
