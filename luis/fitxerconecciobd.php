<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "dbconf.php";

        $user_id = $_POST['user_id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $rol = $_POST['rol'];
        $active = $_POST['active'];
        $datos_user;

        //FEM LA CONEXIO A LES BBDD
        $coneect = mysqli_connect(DB_HOST, DB_USER, DB_PSW, DB_NAME);

            //FEM UNA SELECT PER RETORNAR TOTS ELS PRODUCTES
            $query = "INSERT INTO `user`(`user_id`, `name`, `surname`, `password`, `email`, `rol`, `active`) 
            VALUES ($user_id,'$name','$surname','$password','$email','$rol','$active')";
            
            $mostrar= "SELECT * FROM USER";

            if(!$coneect){
                echo "Error de connexio: " . mysqli_connect_error();
            
            }else{
                echo "funciona";
                $datos_user=mysqli_query($coneect, $query);
                header('location: login.php');
            }
            mysqli_close($coneect);

    ?>
</body>
</html>