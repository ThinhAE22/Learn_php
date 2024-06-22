<?php
  $file = 'products.txt';
  if (!file_exists($file)) die('Product list not found!');
  $PRODUCTS = read_products($file);
?><!DOCTYPE HTML>
<html>
  <head>
    <title>Product List</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>

  <body>
    <h1>Product list</h1>
    <table border="1">
      <thead><tr><th>Product ID</th><th>Name</th><th>Price</th></tr></thead>

      <tbody>
      <?php
        // print products one by one
        foreach($PRODUCTS as $id => $product) {
          echo "<tr><td>$id</td>";
          echo "<td>$product[name]</td>";
          echo "<td>$product[price]</td></tr>\n";
        }
      ?>

      </tbody>
    </table>
  </body>
</html>
<?php
  function read_products($file) {
    $products = array();
    // open the file for reading
    $ref = fopen($file, 'r');
    // fgets returns FALSE at end of file
    while ($line = fgets($ref, 1024)) {
      $line = trim($line);
      if ($line == '') continue;
      // split each line into an array
      $line = explode(';', trim($line));
      $id = $line[0];
      $name = $line[1];
      $price = $line[2];
      // move the information to the product array
      $products[$id] = array('name' => $name, 'price' => $price);
    }
		fclose($ref);
    return $products;
  }
?>