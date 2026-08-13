<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //bai7 
    $student = array(
        array(
            'name' => 'nguyen van cuong',
            'age' => '15',
            'email' => 'cuong@gmail.com',
        ),
        array(
            'name' => 'nguyen van cuong1',
            'age' => '16',
            'email' => 'cuongffr@gmail.com',
        )
    );
    ?>
    

     <table border = "1"; >
         <thead>
             <tr>
              <th> name</th>
               <th>age</th>
              <th>email</th>
             </tr>
         </thead>
         <tbody>
             <!-- <?php   
            for($i = 0; $i < count($student); $i++){
            ?>
                <tr>
                   <td> <?php echo $student[$i]['name']; ?> </td>
                   <td> <?php echo $student[$i]['age']; ?> </td>
                   <td> <?php echo $student[$i]['email']; ?> </td>
                </tr>
                <?php
            }
            ?>
              -->
            // cach 2
            <?php
             for($i = 0; $i < count($student); $i++){
                echo "<tr>" .
                           "<td>" . $student[$i]['name'] . "</td>" .
                         "<td>" . $student[$i]['age'] . "</td>" .
                         "<td>" . $student[$i]['email'] . "</td>" .
                      "</tr>";
             }
             ?>

              <!--//cach3
             <?php
            $html = "";
            for($i = 0; $i < count($student); $i++){
                $html .= "<tr>" .
                            "<td>" . $student[$i]['name'] . "</td>" .
                            "<td>" . $student[$i]['age'] . "</td>" .
                            "<td>" . $student[$i]['email'] . "</td>" .
                         "</tr>";
            }
            echo $html;
            ?>      -->
         </tbody>
     </table>

</body>
</html>