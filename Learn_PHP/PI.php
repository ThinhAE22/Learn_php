<?php
  $interests = array('fishing', 'hunting', 'gardening', 'resting');
?><!DOCTYPE HTML>
<html>
  <head>
    <title>Personal information</title>

  </head>
  <body>
    <form action="show_fields.php" method="post">
      <table>
        <tr>
          <td>Name:</td>

          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>Address:</td>
          <td><input type="text" name="address"></td>

        </tr>
        <tr>
          <td>Postal code:</td>
          <td><input type="text" name="pcode" size="6">
            Region: <input type="text" name="region" size="20">

          </td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email"></td>

        </tr>
      </table>
      <p>
        Your interests:<br>
        <?php
          for ($i = 0; $i < count($interests); $i++) {
            echo "<input type=\"checkbox\" name=\"interest$i\">\n";
            echo $interests[$i] . "<br>\n";
          }
        ?>

      </p>
      <p>
        <input type="submit" value="Send">
        <input type="reset" value="Clear">
      </p>
    </form>

  </body>
</html>