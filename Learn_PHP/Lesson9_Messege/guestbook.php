<?php
#type conversion $i = (int) $x;
$name = trim($_GET["name"]);
$messege = trim($_GET["msg"]);

if ($name == "" || $name == "Guest" || $messege == "") { 
    echo "You didn't fill all fields!";
} else {
    echo $name. ": " ;
}

if ($messege != "" && $name != "") { 
    echo $messege;
} 
?>