<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xet danh hieu</title>
</head>
<body>
    <?php
      $dau = "";
      $rot = "";
      $loi = "";

      if(isset($_POST["submit"])){
        if($_POST["numbertoan"]!= "" && $_POST["numberly"]!= "" && $_POST["numberhoa"]!= ""){
            $toan = $_POST["numbertoan"];
            $ly = $_POST["numberly"];
            $hoa = $_POST["numberhoa"];

            // tinh tong diem
            $tong = $toan + $ly + $hoa;
            if($toan <=1 || $ly <= 1 || $hoa <= 1){
                $rot = "(ban da rot vi dinh diem liet). tong diem: $tong";
            }elseif($tong >=15){
             $dau = "da dau . tong diem: $tong";
            }else{
                $rot = "rot vi diem duoi 15 . tong diem : $tong";
            }
        }else{
            $loi = "vui long nhap day du diem";
        }
      }
    ?>
    <h2>xet diem tot nghiep</h2>

    <p class = "dau"> <?php echo $dau ;?></p>
    <p class = "rot"> <?php echo $rot ;?></p>

    <form action = "" method = "POST">
        <label >Nhap diem toan:</label>
        <input type="text" name ="numbertoan"><br></br>
        <label >Nhap diem ly:</label>
        <input type="text" name ="numberly"><br></br>
        <label >Nhap diem hoa:</label>
        <input type="text" name ="numberhoa"><br></br>
        <button type = "submit" name = "submit">kiemtra</button>
    </form>
</body>
</html>