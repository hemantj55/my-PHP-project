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
    $a=17;
    if($a>=18){
        echo "Yes, you can vote";
    }else if($a>=17 && $a<18){
        echo "wait for one year";
    }
    else{
        echo "no, you can not vote";
    }
    echo "<br>";
    echo "Testing";
    ?>
</body>
</html>