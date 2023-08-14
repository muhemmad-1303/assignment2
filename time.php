<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="unit.css">
</head>
<body>
    <div class="content">
    <?php include "nav.php"  ?>
        <div class="calculatorbody">
            <div class="content-box">
                  <h1>Time Conversion</h1>
                  <form action="timecalc.php" method="post">
                  <div class="inputbox">
                       <label>From</label>
                       <?php
                          if(isset($_GET['result'])){
                            $in=$_GET['invalue'];
                            $inunit=$_GET['inunit'];
                            $rval=$_GET['result'];
                            $outunit=$_GET['outunit'];
                       ?>
                       <input type="text" name="invalue" value=<?php echo $in;?>>
                       <select name="inunit" id="">
                        <?php  
                           if($inunit=="micro"){
                        ?>
                        <option value="micro" selected>microsecond</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="milli"){
                        ?>
                        <option value="milli" selected>millisecond</option>
                        <?php  } ?>
                        <?php  
                           if($inunit=="second"){
                        ?>
                        <option value="second" selected>second</option>
                        <?php  } ?>
                        <?php  
                           if($inunit=="minute"){
                        ?>
                        <option value="minute" selected>minute</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="hour"){
                        ?>
                        <option value="hour" selected>hour</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="day"){
                        ?>
                        <option value="day" selected>day</option>
                        <?php } ?>
                        <?php  
                           if($inunit=="week"){
                        ?>
                        <option value="week" selected>week</option>
                        <?php }?>
                        <?php  
                           if($inunit=="month"){
                        ?>
                        <option value="months" selected>month</option>
                        <?php }?>
                        <?php  
                           if($inunit=="year"){
                        ?>
                        <option value="year" selected>year</option>
                        <?php }?>
                       </select>
                       <?php }
                         else{
                         ?>
                           <input type="text" name="invalue">
                           <select name="inunit" id="">
                          <option value="micro">microsecond</option>
                          <option value="milli">millisecond</option>
                         <option value="second">second</option>
                         <option value="minute">minute</option>
                         <option value="hour">hour</option>
                         <option value="day">day</option>
                         <option value="week">week</option>
                          <option value="month">month</option>
                         <option value="year">year</option>
                       </select>

                        <?php } ?>



                        
                        <label>To</label>
                        <?php
                        if(isset($_GET['result'])){
                            
                            
                       ?>
                       <select name="outunit" id="">
                        <?php  
                           if($outunit=="micro"){
                        ?>
                        <option value="micro" selected>microsecond</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="milli"){
                        ?>
                        <option value="milli" selected>millisecond</option>
                        <?php  } ?>
                        <?php  
                           if($outunit=="second"){
                        ?>
                        <option value="second" selected>second</option>
                        <?php  } ?>
                        <?php  
                           if($outunit=="minute"){
                        ?>
                        <option value="minute" selected>minute</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="hour"){
                        ?>
                        <option value="hour" selected>hour</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="day"){
                        ?>
                        <option value="day" selected>day</option>
                        <?php } ?>
                        <?php  
                           if($outunit=="week"){
                        ?>
                        <option value="week" selected>week</option>
                        <?php }?>
                        <?php  
                           if($outunit=="month"){
                        ?>
                        <option value="months" selected>month</option>
                        <?php }?>
                        <?php  
                           if($outunit=="year"){
                        ?>
                        <option value="year" selected>year</option>
                        <?php }?>
                       </select>
                       <div class='subres'>
                     <input type="submit" value="=">
                     <input type="text" name="invalue" value=<?php echo $rval; ?>>
                     </div>
                       <?php }
                         else{
                         ?>
                        
                           <select name="outunit" id="">
                          <option value="micro">microsecond</option>
                          <option value="milli">millisecond</option>
                         <option value="second">second</option>
                         <option value="minute">minute</option>
                         <option value="hour">hour</option>
                         <option value="day">day</option>
                         <option value="week">week</option>
                          <option value="month">month</option>
                         <option value="year">year</option>
                       </select>
                     <div class="subres">
                     <input type="submit" value="=">
                     <input type="text" maxlength="0">
                     </div>
                        <?php } ?>
                        <a href="time.php">clear</a>
                  </div>
                  </form>

            </div>
        </div>
    </div>
</body>
</html>