<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejempplos de Php</title>
    <style>
        h4{color: blue; text-align: center}
        hr{color: cornflowerblue}
    </style>
</head>
<body>

    <?php
        //Los comentarios en Php de una linea son asi
        /*Los comentarios
        multilinea en Php
        Son de esta Manera
        */
    ?>

<h4>Programa en PHP que calcula el área de un triangulo</h4>
    <?php
        $Base=15;
        $Altura=12;
        $Area = ($Base * $Altura)/2;
        echo "El area del triangulo es: ".$Area;
    ?>
<hr>

<h4>Programa que calcula el Máximo de los elementos del vector</h4>
    <?php
        function maximo_valor_array($vector){
            $maximo=$vector[0];
            $cont=count($vector);
            for ($i=1; $i<$cont; $i++){
                if ($vector[$i]>$maximo){
                    $maximo = $vector[$i];
                }

            }
            return $maximo;
        }
        $maximo=array(2,9,7,4,8);
        echo "El máximo valor del array es: ".maximo_valor_array($maximo)
    ?>
<hr>

<h4>Programa que calcula la cantidad de elementos y los muestra</h4>
    <?php
        $ciudad[] = "Sogamoso";
        $ciudad[] = "Duitama";
        $ciudad[] = "Tunja";
        $ciudad[] = "Paipa";
        $n = count($ciudad);
        echo "Numero de elementos: ".$n;
        for ($i=0; $i<$n; $i++)
            echo "<br> Ciudad ".$i." ".$ciudad[$i];

    ?>
<hr>

<h4>Programa que usa Whiles</h4>
    <?php
        $i=1;
        while($i<=5):
            $j=1;
            while($j<=$i):
                echo"*&nbsp&nbsp";
                $j++;
            endwhile;
            echo"<br>";
            $i++;
        endwhile;
    ?>
<hr>

<h4>Programa que usa condicion if,else,elseif</h4>
    <?php
    $a = 8;
    $b = 8;
    if ($a > $b):
        echo $a." es mayor que ".$b;
    elseif ($a == $b):
        echo $a." es igual a ".$b;
    else:
        echo $a." no es ni mayor ni igual a ".$b;
    endif;
    ?>
<hr>

<h4>Programa que usa Witch con los dias de la semana</h4>
    <?php
    $numero_dia = 0;
    $nombre_dia = "";
    switch ($numero_dia) {
    case 1:
        $nombre_dia = "Lunes";
        echo $nombre_dia;
        break;
    case 2:
        $nombre_dia = "Martes";
        echo $nombre_dia;
        break;
    case 3:
        $nombre_dia = "Miércoles";
        echo $nombre_dia;
        break;
    case 4:
        $nombre_dia = "Jueves";
        echo $nombre_dia;
        break;
    case 5:
        $nombre_dia = "Viernes";
        echo $nombre_dia;
        break;
    case 6:
        $nombre_dia = "Sábado";
        echo $nombre_dia;
        break;
    case 7:
        $nombre_dia = "Domingo";
        echo $nombre_dia;
        break;
    default:
        $nombre_dia = "No sabemos que día es";
        echo $nombre_dia;
    }
    ?>
<hr>

<h4>Foreach con array y condiciones</h4>
    <?php
    $datos_de_juan = array('Apellido' => 'Pérez',
        'Fecha de nacimiento' => '23-11-1970',
        'Teléfonos' => array('Casa' => '4310-9030',
            'Móvil' => '15 4017-2530',
            'Trabajo' => '4604-9000'),
        'Casado' => True,
        'Pasaporte' => False,
    );
    foreach($datos_de_juan as $titulo => $dato) {
        if(!is_array($dato)) {
            if($dato === True) {
                $dato = 'SI';
            } else if ($dato === False) {
                $dato = 'NO';
            }
            echo "{$titulo}: {$dato}<br>" . chr(10);
        } else {
            foreach($dato as $tipo_telefono => $numero) {
                echo "Teléfono {$tipo_telefono}: {$numero}<br>" . chr(10);
            }
        }
    }
    ?>
    <hr>

</body>
</html>