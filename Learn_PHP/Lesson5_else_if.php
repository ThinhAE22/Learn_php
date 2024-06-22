<?php 
if ($month == 1) {
    echo "January";
} elseif ($month == 2) {
    echo "February";
} elseif ($month == 3) {
    echo "March";
} elseif ($month == 4) {
    echo "April";
} elseif ($month >= 5 and $month <= 8) { # These are logical operators which we will go over later
    echo "May or June, doesn't matter";
} else {
    echo "Latter half of the year";
}
?>