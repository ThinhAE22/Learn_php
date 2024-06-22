<?php
  function references($param, &$refparam) {//reference to refparam
    $param = 'new parameter value';
    $refparam = 'new reference parameter value';
  }
  $var1 = 'Old value of parameter 1';
  $var2 = 'Old value of parameter 2';
  references($var1, $var2);
  echo "\$var1 = $var1<br>\$var2 = $var2<br>";
?>