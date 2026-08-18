<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $array = array(
        'chu_tuong' => 'hello'
     );

     $array = array_change_key_case($array, CASE_UPPER);
     var_dump($array);

     echo "<br><br/>";
     $array_keys = array('a', 'b', 'c');
     $array_values = array('one', 'two', 'three');
     print_r(array_combine($array_keys, $array_values));
 
     echo "<br><br/>";

     $array = array(1, "hello", 1, "world", "hello");
     print_r(array_count_values($array));

     echo "<br><br/>";

     $stack = array("orange", "banana"); 
     array_push($stack, "apple", "raspberry");
     print_r($stack);

      echo "<br><br/>";

     $stack = array("orange", "banana", "apple", "raspberry");
     $fruit = array_pop($stack);
     print_r($stack);

     echo "<br><br/>";

     $input = array(12, 10, 9);
     $result1 = array_pad($input, 5, 0);
     print_r($result1);
     echo "<br><br/>";
     $result2 = array_pad($input, -7, -1);
     print_r($result2);
     echo "<br><br/>";
     $result3 = array_pad($input, 2, "noop");
     print_r($result3);


      echo "<br><br/>";
      $stack = array("orange", "banana", "apple", "raspberry");
      $fruit = array_shift($stack);
      print_r($stack);

      echo "<br><br/>";
      $queue = array("orange", "banana");
       array_unshift($queue,"apple", "raspberry" );
      print_r($queue);

       echo "<br><br/>";
       $bien1 = array();
       $bien2 = '';
       print_r($bien1);
       print_r($bien2);

       echo "<br><br/>";
       $haystackarray = array('hello', 'nobody', 'freetuts.net');

        var_dump(in_array('freetuts.net', $haystackarray));
        echo "<br><br/>";
        // false
        var_dump(in_array('net', $haystackarray));

        echo "<br><br/>";
        $searcharray = array(
            'username' => 'thehalfheart',
            'email' => 'thehalfheart@gmail.com',
            'website' => 'freetuts.net'
        );

        var_dump(array_key_exists('username', $searcharray));
        var_dump(array_key_exists('otherkey', $searcharray));

         echo "<br><br/>";
         $array = array('freetuts.net', 'freetuts.net');
         $result = array_unique($array);

         var_dump($result);


         echo "<br><br/>";
         $array = array(
            'username' => 'thehalfheart',
            'password' => 'somepasss'
         );

         var_dump(array_values($array));
         
         echo "<br><br/>";
         $x = array(0, 1, 2, 3, 4);
         var_dump($x);
         unset($x[3]);
         var_dump($x);

         //tang dan
         echo "<br><br/>";
         $cars = array("Volvo", "BMW", "Toyota");
         sort($cars);

         foreach( $cars as $c) {
            echo "$c <br>";
         }
         
         //tang dan theo value
         echo "<br><br/>";
         $age = array("Vinh"=>"22", "Tan"=>"25", "Hoa"=>"20");
         asort($age);

         foreach($age as $x => $x_value) {
             echo "Key = " . $x . ", Value = " . $x_value;
             echo "<br>";
         }

         //tang dan theo key
         echo "<br><br/>";
         $age = array("Vinh"=>"22", "Tan"=>"25", "Hoa"=>"20");
         ksort($age);

         foreach($age as $x => $x_value) {
             echo "Key = " . $x . ", Value = " . $x_value;
             echo "<br>";
         }
         
         echo "<br><br/>";
         $array1 = array(
            "php" => "laravel",
            "css", "html"
         );
         $array2 = array(
             "python",
             "php" => "zend",
             "js" => "nodeJs"
         );
         $result = array_merge($array1, $array2);
         echo "<pre>";
             print_r($result);
         echo "</pre>";


         $a=array("red","green","blue","yellow","brown");
         
         print_r(array_slice($a,3));

         print_r(array_slice($a, 0, 3));
         print_r(array_slice($a, 1, 3));
         print_r(array_slice($a, 2, 3));

        
    ?>
</body>
</html>