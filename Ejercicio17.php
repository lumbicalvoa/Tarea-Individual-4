<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    

    <p><b>PRÁCTICA 17. Desarrolle la estructura de clases necesaria para un sistema de cobro de peaje de
camiones en una autopista. Los camiones llegan hasta una cabina de peaje donde se determinan el
número de ejes y el tonelaje a partir de los datos técnicos del vehículo. Los camiones deben pagar
5 euros por eje más 10 euros por tonelada de peso total del camión. En la cabina de peaje se emite un
recibo y una pantalla muestra la cantidad total correspondiente a los recibos de peaje cobrados, así
como el número total de camiones que han pasado. Sugerencia: Defina una clase camión y una clase
cabina de peaje.
</b></p>
<br><br>
    <form action="" method="post">
        <label for="">Numero de ejes</label>
        <input type="number" name="num_ejes" require><br><br>
        <label for="">Toneladas</label>
        <input type="number" name="num_Toneladas" require><br><br>
        <button name="btn_auto">Enviar</button>
        
    </form>
<?php



if (isset($_POST['btn_auto'])) {
    $num_ejes = $_POST['num_ejes'];
    $num_Toneladas = $_POST['num_Toneladas'];
    


class VehiculoMotorizado{
    
    public $num_ejes2 = array();    
    public $num_Toneladas2 = array();  

    public function guardar($num_ejes2, $num_Toneladas2){
        
        
        $this -> num_ejes2[] = $num_ejes2;
        $this -> num_Toneladas2[] = $num_Toneladas2;
    }
    public function mostrar(){
        for ($i=0; $i < count($this -> num_ejes2); $i++) { 
            self:: formato($this -> num_ejes2[$i], 
            $this -> num_ejes2[$i], 
            $this -> num_Toneladas2[$i], 
            );
        }
    }
        public function formato($num_ejes2,$num_Toneladas2){
           ?> <p>  <?php  
           $precio_ejes = 5;
           $Cant_Euro_eje = $num_ejes2 * $precio_ejes;
           $precio_Toneladas = 10;
           $Cant_Euro_toneladas = $num_ejes2 * $precio_Toneladas;
            $euro_total = $Cant_Euro_eje + $Cant_Euro_toneladas;
           echo "<br> Factura - Comercial <br> Numero del eje (5 Euro cada una) : " .$num_ejes2. 
           "<br> Cantidad a Pagar del Eje: " . $Cant_Euro_eje .
           "<br> Numero de toneladas (10 Euro por Tonelada): " . $num_Toneladas2 .
           "<br> Cantidad a Pagar por toneladas: " . $Cant_Euro_toneladas .
           "<br> Total a Pagar: " . $euro_total .
             " Euro .";
            ?> </p><?php  
        }
     }
     $VehiculoMotorizado = new VehiculoMotorizado();
     $VehiculoMotorizado -> guardar($num_ejes, $num_Toneladas);
     $VehiculoMotorizado -> mostrar();
   
} else {
    echo("Rellene el formulario (0/0)");
}

    <br><br>
    

<style>
    body p{
        color: red;
        font-size: 30px;
    }
    body p a {
        color: green;
        font-size: 32px;
    }
    body p a b{
        color: blue;
        font-size: 15px;
        }
</style>
</body>
</html>