<!doctype html>

<?php 

if(isset($_POST['submit'])){
    unset($_POST['submit']);
    /*$usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass']; */
} else {
    header('Location: index.php');
    
}
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css" type="text/css" />

    </head>
    <body>
        <div id="container">
            <header id="headerPag2">
                <h1>Introduzca sus datos personales</h1>
            </header>
            <form method="post" action="pag3.php">
                <label for="nombre">Nombre</label> <br> 
                <input required  type="text" name="nombre"/> <br> <br> 
                <label for="apellidos">Apellidos</label> <br>
                <input required  type="text" name="apellidos"/> <br> <br> 
                <label for="correo">Email</label> <br> 
                <input required  type="text" name="correo"/> <br> <br> 
                <?php 
                    foreach($_POST as $index => $value){
                        echo "<input type=\"hidden\" name=\"$index\" value=\"$value\">";
                    }
                ?>

                
                <input class="button" type="submit" name="submit"/>
            </form>
            <br>
            <footer>
                <span>Pag 2/4</span>
            </footer>
        </div>
    </body>
</html>