<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // for ($i = 0; $i < 10; $i++){
    // echo $i . ' - ';
    // }

    // for ($i = 9; $i >= 0; $i--){
    // echo $i . ' - ';
    // }

    // for ($i = 9, $count = 10; $i <= $count; $i++){
    // echo $i . ' - ';
    // }

    // for ($i = 1; $i < 9; $i++)
    // {
    // for ($j = 8; $j >= $i; $j--)
    // {
    //     echo $j;
    // }
    // echo '<br/>';
    // }

    $sinhvien = array(
    'Nguyễn A',
    'Nguyễn B',
    'Nguyễn C',
    'Nguyễn D',
    'Nguyễn E',
    'Nguyễn F'
    );

    echo $sinhvien[0];
    echo '-';
    echo $sinhvien[1];
    echo '-';   
    echo $sinhvien[2];
    echo '-'; 
    echo $sinhvien[3];
    echo '-'; 
    echo $sinhvien[4];
    echo '-'; 
    echo $sinhvien[5];

    echo '<br><br>';

    for ($i = 0; $i < 6; $i++){
        echo $sinhvien[$i] . '-';
    }

     echo '<br><br>';

    //  for ($i = 0; $i < count($sinhvien); $i++){
    // echo $sinhvien[$i];
    // }

    // echo '<br><br>';

    // $count = count($sinhvien);
    // for ($i = 0; $i < $count; $i++){
    //     echo $sinhvien[$i];
    // }
    // baitap1
     for ($i = 0; $i <= 100; $i++) {
  
    if ($i % 2 == 0) {
        echo $i . '';
    }
    } 

    echo '<br><br>';
   //  baitap2 
    $array = [1, 23, 32, 5, 43, 321, 312, 352, 2, 13, 153, 21, 32, 1];

    $max = $array[0];
    $viTri = 0;

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            
            $max = $array[$i]; 
            $viTri = $i;     
        }
    }

    echo "Số lớn nhất trong mảng là: " . $max . "<br/>";
    echo "Vị trí đứng trong mảng là: " . $viTri;


     echo '<br><br>';
    // baitap3
     $name = "Nguyen Van Cuong";
     for ($i = 0 ; $i <strlen($name);$i++){
        echo $name[$i] . '-';
     } 
     echo '<br><br>';
     //baitap4
     $n = 10;
     $tong = 0;
     for($i = 1; $i <= $n; $i++){
        $tong = $tong + (1/$i);
     }
     echo "tong cua day so tren la " . $tong;


     echo '<br><br>';
     //baitap5
     $n = 3;
     $x = 2;
     $tong = 0;
     for($i = 1; $i <= $n; $i++){
        $so_mu = 2 * $i;
        $tong = $tong +($x ** $so_mu);
     }
     echo "tong la . $tong";

     echo '<br><br>';

     // bai6
     for ($i = 1; $i <= 100; $i += 2) {
    echo $i . " ";
    }
   
    echo '<br><br>';
    ?>
   
  
</body>
</html>