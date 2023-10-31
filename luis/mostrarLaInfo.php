<?php
session_start();
include('fitxerconecciobd.php');
if  ($_SESSION["alta"] == false){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
        echo "Informacio del usuario"
    ?>
    </h1>
    <?php 
            $coneccio = mysqli_connect(DB_HOST, DB_USER, DB_PSW, DB_NAME);

            $ID = $_GET["user_id"];        
            $select_name = "SELECT * FROM `user` WHERE `user_id` = '$ID'";  

            $datos_user = mysqli_query($coneccio,$select_name);
            mysqli_num_rows($datos_user);

            $dato= mysqli_fetch_array($datos_user);
            
        
            if(!$coneccio){
                echo "Error de connexio: " . mysqli_connect_error();
            }else{
                echo "Id de usuario: ". $dato["user_id"]. "<br/>";
                echo "Nom: ". $dato["name"]. "<br/>";
                echo "Apellido: ". $dato["surname"]. "<br/>"; 
                echo "Email: ". $dato["email"]. "<br/>";
                echo "Rol: ".  $dato["rol"]. "<br/>";
                echo "Actiu: ". $dato["active"]. "<br/>";
                
            }
            mysqli_close($coneccio);
    ?>
    <br/>
    <a href="index.php">volver</a>

</body>
</html>