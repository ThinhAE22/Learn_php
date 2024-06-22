<!DOCTYPE HTML>
<html>
  <head>
    <title>Variables</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>

  <body>
    <p>
      <?php
        echo "PHP_SELF = " . $_SERVER['PHP_SELF'] . "<br>\n";
        
        if (isset($_SERVER['HTTP_REFERER'])) {
          echo "HTTP_REFERER = " . $_SERVER['HTTP_REFERER'] . "<br>\n";
        } else {
          echo "HTTP_REFERER = Not set<br>\n";
        }
        
        echo "HTTP_USER_AGENT = " . $_SERVER['HTTP_USER_AGENT'] . "<br>\n";
        echo "REMOTE_ADDR = " . $_SERVER['REMOTE_ADDR'] . "<br>\n";
      ?>
    </p>
  </body>
</html>
