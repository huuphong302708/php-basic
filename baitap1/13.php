<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
    $age = array("Hoang" => "31", "Nam" => "41", "Minh" => "39", "Hoa" => "40");

    // Sắp xếp tăng dần theo Value (dùng asort)
    echo "1. Sắp xếp tăng dần theo Value<br>";
    $arr1 = $age;
    asort($arr1);
    foreach ($arr1 as $key => $value) {
        echo "Tuổi của " . $key . " là: " . $value . "<br>";
    }

    // Sắp xếp tăng dần theo Key (dùng ksort)
    echo "2. Sắp xếp tăng dần theo Key<br>";
    $arr2 = $age;
    ksort($arr2);
    foreach ($arr2 as $key => $value) {
        echo "Tuổi của " . $key . " là: " . $value . "<br>";
    }

    // Sắp xếp giảm dần theo Value (dùng arsort)
    echo "3. Sắp xếp giảm dần theo Value<br>";
    $arr3 = $age;
    arsort($arr3);
    foreach ($arr3 as $key => $value) {
        echo "Tuổi của " . $key . " là: " . $value . "<br>";
    }

    // Sắp xếp giảm dần theo Key (dùng krsort)
    echo "4. Sắp xếp giảm dần theo Key<br>";
    $arr4 = $age;
    krsort($arr4);
    foreach ($arr4 as $key => $value) {
        echo "Tuổi của " . $key . " là: " . $value . "<br>";
    }
    ?>
    

</body>
</html>