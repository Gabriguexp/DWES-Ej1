<!doctype html>
<?php 
    if(isset($_POST['submit'])){
        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
    } else {
        header('Location: pag2.php');
    }
    
    $intereses = ['Videojuegos', 'Politica', 'Coches', 'Diseño', 'Informatica', 'PHP'];
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
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
                <input type="hidden" name="usuario" value="<?php echo $usuario?>"/>
                <input type="hidden" name="pass" value="<?php echo $pass?>"/>
                <input type="hidden" name="repass" value="<?php echo $repass?>"/>
                <input type="hidden" name="nombre" value="<?php echo $nombre?>"/>
                <input type="hidden" name="apellidos" value="<?php echo $apellidos?>"/>
                <input type="hidden" name="correo" value="<?php echo $correo?>"/>
                <br> 
                <input class="button" type="submit" name="submit"/>
            </form>
            <br>
            <footer>
                <span>Pag 3/4</span>
            </footer>
        </div>
    </body>
</html>