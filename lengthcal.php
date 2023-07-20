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
    function mmtom($data){
        return $data/1000;
    }
    function cmtom($data){
        return $data/100;
    }
    function kmtom($data){
        return $data*1000;
    }
    function inchestom($data){
        return $data/39.37;
    }
    function yardtom($data){
        return $data*0.9144;
    }
    function foottom($data){
        return $data*0.3048;
    }
    function miletom($data){
        return $data*1609.34;
    }
    function mtomm($data){
        return $data*1000;
    }
    function mtocm($data){
        return $data*100;
    }
    function mtokm($data){
        return $data*.001;
    }
    function mtoinches($data){
        return $data*39.26;
    }
    function mtoyard($data){
        return $data*1.0936;
    }
    function mtofoot($data){
        return $data*3.28084;
    }
    function mtomile($data){
        return $data*0.00062137;
    }

    $result=0;
    if($in_unit==$out_unit){
        $result=$in_tempvalue;

    }
    else if($in_unit=="meter"){
        if($out_unit=="millimeter"){
            $result=mtomm($in_tempvalue);
        }
        else if($out_unit=="centimeter"){
            $result=mtocm($in_tempvalue);
        }
        else if($out_unit=="kilometer"){
            $result=mtokm($in_tempvalue);
        }
        else if($out_unit=="inch"){
            $result=mtoinches($in_tempvalue);
        }
        else if($out_unit=="yard"){
            $result=mtoyard($in_tempvalue);
        }
        else if($out_unit=="foot"){
            $result=mtofoot($in_tempvalue);
        }
        else if($out_unit=="mile"){
            $result=mtomile($in_tempvalue);
        }
        
    }
    else if($in_unit=="millimeter"){
        $result=mmtom($in_tempvalue);
        if($out_unit=="meter"){
            $result=mmtom($in_tempvalue);
        }
        else if($out_unit=="centimeter"){
            $result=mtocm($result);
        }
        else if($out_unit=="kilometer"){
            $result=mtokm($result);
        }
        else if($out_unit=="inch"){
            $result=mtoinches($result);;
        }
        else if($out_unit=="yard"){
            $result=mtoyard($result);
        }
        else if($out_unit=="foot"){
            $result=mtofoot($result);
        }
        else if($out_unit=="mile"){
            $result=mtomile($result);
        }
        
    }
    else if($in_unit=="centimeter"){
        $result=cmtom($in_tempvalue);
        if($out_unit=="meter"){
            $result=cmtom($in_tempvalue);
        }
        else if($out_unit=="millimeter"){
            $result=mtomm($result);
        }
        else if($out_unit=="kilometer"){
            $result=mtokm($result);
        }
        else if($out_unit=="inch"){
            $result=mtoinches($result);;
        }
        else if($out_unit=="yard"){
            $result=mtoyard($result);
        }
        else if($out_unit=="foot"){
            $result=mtofoot($result);
        }
        else if($out_unit=="mile"){
            $result=mtomile($result);
        }
        
    }
    else if($in_unit=="kilometer"){
        $result=kmtom($in_tempvalue);
        if($out_unit=="meter"){
            $result=kmtom($in_tempvalue);
        }
        else if($out_unit=="millimeter"){
            $result=mtomm($result);
        }
        else if($out_unit=="centimeter"){
            $result=mtocm($result);
        }
        else if($out_unit=="inch"){
            $result=mtoinches($result);;
        }
        else if($out_unit=="yard"){
            $result=mtoyard($result);
        }
        else if($out_unit=="foot"){
            $result=mtofoot($result);
        }
        else if($out_unit=="mile"){
            $result=mtomile($result);
        }
        
    }
    else if($in_unit=="inch"){
        $result=inchestom($in_tempvalue);
        if($out_unit=="meter"){
            $result=inchestom($in_tempvalue);
        }
        else if($out_unit=="millimeter"){
            $result=mtomm($result);
        }
        else if($out_unit=="kilometer"){
            $result=mtokm($result);
        }
        else if($out_unit=="centimeter"){
            $result=mtocm($result);;
        }
        else if($out_unit=="yard"){
            $result=mtoyard($result);
        }
        else if($out_unit=="foot"){
            $result=mtofoot($result);
        }
        else if($out_unit=="mile"){
            $result=mtomile($result);
        }
        
    }
    else if($in_unit=="yard"){
        $result=yardtom($in_tempvalue);
        if($out_unit=="meter"){
            $result=yardtom($in_tempvalue);
        }
        else if($out_unit=="millimeter"){
            $result=mtomm($result);
        }
        else if($out_unit=="kilometer"){
            $result=mtokm($result);
        }
        else if($out_unit=="inch"){
            $result=mtoinches($result);;
        }
        else if($out_unit=="centimeter"){
            $result=mtocm($result);
        }
        else if($out_unit=="foot"){
            $result=mtofoot($result);
        }
        else if($out_unit=="mile"){
            $result=mtomile($result);
        }
        
    }
    else if($in_unit=="foot"){
        $result=foottom($in_tempvalue);
        if($out_unit=="meter"){
            $result=foottom($in_tempvalue);
        }
        else if($out_unit=="millimeter"){
            $result=mtomm($result);
        }
        else if($out_unit=="kilometer"){
            $result=mtokm($result);
        }
        else if($out_unit=="inch"){
            $result=mtoinches($result);;
        }
        else if($out_unit=="yard"){
            $result=mtoyard($result);
        }
        else if($out_unit=="centimeter"){
            $result=mtocm($result);
        }
        else if($out_unit=="mile"){
            $result=mtomile($result);
        }
        

    }
    else if($in_unit=="mile"){
        $result=miletom($in_tempvalue);
        if($out_unit=="meter"){
            $result=miletom($in_tempvalue);
        }
        else if($out_unit=="millimeter"){
            $result=mtomm($result);
        }
        else if($out_unit=="kilometer"){
            $result=mtokm($result);
        }
        else if($out_unit=="inch"){
            $result=mtoinches($result);;
        }
        else if($out_unit=="yard"){
            $result=mtoyard($result);
        }
        else if($out_unit=="foot"){
            $result=mtofoot($result);
        }
        else if($out_unit=="cm"){
            $result=mtocm($result);
        }
        
    }


    header("location:length.php?result=".$result."&invalue=".$in_tempvalue."&inunit=".$in_unit."&outunit=".$out_unit);
    




?>