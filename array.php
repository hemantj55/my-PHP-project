<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $arr=array("car1","car2","car3");
   
   $arr[3]="car4";
   $arr[5]="car4";
   echo "<pre>";
   print_r($arr);
   echo "</pre>";
 
    ?>
</body>
</html>