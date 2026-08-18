<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     echo "Nam nói\"Cậu ấy đang ăn tối\" ";

     echo "<br><br/>";

     echo (addcslashes('hello.net HELLO.NET', 'a..zA..Z'));

     echo "<br><br/>";

     $str = 'hello.net is a website free for you';
     $x = explode(' ',$str);
    
     var_dump ($x);
     
     echo "<br><br/>";

     echo implode (' ', array(
        'hellp',
        'xin',
        'chào',
        'các',
        'bạn'
     ));

     echo "<br><br/>"; 
     
     echo ord ('Ab');

     echo "<br><br/>"; 

     echo strlen('hello.net');

      echo "<br><br/>"; 

      echo str_word_count(' hello toi la phong');

      echo "<br><br/>"; 

      $str = ' hello xin chao cac ban';
      $str = str_replace('hello', 'hello phong', $str );
      echo $str;

      echo "<br><br/>"; 

      $str = 'hello Xin Chào Các Bạn';
      $str = str_replace( array('hello', 'Xin Chào'), array('hello.net', 'Hello'), $str );
      echo $str; 

      echo "<br><br/>"; 

      echo md5('huuphong');

      echo "<br><br/>"; 

      echo sha1('hello.net');
      echo "<br><br/>"; 

      echo htmlentities('<b> phong </b>');


      $str = htmlentities('<b>hello.net</b>');
       
       echo "<br><br/>"; 
       echo 'Entity: ' . $str . '<br/>';
       echo 'Decode: ' . html_entity_decode($str);

       echo "<br><br/>"; 
       echo substr( 'hello.net',  0, 5);
       echo "<br><br/>"; 
       echo strstr('hello.net Xin Chào', 'Xin');
       echo "<br><br/>";
       echo strpos('hello.net chào các bạn', 'chào');
     
        echo "<br><br/>";

       $str = 'PHONG';
       echo strtolower($str);
       echo "<br><br/>";
       echo trim(' hello.net ');
       echo "<br><br/>";
       echo trim(' huuphong');


    ?>
</body>
</html>