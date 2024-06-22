<?php
  $t = array("zero", "one", "two");
  $u = array("fruit" => "apple", "crop" => "rye", "berry" => "raspberry");

  foreach ($t as $value) {
    echo "$value<br>";
  }
  echo "<br>\n";

  foreach ($t as $key => $value) {
    echo "$key -> $value<br>";
  }
  echo "<br>\n";

  foreach ($u as $value) {
    echo "$value<br>";
  }
  echo "<br>\n";

  foreach ($u as $key => $value) {
    echo "$key -> $value<br>";
  }
?>