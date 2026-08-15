<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $number = 12;

    // if (kiemtrasochan($number)){
    //     echo 'sochan';
    // }else{
    //     echo 'so le';
    // }
    // function kiemtrasochan($number){
    //  if ($number % 2 == 0)
    //     return true ;
    //     else return false;
    // }

    $number = 12;

    kiemtrasochan($number);
    function kiemtrasochan($number){
     if ($number % 2 == 0)
        {
            echo 'sochan';
        }else{
            echo 'sole';
        }
    }

    //  echo '<br></br>';
     
    //  $so1 = 12;
    //  $so2 = 15;
    //  echo tong($so1, $so2);
    //  function tong($c, $d)
    //  {
    //     return $c + $d;   
    //       }

      echo '<br></br>';
     
     $so1 = 12;
     $so2 = 15;
     echo tinhtong($so1, $so2);
     function tinhtong($c, $d, $e = false)
     {
       $tonggg = $c + $d;
       if($c != false){
        $tonggg = $tonggg+ $e;
       }
     return $tonggg;
     }  
     
     
     echo '<br></br>';
     //bientinh
     //hamktra
     function kiem_tra(){
       // bientinh
       static $a = 0;
       $a++ ;
       echo $a;
     }
     kiem_tra(); echo '<br>';
     kiem_tra();

     echo '<br></br>';
    //
    // $a = 1;
    // //
    // function tang_len_1($a)
    // {
    //     return $a + 1;
    // }
    // echo tang_len_1();  echo '<br>';

    // echo $a;
 
     echo '<br></br>';
     //truyen bang tham so
      $a = 1;
      function tang_len_1(&$a){
        $a = $a +1;
        return $a;
      }
      //gia tri tra ve ham
      echo tang_len_1($a);
      // gia tri bien
      echo $a;


    ?>
</body>
</html>