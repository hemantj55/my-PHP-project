<?php
date_default_timezone_set("ASIA/KOLKATA");
echo "<pre>";
print_r(getdate());
echo "</pre>";

$d=getdate();

echo $d["month"];
?>