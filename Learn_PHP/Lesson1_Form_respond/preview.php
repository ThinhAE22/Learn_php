<!DOCTYPE HTML>
<?php
  $name = trim($_POST["name"]);
  $address = $_POST["address"] . ", " .
            $_POST["pcode"] . " " . $_POST["region"];
  $email = trim($_POST["email"]);
?>
<html>
  <head>

    <title>Preview</title>
  </head>
  <body>
    <h1>Personal info preview</h1>
    <p>

       Name: <?php
       if ($name == "") { 
         echo "<b>Name missing!</b>";
       } else {
         echo $name;
       }
       ?><br>
       Address: <?php echo $address;  ?><br>
       Email: <?php
       if ($email == "") { 
         echo "<b>Missing email!</b>";
       } else {
         echo $email;
       }
       ?>
    </p>
    <p>
  Your interests are:
    </p>
    <ul>
      <?php
        $count = 5;
        $i = 1;
        while ($i <= $count) {
          echo "<li>" . $_POST["interest$i"] . "</li>\n";
          $i++;
        }
      ?>

    </ul>
  </body>
</html>