<?php
session_start();   
include "fitxerconecciobd.php"; 
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
    <h2><?php
        echo "Hola " . $_SESSION["nombre"] . " eres ". $_SESSION["rol"];
    ?></h2>

    <?php
        $coneect = mysqli_connect(DB_HOST, DB_USER, DB_PSW, DB_NAME);
        $select_name = "SELECT * FROM `user` WHERE `rol` = 'alunnat'";  
        $datos_user = mysqli_query($coneect,$select_name); 
        mysqli_num_rows($datos_user);
        $dato=mysqli_fetch_array($datos_user);

    ?>

    <?php
        if ($_SESSION["rol"] == "profesorat") {
    ?>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
            <?php
            foreach ($datos_user as $i => $datoUser) {
            ?>
                <tr>
                    <td><?php echo $datoUser["name"]; ?></td>
                    <td><?php echo $datoUser["surname"]; ?></td>
                    <td><?php echo $datoUser["email"]; ?></td>
                </tr>
        <?php
        } 
        ?>
    </table>
<?php
} 
?>

<br/>
<a href="http://localhost/M07_login/luis/mostrarLaInfo.php?user_id=<?php echo $_SESSION['user_id']; ?>">Mostrar información</a>
<a href="desconectar.php">Desconectar</a>

</body>
</html>