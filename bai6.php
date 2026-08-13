<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $i = 1;
     while ($i <= 10){
        echo $i . ' ';
        $i++;
     }

     echo "<br></br>";
      $i = 1;
      do{
        echo $i . ' ';
        $i++;
      }while($i < 10);

     echo "<br></br>";
      $i = 1;
      do{
        echo $i;
        $i++;
      }while($i < 1);

      echo "<br></br>";
     $nam = array(
        1990,
        1991,
        1992,
        1993,
        1994,
        1995
     );

     echo $nam[0];
     echo $nam[1];
     echo $nam[2];
     echo $nam[3];
     echo $nam[4];
     echo $nam[5];

     $i = 0;
     while ($i <= 5){
         echo $nam[$i] . "-";
         $i++; // Tăng biến $i
     }
     echo "<br></br>";
     $i = 0;
     do {
         echo $nam[$i] . "-";
         $i++;
     }while ($i <=5);
    ?>
</body>
</html>