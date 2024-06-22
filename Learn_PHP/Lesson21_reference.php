<?php 
  $name = 'Jack';
  $ref =& $name;
  $ref = 'Mike';
  echo "\$name = $name<br>\$ref = $ref<br>";
?>