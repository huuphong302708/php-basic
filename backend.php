<?php
$a = 1.234; //kieu so thuc

echo"<br>";

$a = 123; //bien kieu int
$a = (float)$a; //bien luc nay kieu so thuc
$a =(double)$a; // bien kieu o thuc 

echo"<br>";

$bien_so_thuc = 10.5;

if(is_float($bien_so_thuc)){
    echo"dungroi day laf so thuc.";
}else{
    echo"day khong phai laf so thuc";
}

echo"<br>";

$bien_chuoi = "hello";
if(is_float($bien_chuoi)){
    echo"day laf so thuc";
}else{
    echo" chinh xac bien nay khong phai laf so thuc";
}

echo "<br><br>";

$sinhvien = array('nguyen van a', 'nguyen van b');
echo"<pre>"; // giup mang hien thi xuong dong
var_dump($sinhvien);

echo "<br><br>";

$sinhvien1 = array(
0 => 'nguyen van c',
1 => 'nguyen van d'
);
var_dump($sinhvien1);

echo "<br><br>";
$sinhvien3 = array();
$sinhvien[] = 'nnguyen van f';
$sinhvien[] = 'nguyen van e';
var_dump($sinhvien3);

echo "<br><br>";

$sinhvien4 = array()
$sinhvien[] = '1';  
$sinhvien[] = '2';
var_dump($sinhvien4);

echo "<br><br>";
// Để truy xuất các phần tử của mảng chỉ mục ta dùng cú pháp sau: $tenmang[$index]; trong đó $index là chỉ mục bạn muốn lấy.

$sinhvien = array(
0 => 'nguyen bao',
1 => 'nguyen mai'
);
echo $sinhvien[0]; // xuat ra man hinh vs pt 0 => nguyen bao
echo $sinhvien[1]; // xuat ra man hinh vs pt 1 => nguyen mai

echo "<br><br>";

//MANG KET HOP
$sinhvien = array(
'sinhvien_b' => 'nguyen bi',
'sinhvien_t' => 'nguyen thao'
);
var_dump($sinhvien);

echo "<br><br>";

$sinhvien = array();
$sinhvien['sinhvien_d'] = 'nguyen d';
$sinhvien['sinhvien_n'] = 'nguyen n';
var_dump($sinhvien);

echo "<br><br>";

$sinhvien = array();
$sinhvien['sinhvien_a'] = 'nguyen A';
$sinhvien['sinhvien_b'] = 'nguyen B';
echo $sinhvien['sinhvien_a']; // xuat ra man hinh sinh vien a
echo $sinhvien['sinhvien_b']; // xuat ra man hinh sinh vien b

echo "<br><br>";

// KIEU GIA TRI NULL

?>

