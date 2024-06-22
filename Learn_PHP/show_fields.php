<!DOCTYPE HTML>
<html>

  <head><title>Show form information</title></head>
  <body>
    <p>
      Form:
      <strong><?php
        echo $_SERVER['HTTP_REFERER'];
      ?></strong>

    </p>
    <?php 
      if (count($_GET) > 0) {
    ?>
    <table border="1">
      <caption>GET</caption>
      <tbody>

      <?php
        foreach ($_GET as $name => $value) {
          $value = htmlspecialchars($value);
          echo "<tr><td>$name</td><td>$value</td></tr>\n";
        }
      ?>
      </tbody>

    </table>
    <?php
      }
      if (count($_POST) > 0) {
    ?>
    <table border="1">
      <caption>POST</caption>
      <tbody>

      <?php
        foreach ($_POST as $name => $value) {
          $value = htmlspecialchars($value);
          echo "<tr><td>$name</td><td>$value</td></tr>\n";
        }
      ?>
      </tbody>

    </table>
    <?php
      }
     ?>
  </body>
</html>