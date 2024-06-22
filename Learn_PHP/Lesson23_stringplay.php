<?php
$string = $_GET['string'];
$mode = $_GET['mode'];

$strarr = explode(' ', $string);

if ($mode == 1) {
    echo strtolower(implode(" ", $strarr));
} else if ($mode == 2) {
    echo strtoupper(implode(" ", $strarr));
} else if ($mode == 3) {
    echo strrev(strtolower(implode(" ", $strarr)));
} else if ($mode == 4) {
    echo strrev(strtoupper(implode(" ", $strarr)));
}
?>