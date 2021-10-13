<!doctype html>
<?php 
    if(isset($_POST['submit'])){

        unset($_POST['submit']);
        /*$usuario = $_POST['usuario'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo']; */
    } else {
        header('Location: pag2.php');
    }
    
    $intereses = ['Videojuegos', 'Politica', 'Coches', 'Diseño', 'Informatica', 'PHP'];
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registro 3/4</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <div id="container">
        <header id="headerPag3">
            <h1>Marque sus intereses</h1>
        </header>            
            <form method="post" action="pag4.php">
                
                <?php 
                foreach ($intereses as $indice => $valor){
                    echo "<label for=\"$valor\">$valor</label>
                    <input class=\"checkbox\" type=\"checkbox\" name=\"$valor\"/><br/><br/>";
                }
                ?>

                <br> 
                <?php 
                    foreach($_POST as $index => $value){
                        echo "<input type=\"hidden\" name=\"$index\" value=\"$value\">";
                    }
                ?>
                <input class="button" type="submit" name="submit"/>
            </form>
            <br>
            <footer>
                <span>Pag 3/4</span>
            </footer>
        </div>
    </body>
</html>