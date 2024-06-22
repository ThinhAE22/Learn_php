<?php
  // let's include the product list
  @include('product.php');
  if (!isset($PRODUCTS)) die('Product list not found!');
?><!DOCTYPE>
<html>
  <head>

    <title>Product list</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
    <h1>Product list</h1>

    <table border="1">
      <thead><tr><th>Product ID</th><th>Name</th><th>Price</th></tr></thead>

      <tbody>
      <?php
        // print products one by one
        foreach($PRODUCTS as $id => $tuote) {
          echo "<tr><td>$id</td>";
          echo "<td>$tuote[name]</td>";
          echo "<td>$tuote[price]</td></tr>\n";
        }
      ?>

      </tbody>
    </table>
  </body>
</html>