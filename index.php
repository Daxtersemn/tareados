<html>
    <body>
    <?php
    require "codigo.php";
    $resolver = new Operaciones;
	$tarea = new tarea;
        echo $resolver->convertirdolar(75);
        echo "<br>";
        echo $resolver->sumar(75);
        echo "<br>";
		echo $tarea->buenas(0);
        ?>
    </body>
<html>