<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tinh toan</title>
</head>
<body>
    <?php 
    echo $_POST["so"];
    $loi ="";
    $thongbao = "";
   // ktra ng dung da click hay chua
    if(isset($_POST["submit"])){
        if($_POST["number"] != ""){
            $_number = $_POST["number"];
            //dung if else de chia lay phan du 
            if($_number % 7 == 0){
                $thongbao = "chia het cho 7";
            }else{
                $loi = "khong chia het cho 7";
            }
        }
    }
    ?>
    <p class ="loi"> <?php echo $loi;?></p>
     <p class ="thongbao"> <?php echo $thongbao;?></p>
    <h2>kiem tra so chia het cho 7</h2>
    <Form action ="" method = "POST">
        <label >Nhap so:</label>
        <input type="text" name ="number">
        <button type = "submit" name = "submit">click</button>
    </Form>
</body>
</html>