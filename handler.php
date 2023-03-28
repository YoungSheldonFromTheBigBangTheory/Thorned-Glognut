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
    echo "<h1>The area is ".$userName."!</h1>\n";
    echo "<h1>The circumference is ".$userName."!</h1>\n";
    ?>
    
  </body>
  
</html>