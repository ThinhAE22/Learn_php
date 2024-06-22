<?php
  $a = 10;
  $b = 20;
  $c = 10.0;

  echo "$a == $b: " . ($a==$b ? "true" : "false") . "<br>\n";
  echo "$a == $c: " . ($a==$c ? "true" : "false") . "<br>\n";
  echo "$a === $c: " . ($a===$b ? "true" : "false") . "<br>\n";
  echo "$a != $b: " . ($a!=$b ? "true" : "false") . "<br>\n";
  echo "$a != $c: " . ($a!=$c ? "true" : "false") . "<br>\n";
  echo "$a < $b: " . ($a<$b ? "true" : "false") . "<br>\n";
  echo "$a > $b: " . ($a>$b ? "true" : "false") . "<br>\n";
  echo "$a <= $b: " . ($a<=$b ? "true" : "false") . "<br>\n";
  echo "$a <= $c: " . ($a<=$c ? "true" : "false") . "<br>\n";
  echo "$a >= $b: " . ($a>=$b ? "true" : "false") . "<br>\n";
  echo "$a >= $c: " . ($a>=$c ? "true" : "false") . "<br>\n";
?>