<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
      $mang = array(321,312,3,4,5,45,56,5,7,6,787,8,7,2);
       $timthay = false;
        foreach ($mang as $giatri){
            if ($giatri == 67){
                $timthay = true;
                break ;
            }
        }
      
    // in ket qua
       $o = 67;
      if ($timthay){
        echo "so nam trong mang ";

      }else{
        echo "so khong nam trong mang";
      }
     echo "<br><br/>";
      // bai2 
      $mang = range(1, 100);
      echo "vi tri cua so chia het cho 3:<br>";
      foreach($mang as $key => $value ){
      if ($value % 3 == 0){
       echo "$key: $value, ";
         }
      }
     echo "<br><br/>";
      //bai3
     $a = 15;
     $b = 48;
     $c = 32;
 
     $max = $a;
     if ($b > $max) {
         $max = $b;
     }
     if ($c > $max) {
         $max = $c;
     }

     echo "Số lớn nhất là: $max";

     echo "<br><br/>";
    // bai4
    echo "Các số từ 1 đến 1000 chia hết cho 40 là:<br>";
    for ($i = 1; $i <= 1000; $i++) {
        if ($i % 40 == 0) {
            echo $i . " ";
        }
    }
    ?>
</body>
</html>