<!DOCTYPE html>
<html>

<head>
</head>


<body>
    
    <?php
    $userName = "";
    if ( isset( $_POST['userName'] ) ){
      $userName = $_POST['userName'];
    }
    $r = $username/2;
    echo "<h1>The area is ".(pi($r ** 2))."!</h1>\n";
    echo "<h1>The circumference is ".(pi($r) * 2)."!</h1>\n";
    ?>
    
  </body>
  
</html>