<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
    
<header>
        <nav>
            <ul>
                <li><a href="#Motocicleta">Motocicleta</a></li>
                <li><a href="#Automovil">Automovil</a></li>
                <li><a href="#Camion">Camion</a></li>
                
            </ul>
        </nav>
    </header>


    

<main>
<div class="item" id="Motocicleta">
    <h3>Motocicleta</h3>
    
     <p> Ejercicio 19</p> 
    

    <p><b>
    PRÁCTICA 19. Declare una clase VehiculoMotorizado que sirva como clase padre para vehículos 
    de tipo Motocicleta, Automóvil y Camión. Todos los vehículos poseen un fabricante, modelo, 
    año de fabricación y kilometraje. Los automóviles son de distintos estilos y las motocicletas 
    se dedican a usos determinados. A su vez, los camiones pueden tener uno o varios remolques 
    y tienen un nivel de seguridad, dependiendo de si sobrepasan o no el número máximo de 
    pasajeros autorizados. Cree también una interfaz llamada CapacidadLimite implementada 
    por las clases Automóvil y Camión. Esta interfaz debe incluir constantes que indiquen el 
    límite de pasajeros admitidos en automóviles y camiones. Los límites para automóviles 
    deben incluir el límite de pasajeros para automóviles normales y para furgonetas. 
    Con esta estructura de clases escriba un programa principal que usando una referencia 
    polimórfica construya un objeto de clase Automóvil, Motocicleta o Camión según decisión del 
    usuario. El programa deberá imprimir la información del vehículo considerado. 
    Sugerencia: Utilice el método toString().
</b></p><br><br>
    
<form action="" method="post">
        <Label>Elija el fabricante</Label>
        <select name="Fabricante" id="" >
            <option value="Honda">Honda</option>
            <option value="Suzuki">Suzuki</option>
            <option value="Kawasaki">Kawasaki</option>
            <option value="Yamaha">Yamaha</option>
        </select><br><br>
        <label for="">Año de Fabricacion</label>
        <input type="number" value="1940" name="ano_fabricar" require><br><br>
        <label for="">Modelo</label>
        <select name="Modelo" id="">
            <option value="MOTOCROSS">MOTOCROSS</option>
            <option value="SCOOTER">SCOOTER</option>
            <option value="CHOPPER">CHOPPER</option>
            <option value="MOTOS-SPORT-TURISMO">MOTOS-SPORT-TURISMO</option>
        </select><br><br>        
        <label for="">kilometraje </label>
        <input type="number" value="4" name="Cant_pasajeros" required> km<br><br>
        <label for="">Tipo de Uso</label>
        <select name="Type_use" id="">
            <option value="Carrera">Carrera</option>
            <option value="Trabajo">Trabajo</option>
        </select><br><br>
        <button name="btn_Moto">Enviar</button>
        
    </form>
<?php



if (isset($_POST['btn_Moto'])) {
    $Fabricante = $_POST['Fabricante'];
    $ano_fabricar = $_POST['ano_fabricar'];
    $Modelo = $_POST['Modelo'];
    $Cant_pasajeros = $_POST['Cant_pasajeros'];
    $Type_use = $_POST['Type_use'];
    


class VehiculoMotorizado{
    
    public $Fabricante2 = array();    
    public $ano_fabricar2 = array();    
    public $Modelo2 = array();    
    public $Cant_pasajeros2 = array(); 
    public $Type_use2 =  array(); 

    public function guardar($Fabricante2, $ano_fabricar2, $Modelo2, $Cant_pasajeros2, $Type_use2){
        
        
        $this -> Fabricante2[] = $Fabricante2;
        $this -> ano_fabricar2[] = $ano_fabricar2;
        $this -> Modelo2[] = $Modelo2;
        $this -> Cant_pasajeros2[] = $Cant_pasajeros2;
        $this -> Type_use2[] = $Type_use2;
    }
    public function mostrar(){
        for ($i=0; $i < count($this -> Fabricante2); $i++) { 
            self:: formato($this -> Fabricante2[$i], 
            $this -> ano_fabricar2[$i], 
            $this -> Modelo2[$i], 
            $this -> Cant_pasajeros2[$i], 
            $this -> Type_use2[$i], 
            );
        }
    }
        public function formato($Fabricante2,$ano_fabricar2, $Modelo2, $Cant_pasajeros2, $Type_use2){
          


           echo "<br> Nombre del Fabricante: " .$Fabricante2. 
           "<br> Año de Fabricacion: " . $ano_fabricar2 .  
           "<br> Modelo: " .$Modelo2. " ".
           "<br> Cantidad de Pasajeros: " .$Cant_pasajeros2. 
           "<br> Tipo de uso: " .$Type_use2. " ";
             
        }
     }
     $VehiculoMotorizado = new VehiculoMotorizado();
     $VehiculoMotorizado -> guardar($Fabricante,$ano_fabricar, $Modelo, $Cant_pasajeros, $Type_use);
     $VehiculoMotorizado -> mostrar();
    

 
if (isset($_POST['Camion_pasajeros'])) {
    $Fabricante = $_POST['Fabricante'];
    $ano_fabricar = $_POST['ano_fabricar'];
    $Modelo = $_POST['Modelo'];
    $Cant_pasajeros = $_POST['Cant_pasajeros'];
    


class VehiculoMotorizado{
    
    public $Fabricante2 = array();    
    public $ano_fabricar2 = array();    
    public $Modelo2 = array();    
    public $Cant_pasajeros = array(); 

    public function guardar($Fabricante2, $ano_fabricar2, $Modelo2, $Cant_pasajeros2){
        
        
        $this -> Fabricante2[] = $Fabricante2;
        $this -> ano_fabricar2[] = $ano_fabricar2;
        $this -> Modelo2[] = $Modelo2;
        $this -> Cant_pasajeros2[] = $Cant_pasajeros2;
    }
    public function mostrar(){
        for ($i=0; $i < count($this -> Fabricante2); $i++) { 
            self:: formato($this -> Fabricante2[$i], 
            $this -> ano_fabricar2[$i], 
            $this -> Modelo2[$i], 
            $this -> Cant_pasajeros2[$i], 
            );
        }
    }
        public function formato($Fabricante2,$ano_fabricar2, $Modelo2, $Cant_pasajeros2){
           


           echo "<br> Nombre del Fabricante: " .$Fabricante2. 
           "<br> Nivel de Seguridad: " . $ano_fabricar2 .  
           "<br> Modelo: " .$Modelo2. " ".
           "<br> Remolque: " .$Cant_pasajeros2. " ";
            
        }
     }
     $VehiculoMotorizado = new VehiculoMotorizado();
     $VehiculoMotorizado -> guardar($Fabricante,$ano_fabricar, $Modelo, $Cant_pasajeros);
     $VehiculoMotorizado -> mostrar();
 
} else {
    echo("Rellene el formulario (0/0)");
}
?>
 


    
<?php  ?> 
<style>
    body p{
        color: yellow;
        font-size: 10px;
    }
    body p a {
        color: blue;
        font-size: 12px;
    }
    body p a b{
        color: black;
        font-size: 35px;
        }
</style>
</body>
</html>