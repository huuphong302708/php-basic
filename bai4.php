<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $number = 10;
    // switch ($number)
    // {
    //     case 0 :
    //         echo 'Số không';
    //         break;
    //     case 1:
    //         echo 'Số một';
    //         break;
    //     case 2:
    //         echo 'Số hai';
    //         break;
    //     case 3:
    //         echo 'Số ba';
    //         break;
    //     case 4 :
    //         echo 'Số bốn';
    //         break;
    //     default:
    //         echo 'Không tìm thấy';
    //         break;
    // }

    // $number = 4;
    // if ($number == 0){
    //     echo 'Số không';
    // }
    // else if ($number == 1){
    //     echo 'Số một';
    // }
    // else if ($number == 2){
    //     echo 'Số hai';
    // }
    // else if ($number == 3){
    //     echo 'Số ba';
    // }
    // else if ($number == 4){
    //     echo 'Số bốn';
    // }
    // else {
    //     echo 'Không tìm thấy';   
    // }


    // $number = 9;
    // $midle = null;
    // switch ($number)
    // {
    //     case 9 : 
    //         $midle = $number % 2; 
    //         switch ($midle)
    //         {
    //             case 0 : 
    //                 echo 'Số chẵn';
    //                 break;
    //             default :
    //                 echo 'Số lẽ';
    //                 break;
    //         }
    //         break;
    //     default: 
    //         break;
    // }

        $number = 10;
        switch ($number % 7)
        { 
        case 0:
             echo "$number chia hết cho 7"; 
        break;
        default:
             echo "$number không chia hết cho 7";
        break; 
        } 
     ?>

</body>
</html>