<!DOCTYPE HTML>
<html>
<head>
<title>Printing an array</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<p><?php
  $t = array('weasel', 'otter', 'squirrel', 'beaver');
  $num = array(1, 2, 4, 8, 16, 32, 64);
  echo print_array($t, ', ', ' ja ') . "<br>\n";
  echo print_array($num, ' -> ');
?></p>
</body>

</html>
<?php
  function print_array($array, $separator = ', ', $last_sep = NULL) {
    if (is_null($last_sep)) { // if none entered, same as other separators
      $last_sep = $separator;
    }
    $values = array_values($array); // print only values in array
    $count = count($values); // lasketaan alkioiden count
    if ($count == 0) {  // an exception, empty array
      return '';
    } elseif ($count == 1) {  // also an exception, single element in array
      return "$values[0]";
    } else {
      $result = ''; // build the result here
      for($i = 0; $i < $count - 2; $i++) { // all but last two
        $result .= $values[$i] . $separator;
      }
      $result .= $values[$count-2] . $last_sep . $values[$count-1]; // last two
    }
    return $result;
  }
?>