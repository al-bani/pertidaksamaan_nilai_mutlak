<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertidaksamaan nilai mutlak</title>
</head>
<style>

.opt{
    margin-top: 20px;
    width: 80px;
}

h2{
    text-align: center;
 }

.submit{
    margin-top: 20px;
}
</style>
<?php

if(isset($_POST['hitung'])){
    $x = $_POST['x'];
    $y = $_POST['y'];
    $c = $_POST['c'];
    $operasi = $_POST['operasi'];

    if (empty($x)){
        $x = 1;
    }

    if ($y < 0 ) {
        $y1 = -1*$y;
        $y2 = "+$y1";
    }
    else{
        $y1 = -1*$y;
        $y2 = "-$y";
    }
      
    if ($c > 0 ) {
        $c1 = -1*$c;
    }
    else{
        $c1 = -1*$c;
    }
      
    $kiri = $c1+$y1;
    $kanan = $c+$y1;
    $hpx = $kiri/$x;
    $hpy = $kanan/$x;

    if ($kiri % $x == 0){
        $nothinghappen = "";
    }
    elseif($kiri % $x < 0){
        $hpx = "$kiri/$x";
    }
    else{
        $hpx = "$kiri/$x";
    }         
       
    if ($kanan % $x == 0){
        $nothinghappen = "";
    }
    elseif($kanan % $x < 0){
        $hpy = "$kanan/$x";
    }
    else{
        $hpy = "$kanan/$x";
    }         
       
    switch ($operasi) {
        case '<':
        
            

            if ($x > 1){
                $eks = "x";
                $cara1 = "$c1 < ( $x$eks $y ) < $c";
                $cara2 = "$c1 $y2 < $x$eks < $c $y2"; 
                $cara3 = "$kiri < $x$eks < $kanan";
                $cara4 = "HP : { $hpx < x < $hpy }";

                if ($y > 0){
                    $cara0 = "| $x + $y | < $c";
                } else{
                    $cara0 = "| $x $y | < $c";
                }
               
            }
            elseif ($x = 1){
                $x = "x";
                $cara1 = "$c1 < ( $x $y ) < $c";
                $cara2 = "$c1 $y2 < $x < $c $y2"; 
                $cara3 = "$kiri < $x < $kanan";
                $cara4 = " ";

                if ($y > 0){
                    $cara0 = "| $x + $y | < $c";
                } else{
                    $cara0 = "| $x $y | < $c";
                }
            }
            elseif ($x < 1){
                $eks = "x";
                $cara1 = "$c1 < ( $x$eks $y ) < $c";
                $cara2 = "$c1 $y2 < $x$eks < $c $y2"; 
                $cara3 = "$kiri < $x$eks < $kanan";
                $cara4 = "HP : { $hpx < x < $hpy }";

                if ($y > 0){
                    $cara0 = "| $x + $y | < $c";
                } else{
                    $cara0 = "| $x $y | < $c";
                }
               
            }
            
           break;
        case '>':
            
            if ($y > 0){
                    $cara0 = "| $x + $y | > $c";
             }  else{
                    $cara0 = "| $x $y | > $c";
             }
           
            if ($x > 1){
                $eks = "x";
                $cara1 = "$c1 > ( $x$eks $y ) > $c";
                $cara2 = "$c1 $y2 > $x$eks > $c $y2";
                $cara3 = "$kiri > $x$eks > $kanan";
                $cara4 = "HP : { $hpx > x > $hpy }";
               
            }
            elseif ($x = 1){
                $x = "x";
                $cara1 = "$c1 > ( $x $y ) > $c";
                $cara2 = "$c1 $y2 > $x > $c $y2"; 
                $cara3 = "$kiri > $x > $kanan";
                $cara4 = " ";
            }
           
            elseif ($x < 1){
                $eks = "x";
                $cara1 = "$c1 > ( $x$eks $y ) > $c";
                $cara2 = "$c1 $y2 > $x$eks > $c $y2";
                $cara3 = "$kiri > $x$eks > $kanan";
                $cara4 = "HP : { $hpx > x > $hpy }";
               
        }
    }
}
?>

<body>
<form method="post" action="pertidaksamaan_mutlak.php">
<h4>
    contoh input : | X + Y | < C<br>
    Jika X tidak bernilai maka kosongkan<br>
    jika variable bernilai positive jangan tulis<br>
    tetapi jika variable bernilai negative maka ditulis
</h4>
<br>
<h4>X :  </h4><input type="number" name="x" >
<h4>Y :   </h4><input type="number" name="y" required>
    <select class="opt" name="operasi">
		<option value="<"><</option>
		<option value=">">></option>			
	</select>
<h4>C : </h4><input type="number" name="c" required>
<br>
<input type="submit" name="hitung" class="submit" value="Hitung">
    
<?php 	
	if(isset($_POST['hitung'])){
?>

<h2>
<?php echo $cara0; ?><br>       
<?php echo $cara1; ?><br>
<?php echo $cara2; ?><br>
<?php echo $cara3; ?><br>
<?php echo $cara4; ?><br>
</h2>

<?php } ?>
</body>
</html>



