<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   
    $nam = array(
        1990,
        1991,
        1992,
        1993,
        1994,
        1995
    );

    foreach ($nam as $key => $value){
        echo $value . "<br>";
    }
    echo "<br></br>";
    $nam = array(
        1990,
        1991,
        1992,
        1993,
        1994,
        1995
    );
    foreach ($nam as $chimuc => $giatri){
        echo $chimuc . "=> " . $giatri . '<br>' ;
    }
    echo "<br></br>"; 
    $sinhvien = array(
        'SV001' => 'Nguyễn Văn A',
        'SV002' => 'Nguyễn Văn B',
        'SV003' => 'Nguyễn Văn C',
        'SV004' => 'Nguyễn Văn D',
        'SV005' => 'Nguyễn Văn E'
    );

    foreach ($sinhvien as $tensv){
        echo $tensv . '<br/>';
    }
    ?>
</body>
</html>