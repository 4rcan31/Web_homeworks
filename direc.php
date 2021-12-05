    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
    <title>Resgister</title>
    </head>
    <body>

    <h1>
        
    </h1>


<?php
   // require 'index.php';
   include("index.php");
    $token = 1234;
    if($_POST["tokenreg"] == $token){
        header("Location:register.php");
    }else if($_POST["tokenreg"] != $token){
        echo "El Token es incorrecto";
             
    }

?>

  

</body>
</html>