<?php 
$num = trim($_GET["num"]);
if ($num < 0) {
    echo "The number has to be at least zero!";
} else {
    while ($num >= 0) {
        echo $num . " ";
        $num--;
    }
}
?>
