<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //bai1
    // $age = array("Hoang" => "31", "Nam" => "41", "Minh" => "39", "Hoa" => "40");

    // // Sắp xếp tăng dần theo Value (dùng asort)
    // echo "Sap xep tang dan theo value <br/>";
    // $arr1 = $age;
    // asort($arr1);
    // foreach ($arr1 as $key => $value){
    //     echo "Tuoi cua " . $key . " la: " . $value . "<br/>";
    // }

    // // Sắp xếp tăng dần theo Key (dùng ksort)
    // echo " sap xep tang dan theo Key<br>";
    // $arr2 = $age;
    // ksort($arr2);
    // foreach ($arr2 as $key => $value) {
    //     echo "Tuoi cua " . $key . " la: " . $value . "<br>";
    // }

    // // Sắp xếp giảm dần theo Value (dùng arsort)
    // echo " Sap xep giam dan theo Value<br>";
    // $arr3 = $age;
    // arsort($arr3);
    // foreach ($arr3 as $key => $value) {
    //     echo "Tuoi cua " . $key . " la: " . $value . "<br>";
    // }

    // // Sắp xếp giảm dần theo Key (dùng krsort)
    // echo " Sap xep giam dan theo Key<br>";
    // $arr4 = $age;
    // krsort($arr4);
    // foreach ($arr4 as $key => $value) {
    //     echo "Tuoi cua " . $key . " la: " . $value . "<br>";
    // }

    // bai 2
    $a = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

     echo "Mảng ban đầu:<br>";
     echo "<pre>";
     print_r($a);
     echo "</pre>";
     
     $lower_value = array_map('strtolower', $a);
     echo "gia tri o dang chu thuong: <br>";
     echo "<pre>";
     print_r($lower_value);
     echo "<pre/>";

     $upper_value = array_map('strtoupper', $a);
     echo "gia tri dang chu hoa: <br>";
     echo "<pre>";
     print_r($upper_value);
    echo "<pre/>";

    // bai3

     $chuoi = ("78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73");
     $array = explode(", ", $chuoi);
     $tong = array_sum($array);
     $soluong = count($array);
     $trungbinh = $tong / $soluong;

     echo "Giá trị trung bình: " . round($trungbinh, 2) . "<br><br>";

     //
     sort($array);

     $nho5 = array_slice($array, 0, 5);
     echo "5 phan tu nho nhat: " . implode(", ", $nho5) . "<br><br>";

     $lon5 = array_slice($array, -5);
     echo "5 phan tu lon nhat: " . implode(", ", $lon5) . "<br>";
    ?>
    

</body>
</html>