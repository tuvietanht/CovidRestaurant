<?php
   header("Content-Type:text/html ; charset = utf-8");
   $db_host = "localhost";
   $db_account = "root";
   $db_password = "Binpro123";
   
   $conn = mysqli_connect($db_host,$db_account,$db_password) or die("fail");
   mysqli_query($conn , "SET NAMES 'UTF-8");
   mysqli_query($conn , "SET CHARACTER SET 'UTF-8");
   $database = ("restaurant");
   $db_select = mysqli_select_db($conn,$database) or die("資料庫選擇失敗");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "<link rel=\"stylesheet\" href=\"index.css\">" ?>
    <title>Document</title>
    <?php error_reporting(0); ?>
</head>
<body>
    <?php
    echo "<meta http-equiv=\"refresh\" content=\"900;url=http://localhost/test/add.php\">"; 
    $mainfood = $_GET['mainfood'];    
    $drin = $_GET['drink'];
    $cachua = $_GET['cachua'];
    $dualeo = $_GET['dualeo'];
    $rau = $_GET['rau'];

    //drink
    if ($drin == "coffee.jpg" ) {
        $drinkprice = 120;
        $nameb = "咖啡牛奶";
    }
    elseif ( $drin == "coconut.jpg") {
        $drinkprice = 100;
        $nameb = "椰子水";
    }
    else {$drinkprice = 80; 
          $nameb = "奶茶";}
    
    //mainfood
    if ($mainfood == "comtam.jpg" ) {
        $mainfoodprice = 350;
        $namea = "碎米飯";
    }
    elseif ( $mainfood == "bunbo.jpg") {
        $mainfoodprice = 340;
        $namea = "顺化牛肉粉";
    }
    else {$mainfoodprice = 330;
        $namea = "魚米線"; } 
    ?> 
    <table  width="20%">
    <thead>
    <tr>
        <th> Food </th>
        <th> Money </th>
        <th> Values </th>
        <th> Total </th>
    </tr>
    </thead>

<tbody>
<tr>     
    <td> <?php echo $namea ?> </td>
    <td> <?php echo $mainfoodprice    ?>  </td>
    <td> <?php echo 1  ?> </td>
    <td> <?php echo $mainfoodprice  ?> </td>   
</tr>

<tr>     
    <td> <?php echo $nameb ?> </td>
    <td> <?php echo $drinkprice   ?> </td>
    <td> <?php echo 1 ?>  </td>
    <td> <?php echo $drinkprice   ?> </td>    
</tr>

<?php 
    if($cachua != 0 ){
    $a = $cachua * 20;
  echo   "<tr>" ;   
  echo  "<td> 西紅柿 </td>";
  echo  "<td>   20   </td>";
  echo  "<td>  $cachua </td>";
  echo  "<td>  $a  </td>" ;
  echo   "</tr>";
 }
?>

<?php 
    if($dualeo != 0 ){
    $b = $dualeo * 20;
  echo   "<tr>" ;   
  echo  "<td>  黃瓜  </td>";
  echo  "<td>   20    </td>";
  echo  "<td>  $dualeo </td>";
  echo  "<td>  $b  </td>" ;
  echo   "</tr>";
 }
?>

<?php 
    if($rau != 0 ){
    $c = $rau * 30;
  echo   "<tr>";   
  echo  "<td>  什錦菜  </td>";
  echo  "<td>   30    </td>";
  echo  "<td>  $rau </td>";
  echo  "<td>  $c  </td>" ;
  echo   "</tr>";
 }
?>

<tr>  
    <td> <?php echo "Service fee" ?>  </td>
    <td> <?php echo  50 ?> </td>
    <td>  </td>
    <td> <?php echo  50  ?> </td>    
</tr>
</tbody>
</tfoot>
<tr>  
    <?php      
    echo "<td  colspan=\"2\" class=\"tfoot\">". "</td>";
  
    echo "<td class=\"tfoot\">" . ($d1 =  1 + 1 + $cachua + $dualeo + $rau  ) . "</td>";
    echo "<td class=\"tfoot\">" . ($d2 =  $mainfoodprice +$drinkprice + $c + $a + $b + 50) . "</td>";
    ?>
</tr>
<tfoot>
</table> 
 <?php
 $sql_str = "INSERT INTO `clients` (`Mainfood` ,`Beverage`,`Tomato`,`Cucumber`,`Vegetable`,`Total` ) VALUES ('$namea','$nameb','$cachua','$dualeo','$rau','$d2')";
 mysqli_query($conn,$sql_str);
 ?>
    <h2 align="center" > Automatic close in 15mins </h2>
</body>
</html>