<?php
switch ($month) {
  case 1:
    echo "January";
    break;
  case 2:
    echo "February";
    break;
  case 3:
    echo "March";
    break;
  case 4:
    echo "April";
    break;
  case 5: case 6: case 7: case 8:
    echo "May or June, doesn't matter";
    break;
  default:
    echo "Latter half of the year";
}
?>