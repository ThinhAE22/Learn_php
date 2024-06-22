<?php
    $t = array("cookie", "cake", "pie");
    $u = array("mn" => "Matt Namely",
               "wt" => "William Tapeman",
               "su" => "Sam Uncle");
    echo "The dude is called on $u[su].";
    //for loops
    for ($i = 0; $i < 3; $i++) {
        echo $t[$i] . "<br>\n";
    }
?>