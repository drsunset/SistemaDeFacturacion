<?php

if($_POST){
$cantidad = $_POST['cantidad'];
$montoint = $_POST['interes'] / 100;
$meses = $_POST['tiempoTotal'];
$semanas = $meses * 4 ;
$quincenas = $meses * 2;
// $tiempoPagoSemanal = $semanas / 15;
$interes = $montoint * $meses;
$cuotas = $montoTotal / $semanas;
}
  function contarMeses($meses)
  {
        while($a < $meses)
        {

            $a += 1;
            echo "<li>Mes $a :". date('Y-m-d',  strtotime("+ $a month "))."</li>";
        }
  }

  function contarQuincenas($quincenas)
  {
      while($a < $quincenas)
        {
            $i += 15;
            $a += 1;
            echo "<li>Quincena $a :". date('Y-m-d',  strtotime("+ $i days "))."</li>";
        }
  }

  function contar($semanas)
  {
      while ($a < $semanas)
      {
            $a += 1;
            echo "<li>Semana $a :". date('Y-m-d',  strtotime("+ $a week"))."</li>";
      }
  }

  function prestamo($cantidad, $montoint, $meses, $semanas, $tiempoPagoSemanal, $interes){


        error_reporting(E_ERROR | E_PARSE);
        $mostrarInteres = $cantidad * $interes;
        $montoTotal = $cantidad * $interes + $cantidad;
        $cuotas = $montoTotal / $semanas;
        echo " MONTO TOTAL = $montoTotal RD$ <br>";
        echo " TIEMPO EN MESES = $meses <br>";
        echo " CUOTAS SEMANALES = $semanas <br>";
        echo " INTERES TOTAL A PAGAR = $mostrarInteres <br>" ;
        echo "porciento de interes:  " . ($montoint * 100) . "% <br>";
        echo "COSTO POR CUOTA: " . ceil($cuotas)." RD$" ;






  }
  function ejecutar($semanas, $quincenas, $meses)
  {

        if(isset($_POST['seleccion'])){
          $seleccion = $_POST['seleccion'];
          switch($seleccion){
            case '1':
            contar($semanas);
            break;
            case '2':
            contarQuincenas($quincenas);
            break;
            case '3':
            contarMeses($meses);
            break;
            default:
            contar($semanas);
            break;
          }
        }

        if($_POST['seleccion']==1)
        {
          contar($semanas);
        }
        elseif($_POST['seleccion']==2)
        {
          contarQuincenas($quincenas);
        }
        elseif($_POST['seleccion']==3)
        {
          contarMeses($meses);
        }



  }




require 'index.view.php';
?>
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>

       <style media="screen">
            *{
              font-family: sans-serif;
            }
           .semana{

             margin-bottom:25px ;
             float: left;
            }
          .contarQuincenas{
               float: right;
            }

       </style>
 </head>

 <body>
       <div class="semanas">
               <ol>
                 <?php contar($semanas) ?>
               </ol>

               <ol>
                 <?php contarQuincenas($quincenas) ?>
               </ol>

               <ol>
                 <?php contarMeses($meses) ?>
               </ol>
       </div>
 </body>
 </html> -->
