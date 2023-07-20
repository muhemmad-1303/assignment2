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
    return $data;}
function millitokg($data){
    return $data/1000000;
}
function gramtokg($data){
    return $data/1000;
}
function metrictokg($data){
    return $data*1000;
}
function tontokg($data){
    return $data*907.1847;
}
function poundtokg($data){
    return $data*0.45359237;
}
function ouncetokg($data){
    return $data*0.02834952;
}
function kgtomilli($data){
    return $data*1000000;
}
function kgtogram($data){
    return $data*1000;
}
function kgtometric($data){
    return $data/1000;
}
function kgtoton($data){
    return $data/907.18974;
}
function kgtopound($data){
    return $data*2.20462262;
}
function kgtoounce($data){
    return $data*35.27396;
}
$result=0;
    if($in_unit==$out_unit){
        $result=$in_tempvalue;

    }
    else if($in_unit=="kilogram"){
        if($out_unit=="milligram"){
            $result=kgtomilli($in_tempvalue);
        }
        else if($out_unit=="gram"){
            $result=kgtogram($in_tempvalue);
        }
        else if($out_unit=="metric"){
            $result=kgtometric($in_tempvalue);
        }
        else if($out_unit=="ton"){
            $result=kgtoton($in_tempvalue);
        }
        else if($out_unit=="pound"){
            $result=kgtopound($in_tempvalue);
        } 
        else if($out_unit=="ounce"){
            $result=kgtoounce($in_tempvalue);
        }      
    }
    else if($in_unit=="milligram"){
        $result=millitokg($in_tempvalue);
        if($out_unit=="kilogram"){
            $result=$result;
        }
        else if($out_unit=="gram"){
            $result=kgtogram($result);
        }
        else if($out_unit=="metric"){
            $result=kgtometric($result);
        }
        else if($out_unit=="ton"){
            $result=kgtoton($result);
        }
        else if($out_unit=="pound"){
            $result=kgtopound($result);
        } 
        else if($out_unit=="ounce"){
            $result=kgtoounce($result);
        }      
    }
    else if($in_unit=="gram"){
        $result=gramtokg($in_tempvalue);
        if($out_unit=="kilogram"){
            $result=$result;
        }
        else if($out_unit=="milligram"){
            $result=kgtomilli($result);
        }
        else if($out_unit=="metric"){
            $result=kgtometric($result);
        }
        else if($out_unit=="ton"){
            $result=kgtoton($result);
        }
        else if($out_unit=="pound"){
            $result=kgtopound($result);
        } 
        else if($out_unit=="ounce"){
            $result=kgtoounce($result);
        }      
    }
    else if($in_unit=="metric"){
        $result=metrictokg($in_tempvalue);
        if($out_unit=="kilogram"){
            $result=$result;
        }
        else if($out_unit=="gram"){
            $result=kgtogram($result);
        }
        else if($out_unit=="milligram"){
            $result=kgtometric($result);
        }
        else if($out_unit=="ton"){
            $result=kgtoton($result);
        }
        else if($out_unit=="pound"){
            $result=kgtopound($result);
        } 
        else if($out_unit=="ounce"){
            $result=kgtoounce($result);
        }      
    }
    else if($in_unit=="ton"){
        $result=tontokg($in_tempvalue);
        if($out_unit=="kilogram"){
            $result=$result;
        }
        else if($out_unit=="gram"){
            $result=kgtogram($result);
        }
        else if($out_unit=="metric"){
            $result=kgtometric($result);
        }
        else if($out_unit=="milligram"){
            $result=kgtomilligram($result);
        }
        else if($out_unit=="pound"){
            $result=kgtopound($result);
        } 
        else if($out_unit=="ounce"){
            $result=kgtoounce($result);
        }      
    }
    else if($in_unit=="pound"){
        $result=poundtokg($in_tempvalue);
        if($out_unit=="kilogram"){
            $result=$result;
        }
        else if($out_unit=="gram"){
            $result=kgtogram($result);
        }
        else if($out_unit=="metric"){
            $result=kgtometric($result);
        }
        else if($out_unit=="ton"){
            $result=kgtoton($result);
        }
        else if($out_unit=="milligram"){
            $result=kgtomilligram($result);
        } 
        else if($out_unit=="ounce"){
            $result=kgtoounce($result);
        }      
    }
    else if($in_unit=="ounce"){
        $result=ouncetokg($in_tempvalue);
        if($out_unit=="kilogram"){
            $result=$result;
        }
        else if($out_unit=="gram"){
            $result=kgtogram($result);
        }
        else if($out_unit=="metric"){
            $result=kgtometric($result);
        }
        else if($out_unit=="ton"){
            $result=kgtoton($result);
        }
        else if($out_unit=="pound"){
            $result=kgtopound($result);
        } 
        else if($out_unit=="milligram"){
            $result=kgtomilli($result);
        }      
    }

    header("location:weight.php?result=".$result."&invalue=".$in_tempvalue."&inunit=".$in_unit."&outunit=".$out_unit);
 ?>   