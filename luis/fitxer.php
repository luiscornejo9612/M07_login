<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //CONSTANS DE LA CONNEXIO A LES BBDD  
        define("DB_HOST","localhost");
        define("DB_NAME", "users");
        define("DB_USER", "root");
        define("DB_PSW", '');


        $user_id = $_POST['user_id'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $rol = $_POST['rol'];
        $active = $_POST['active'];

        //FEM LA CONEXIO A LES BBDD
        $coneect = mysqli_connect(DB_HOST, DB_USER, DB_PSW, DB_NAME);

        if (!$coneect) {
            echo "Error de connexio: ". mysqli_connect_error();
        }
        else{
            //FEM UNA SELECT PER RETORNAR TOTS ELS PRODUCTES
            $query = "INSERT INTO `user`(`user_id`, `name`, `surname`, `password`, `email`, `rol`, `active`) 
            VALUES ($user_id,'$name','$surname','$password','$email','$rol','$active')";
            if (mysqli_query($coneect, $query)) {
                echo "Ben fet";
            } else {
                echo "Error  " . mysqli_error($coneect);
            }
        }

    ?>
</body>
</html>