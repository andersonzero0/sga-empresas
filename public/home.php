<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    
    <title>Home</title>
</head>
<body>

    <?php
        session_start();

        require "src/functions/functions.php";

        if(isset($_SESSION['tokenUser']) && isset($_SESSION['type_user'])) {

            $datasUser = getDatasUser($_SESSION['tokenUser']);

            include "src/views/header.php";

            if ($_SESSION['type_user'] == "RECRUTADOR") {

                include "src/views/recrutadorView.php";
                
            } elseif ($_SESSION['type_user'] == "CANDIDATO") {

                include "src/views/candidatoView.php";
                
            }
            
        } else {

            echo 0;
            
        }
    ?>

</body>
</html>