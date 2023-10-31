<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>Document</title>
</head>
<body>
    <form method="POST" action="fitxerconeciobd.php">
        <div>
            <label for="user_id">user_id</label><br>
            <input type="number" id="user_id" name="user_id">
        </div>
        <div>
            <label for="name">name</label><br>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="surname">surname</label><br>
            <input type="text" id="surname" name="surname">
        </div>
        <div>
            <label for="password">password</label><br>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="email">email</label><br>
            <input type="text" id="email" name="email">
        </div>
        <div><br>
            <label for="rol">Rol</label><br>
            <select name="rol" id="rol">
                <option value="alunnat">Alunnat</option>
                <option value="profesorat">Profesorat</option>
            </select>
        </div><br>
        <div>
            <label for="active">Estado:</label>
            <input type="radio" id="active" name="active" value="1" required>
            <label for="active">Activo</label>
            <input type="radio" id="bloqueado" name="active" value="0" required>
            <label for="bloqueado">Bloqueado</label><br><br>
        </div><br>
        <input type="submit" value="submit">
    </form>
    <div>
        <a href = "login.php">Ya he creado una cuenta</a>
    </div>

</body>
</html>