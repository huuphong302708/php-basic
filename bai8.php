<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //thoat khoi vong lap toi 20 dung
    for ($i = 1; $i <= 100; $i++ ){
        echo $i . " ";
        if($i == 20 ) {
          break;
        }
    }

    echo '<br></br>';
    // bo qua so 5 va tiep tuc vong lap
    for ($i =1; $i <= 10; $i++ ){
        if($i == 5){
            continue;
        }
        echo $i . "-";
    }
    echo '<br></br>';

    //dung in doan phia sau die()
    echo '123';
    die(); // exit();
    echo '456';
    ?>

</body>
</html>