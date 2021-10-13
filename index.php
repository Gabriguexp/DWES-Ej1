<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registro 1/4</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <header id="headerPag1">
                <h1>Introduzca sus datos de usuario</h1>
            </header>
            <form method="post" action="pag2.php">
                <label for="usuario">Usuario</label> <br>
                <input required type="text" name="usuario"/> <br> <br>
                <label for="pass">Clave</label> <br> 
                <input required  type="password" name="pass"/> <br> <br>
                <label for="repass">Repite clave</label> <br>
                <input required type="password" name="repass"/> <br> <br>
                <input class="button" type="submit" name="submit" /> <br>
            </form>
            <br>
            <footer>
                <span>Pag 1/4</span>
            </footer>
        </div>
    </body>
</html>