<?php
session_start();
include "dbconf.php";


$password= $_POST['password'];
$email= $_POST['email'];

$coneccio = mysqli_connect(DB_HOST, DB_USER, DB_PSW, DB_NAME);

$select_name = "SELECT * FROM `user` WHERE `email` = '$email' and `password` = '$password'";  

$datos_user = mysqli_query($coneccio, $select_name);
mysqli_num_rows($datos_user);
$dato=mysqli_fetch_array($datos_user);
try {
    if (!$coneccio) {
        echo "Error de conexión: " . mysqli_connect_error();
    } else {
        if ($datos_user && mysqli_num_rows($datos_user) > 0) {
            $_SESSION["alta"] = true;
            $_SESSION["nombre"]= $dato["name"];
            $_SESSION["rol"]= $dato["rol"];
            $_SESSION["user_id"]=$dato["user_id"];
            header('location: index.php');
            
        } else {
            
            include "login.php";
            echo "<br>";
            echo "<p>Error no estas registrado </p>";
        }
    }
} catch (Exception $e) {
    echo "Excepcio: " . $e -> getMessage();
}finally{
    mysqli_close($coneccio);
}

?>