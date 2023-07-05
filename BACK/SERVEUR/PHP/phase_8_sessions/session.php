<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
    //Ouvrir une session
    session_start();
    $_SESSION["login"]="webmaster";
    $_SESSION["password"]="Formation";
    echo $_SESSION["login"]."<br>";
    echo $_SESSION["password"]."<br>";
    echo"- session ID : ".session_id();


    //$_SESSION["role"] = "admin";

    //echo"- session ID : ".session_id();
    
    ?>
    
</body>
</html>