<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  //   echo $_GET["email"].$_GET["pass"]
  //   echo $_POST["email"]."---".$_POST["pass"]
  $data = $_REQUEST;
  echo "<pre>";
  var_dump($data);

  echo $data["email"];
  $err1 = $err2 ="";
   

  if(isset($_POST["submit"])){
    $x = 1;
    //echo"da click form";
    if(empty($_POST["email"])){
        $err1 = "vui long nhap email";
        $x =2;
    }
    if(empty($_POST["pass"])){
        $err2 ="vui long nhap pass";
        $x = 3;
    } 
  }

 // if(!empty($_POST["email"]) && !empty($_POST["pass"])){
 // toi uu hown
    if($x ==1){
    $msg ="thanh cong";
  }

    ?>
    <p><?php echo $msg ; ?></p>
  <form action ="" method ="POST">
    <input type="text" name ="email">
    <p> <?php echo $err1; ?></p>
     <input type="text" name ="pass">
    <p> <?php echo $err2; ?></p>

    <button type= "submit" name ="submit">click</button>

  </form>
</body>
</html>