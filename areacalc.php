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
function sqmillitosqm($data){
    return $data/1000000;
}
function sqcmtosqm($data){
    return $data/10000;
}
function sqkmtosqm($data){
    return $data*1000000;
}
function acretosqm($data){
    return $data*4046.85642;
}
function hectaretosqm($data){
    return $data*10000;
}
function sqmtosqmilli($data){
    return $data*1000000;
}
function sqmtosqcm($data){
    return $data*10000;
}
function sqmtosqkm($data){
    return $data/1000000;
}
function sqmtoacre($data){
    return $data/4046.85642;
}
function sqmtohecatare($data){
    return $data*10000;
}

$result=0;
    if($in_unit==$out_unit){
        $result=$in_tempvalue;

    }
    else if($in_unit=="sqm"){
        if($out_unit=="sqmilli"){
            $result=sqmtosqmilli($in_tempvalue);
        }
        else if($out_unit=="sqcm"){
            $result=sqmtosqcm($in_tempvalue);
        }
        else if($out_unit=="sqkm"){
            $result=sqmtosqkm($in_tempvalue);
        }
        else if($out_unit=="acre"){
            $result=sqmtoacre($in_tempvalue);
        }
        else if($out_unit=="hectare"){
            $result=sqmtohecatare($in_tempvalue);
        }    
    }
    else if($in_unit=="sqmilli"){
        $result=sqmillitosqm($in_tempvalue);
        if($out_unit=="sqm"){
            $result=$result;
        }
        else if($out_unit=="sqcm"){
            $result=sqmtosqcm($result);
        }
        else if($out_unit=="sqkm"){
            $result=sqmtosqkm($result);
        }
        else if($out_unit=="acre"){
            $result=sqmtoacre($result);
        }
        else if($out_unit=="hectare"){
            $result=sqmtohecatare($result);
        }    
    }
    else if($in_unit=="sqcm"){
        $result=sqcmtosqm($in_tempvalue);
        if($out_unit=="sqm"){
            $result=$result;
        }
        else if($out_unit=="sqmilli"){
            $result=sqmtosqmilli($result);
        }
        else if($out_unit=="sqkm"){
            $result=sqmtosqkm($result);
        }
        else if($out_unit=="acre"){
            $result=sqmtoacre($result);
        }
        else if($out_unit=="hectare"){
            $result=sqmtohecatare($result);
        }    
    }
    else if($in_unit=="sqkm"){
        $result=sqkmtosqm($in_tempvalue);
        if($out_unit=="sqm"){
            $result=$result;
        }
        else if($out_unit=="sqcm"){
            $result=sqmtosqcm($result);
        }
        else if($out_unit=="sqmilli"){
            $result=sqmtosqmilli($result);
        }
        else if($out_unit=="acre"){
            $result=sqmtoacre($result);
        }
        else if($out_unit=="hectare"){
            $result=sqmtohecatare($result);
        }    
    }
    else if($in_unit=="acre"){
        $result=acretosqm($in_tempvalue);
        if($out_unit=="sqm"){
            $result=$result;
        }
        else if($out_unit=="sqcm"){
            $result=sqmtosqcm($result);
        }
        else if($out_unit=="sqkm"){
            $result=sqmtosqkm($result);
        }
        else if($out_unit=="sqmilli"){
            $result=sqmtomilli($result);
        }
        else if($out_unit=="hectare"){
            $result=sqmtohecatare($result);
        }    
    }
    else if($in_unit=="hectare"){
        $result=sqmillitosqm($in_tempvalue);
        if($out_unit=="sqm"){
            $result=$result;
        }
        else if($out_unit=="sqcm"){
            $result=sqmtosqcm($result);
        }
        else if($out_unit=="sqkm"){
            $result=sqmtosqkm($result);
        }
        else if($out_unit=="acre"){
            $result=sqmtoacre($result);
        }
        else if($out_unit=="sqmilli"){
            $result=sqmt0sqmilli($result);
        }    
    }

    header("location:area.php?result=".$result."&invalue=".$in_tempvalue."&inunit=".$in_unit."&outunit=".$out_unit);
    



 ?>   