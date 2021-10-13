<?php 
    if (!isset($_POST['submit'])){
        header('Location: pag3.php');
    }

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <div id="container">
        <header id="headerPag4">
            <h1>Resultados de registro.</h1>
        </header>            
            <?php 
            $valores = $_POST;
            unset($valores['submit']);
            echo "<span>Nombre de usuario: ".$valores["usuario"]."</span><br/><br/>";
            echo "<span>Nombre: ".$valores["nombre"]."</span><br/><br/>";
            echo "<span>Apellidos: ".$valores["apellidos"]."</span><br/><br/>";
            echo "<span>Correo electronico: ".$valores["correo"]."</span><br/><br/>";
            if ($valores["pass"] == $valores["repass"]){
                echo "<span class=\"success\">Las dos claves coinciden</span><br/><br/>";
            } else {
                echo "<span class=\"warning\">Las dos claves no coinciden</span><br/><br/>";
            }
            unset($valores["usuario"]); 
            unset($valores["nombre"]); 
            unset($valores["apellidos"]); 
            unset($valores["correo"]);
            unset($valores["pass"]);
            unset($valores["repass"]);
            $intereses = count($valores);
            if ($intereses > 0){
                $linea = "Intereses: " ;
            
                foreach ($valores as $index => $value){
                    $linea = $linea.$index.", ";
                }  
                $linea = substr_replace($linea ,".",-2);
                echo $linea;
            } else{
                echo "No te interesa nada de la lista anterior.";
            }

            ?>
            <br><br/>
            <footer>
                <span>Pag 4/4</span>
            </footer>
        </div>
    </body>
</html>