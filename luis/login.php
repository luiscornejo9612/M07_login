<!-- <?php
session_start();
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>

    <form action="validate.php" method="post">
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">password</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <input type="checkbox" id="remenber me" name="remenber me">
        <label for="checkbox">Remembre me</label>
    </div>
    <div>
        <button type="submit" name="enviar">Enviar</button>
    </div>
    </form>
    <a href="register.php">regístrate</a>
    
</body>
</html>