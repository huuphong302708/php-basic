<?php
//ktra chanle
$so_can_kiem_tra = 12;
$so_du = $so_can_kiem_tra % 2;
if ($so_du == 0){
     echo 'so '.$so_can_kiem_tra.' Là Số Chẵn';
}

echo '<br><br>';

//ktra nam nhuan
$nam = 1990;
$kiem_tra = ($nam % 4 == 0 && $nam % 100 != 0 || $nam % 400 == 0);
if ($kiem_tra == true){
    echo 'nam ' . $nam . ' la nam nhuan';
}

echo '<br><br>';

// if else
$nam = 2014;
$so_du = $nam % 2;
if ($so_du == 0){
    echo 'nam ' . $nam . ' la nam chan';
}
else{
    echo 'nam ' . $nam . ' la nam le';
}

echo '<br><br>';

//nhiu caulenh if else
$mau = 'mau xanh';
  
if ($mau == 'mau xanh'){
    echo 'day la mau xanh';
}
else if ($mau == 'mau do')
{
    echo "day la mau xanh";
}
else if ($mau == 'msu vang'){
    echo 'day la mau vang';
}
else{
    echo 'cac mau khac';
}

echo '<br><br>';

//
$so = 80; 
if ($so % 2 == 0) 
{
    if ($so > 100){ 
        echo 'so chan lon hon 100';
    }
    else if ($so < 100){ 
        echo 'so chan nho hon 100';
    }
}

?>