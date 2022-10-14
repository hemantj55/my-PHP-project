<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- associate array -->
    <?php
$arr2=array(
    'name'=>'hemant kumar',
    'age'=>21,
    'status'=>true,
);

$arr2['education']="BCA";
echo "<pre>";
print_r($arr2);
echo "</pre>";
    ?>
</body>
</html>