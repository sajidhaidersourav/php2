<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fevicon -->
  <link rel="shortcut icon" href="img/logo_icon_sourav.png" type="image/x-icon">
  <!-- link css  -->
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/media.css">
  <title>Bootstrap template</title>
</head>
<body>
  
  <div class="container py-4">
    <h2 class="text-center py-3 bg-info text-dark" style="border: 3px solid red;"><b>- 50 EXAMPLE -</b></h2>

    <div class="row">
      <!-- 1 -->
      <div class="col-6">
        <div class="item text-center" style="border: 3px solid red;">
          <?php
          
          $num1 = 30;
          $num2 = 20;
          $num3 = $num1 + $num2;
          echo "<h2>"."<b>".$num1." "."+"." ".$num2." "."="." ".$num3."</b>"."</h2>";

          ?>
        </div>
      </div>
      <!-- 1 -->
      <!-- 2 -->
      <div class="col-6">
        <div class="item text-center" style="border: 3px solid red;">
          <?php
          
          $num1 = 30;
          $num2 = 20;
          $num3 = $num1 - $num2;
          echo "<h2>"."<b>".$num1." "."-"." ".$num2." "."="." ".$num3."</b>"."</h2>";

          ?>
        </div>
      </div>
      <!-- 2 -->
      <!-- 3 -->
      <div class="col-6">
        <div class="item text-center py-3 mt-2" style="border: 3px solid red;">
          <?php
          
          $num1 = 30;
          $num2 = 20;
          $num3 = $num1 * $num2;
          echo "<h2>"."<b>".$num1." "."*"." ".$num2." "."="." ".$num3."</b>"."</h2>";

          ?>
        </div>
      </div>
      <!-- 3 -->
      <!-- 4 -->
      <div class="col-6">
        <div class="item text-center py-3 mt-2" style="border: 3px solid red;">
          <?php
          
          $num1 = 30;
          $num2 = 20;
          $num3 = $num1 / $num2;
          echo "<h2>"."<b>".$num1." "."/"." ".$num2." "."="." ".$num3."</b>"."</h2>";

          ?>
        </div>
      </div>
      <!-- 4 -->
      <!-- 5 -->
      <div class="col-12">
        <div class="item text-center py-3 mt-2" style="border: 3px solid red;">
          <?php
          
          $num1 = 30;
          $num2 = 20;
          $num3 = $num1 % $num2;
          echo "<h2>"."<b>".$num1." "."%"." ".$num2." "."="." ".$num3."</b>"."</h2>";

          ?>
        </div>
      </div>
      <!-- 5 -->
      <!-- 6 -->
      <div class="col-6">
        <div class="item py-3 mt-2" style="border: 3px solid red;">
        <?php
        
        if(isset($_POST['submit'])){

          $number1 = $_POST['frist_number'];
          $number2 = $_POST['second_number'];
          $number3 = $number1 + $number2;

        }else{
          $number1 = null;
          $number2 = null;
          $number3 = null;
        }
        
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="px-5">

          <input type="number" class="frist_number form-control" id="frist_number" name="frist_number" placeholder="Enter Your Frist Number" required>

          <h2 class="text-center"><b>+</b></h2>

          <input type="number" class="second_number form-control" id="second_number" name="second_number" placeholder="Enter Your Second Number" required>

          <button type="submit" class="btn btn-info submit mt-3" id="submit" name="submit"><b>SUBMIT</b></button>

        </form>

        <div class="btn_box px-5 py-3">
        <?php
        
        echo "<h2>"."<b>".$number1." "."+"." ".$number2." "."="." ".$number3."</b>"."</h2>";

        ?>
        </div>

        </div>
      </div>
      <!-- 6 -->
      <!-- 7 -->
      <div class="col-6">
        <div class="item py-3 mt-2" style="border: 3px solid red;">
        <?php
        
        if(isset($_POST['submit2'])){

          $number4 = $_POST['frist_number2'];
          $number5 = $_POST['second_number2'];
          $number6 = $number4 - $number5;

        }else{
          $number4 = null;
          $number5 = null;
          $number6 = null;
        }
        
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="px-5">

          <input type="number" class="frist_number2 form-control" id="frist_number2" name="frist_number2" placeholder="Enter Your Frist Number" required>

          <h2 class="text-center"><b>-</b></h2>

          <input type="number" class="second_number2 form-control" id="second_number2" name="second_number2" placeholder="Enter Your Second Number" required>

          <button type="submit" class="btn btn-info submit2 mt-3" id="submit2" name="submit2"><b>SUBMIT</b></button>

        </form>

        <div class="btn_box px-5 py-3">
        <?php
        
        echo "<h2>"."<b>".$number4." "."-"." ".$number5." "."="." ".$number6."</b>"."</h2>";

        ?>
        </div>

        </div>
      </div>
      <!-- 7 -->
      <!-- 8 -->
      <div class="col-6">
        <div class="item py-3 mt-2" style="border: 3px solid red;">
        <?php
        
        if(isset($_POST['submit3'])){

          $number7 = $_POST['frist_number3'];
          $number8 = $_POST['second_number3'];
          $number9 = $number7 * $number8;

        }else{
          $number7 = null;
          $number8 = null;
          $number9 = null;
        }
        
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="px-5">

          <input type="number" class="frist_number3 form-control" id="frist_number3" name="frist_number3" placeholder="Enter Your Frist Number" required>

          <h2 class="text-center pt-2"><b>*</b></h2>

          <input type="number" class="second_number3 form-control" id="second_number3" name="second_number3" placeholder="Enter Your Second Number" required>

          <button type="submit" class="btn btn-info submit3 mt-3" id="submit3" name="submit3"><b>SUBMIT</b></button>

        </form>

        <div class="btn_box px-5 py-3">
        <?php
        
        echo "<h2>"."<b>".$number7." "."*"." ".$number8." "."="." ".$number9."</b>"."</h2>";

        ?>
        </div>

        </div>
      </div>
      <!-- 8 -->
      <!-- 9 -->
      <div class="col-6">
        <div class="item py-3 mt-2" style="border: 3px solid red;">
        <?php
        
        if(isset($_POST['submit4'])){

          $number10 = $_POST['frist_number4'];
          $number11 = $_POST['second_number4'];
          $number12 = $number10 / $number11;

        }else{
          $number10 = null;
          $number11 = null;
          $number12 = null;
        }
        
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="px-5">

          <input type="number" class="frist_number4 form-control" id="frist_number4" name="frist_number4" placeholder="Enter Your Frist Number" required>

          <h2 class="text-center pt-2"><b>/</b></h2>

          <input type="number" class="second_number4 form-control" id="second_number4" name="second_number4" placeholder="Enter Your Second Number" required>

          <button type="submit" class="btn btn-info submit4 mt-3" id="submit4" name="submit4"><b>SUBMIT</b></button>

        </form>

        <div class="btn_box px-5 py-3">
        <?php
        
        echo "<h2>"."<b>".$number10." "."/"." ".$number11." "."="." ".$number12."</b>"."</h2>";

        ?>
        </div>

        </div>
      </div>
      <!-- 9 -->
      <!-- 10 -->
      <div class="col-12">
        <div class="item py-3 mt-2" style="border: 3px solid red;">
        <?php
        
        if(isset($_POST['submit5'])){

          $number13 = $_POST['frist_number5'];
          $number14 = $_POST['second_number5'];
          $number15 = $number13% $number14;

        }else{
          $number13 = null;
          $number14 = null;
          $number15 = null;
        }
        
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="px-5">

          <input type="number" class="frist_number5 form-control" id="frist_number5" name="frist_number5" placeholder="Enter Your Frist Number" required>

          <h2 class="text-center pt-2"><b>%</b></h2>

          <input type="number" class="second_number5 form-control" id="second_number5" name="second_number5" placeholder="Enter Your Second Number" required>

          <button type="submit" class="btn btn-info submit5 mt-3" id="submit5" name="submit5"><b>SUBMIT</b></button>

        </form>

        <div class="btn_box px-5 py-3">
        <?php
        
        echo "<h2>"."<b>".$number13." "."%"." ".$number14." "."="." ".$number15."</b>"."</h2>";

        ?>
        </div>

        </div>
      </div>
      <!-- 10 -->
      <!-- 11 -->
      <div class="col-12"><h2 class="text-center py-3 mt-2 bg-info text-dark " style="border: 3px solid red;"><b>- PHP LOOP'S -</b></h2></div>
      <div class="col-6">
        <div class="item py-3 mt-2 text-center" style="border: 3px solid red;">
          <h2 class="text-center"><b>While Loop</b></h2>
          <?php

            $loop1 = 1;
            
            while($loop1 <= 50){

              echo $loop1." ";
              $loop1+= 2;

            }
            
          ?>
        </div>
      </div>
      <!-- 11 -->
      <!-- 11 -->
      <div class="col-6">
        <div class="item py-3 mt-2 text-center" style="border: 3px solid red;">
          <h2 class="text-center"><b>Do While Loop</b></h2>
          <?php

            $loop2 = 1;
            
            do{
              echo $loop2 ." ";
              $loop2+= 3 ;
            }while($loop2 <= 70);

          ?>
        </div>
      </div>
      <!-- 11 -->
      <!-- 12 -->
      <div class="col-12">
        <div class="item py-3 mt-2 text-center" style="border: 3px solid red;">
          <h2 class="text-center"><b>For Loop</b></h2>
          <?php

            for($loop3 = 1; $loop3 <= 10; $loop3++){
              echo "<b>"."Sourav".$loop3." "."</b>";
            }

          ?>
        </div>
      </div>
      <!-- 12 -->
      <!-- 13 -->
      <div class="col-6">
        <div class="item py-3 mt-2 text-center" style="border: 3px solid red;">
          <h2 class="text-center"><b>For Loop</b></h2>
          <form action="#" class="py-4 px-5">
            <select name="" id="" class="form-select">
            <?php
                for($year = 2000; $year <= 2050; $year++){
                  
            ?>
            <option value='<?php echo $year; ?>'><?php echo $year; ?></option>
            <?php
            }
              ?>
            </select>
          </form>
        </div>
      </div>
      <!-- 13 -->
      <!-- 14 -->
      <div class="col-6">
        <div class="item py-3 mt-2 text-center" style="border: 3px solid red;">
          <h2 class="text-center"><b>While Loop</b></h2>
          <ul class="mx-auto py-3">
          <?php
          
          $bang = 1;

          while($bang <= 8){
            

            $bang++;
            ?>
            <li class="list-inline-item"><b>BANGLADESH <?php echo $bang; ?></b></li>
          <?php  

          }

        ?>
            
          </ul>

        </div>
      </div>
      <!-- 14 -->
      <div class="col-12"><h2 class="text-center py-3 mt-2  bg-info text-dark" style="border: 3px solid red;"><b>- PHP ARRAY -</b></h2></div>
      <!-- 15 -->
      <div class="col-6">
        <div class="item py-3 mt-2 text-center" style="border: 3px solid red;">
          <h2 class="text-center"><b>Index Array</b></h2>
          <?php
          
          $studend = array("Sajid","Haider","Sourav");
          echo $studend[2];
          ?>
        </div>
      </div>
      <!-- 15 -->
      <!-- 16 -->
      <div class="col-6">
        <div class="item py-3 mt-2 text-center" style="border: 3px solid red;">
          <h2 class="text-center"><b>Associative Array</b></h2>
          <?php
          
          $studend = array("Sajid" => 10,"Haider" => 50,"Sourav" => 100);
          echo $studend["Sourav"];
          ?>
        </div>
      </div>
      <!-- 16 -->
      <!-- 17 -->
      <div class="col-12">
        <div class="item py-3 mt-2 text-center" style="border: 3px solid red;">
          <h2 class="text-center"><b>Multi Dimensional Array</b></h2>
          <?php
          
          $studend = array("Sajid" => 10,"Haider" => 50,"Sourav" => 100);
          echo $studend["Sourav"];
          ?>
        </div>
      </div>
      <!-- 17 -->
    </div>
  </div>

  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
