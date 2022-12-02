<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <h4>
    <p>	
 Ejercicio 14</p>
     

    

    <p><b>PRÁCTICA 14. Desarrolle un programa que permita representar una serie de alumnos. Para cada alumno se debe poder especificar su nombre, número de DNI y recoger la calificación obtenida en los dos
parciales que se hacen en el curso. El programa debe evaluar la nota media de cada estudiante y la nota
media promedio de todos los estudiantes del curso. Sugerencia: Implemente una clase Alumno que
contenga las características especificas de cada alumno. Además, codifique una clase Curso donde
una de sus variables de ejemplar sea una matriz de alumnos. En esta clase se debe calcular la nota
media del curso.
</b></p>
<?php

    
class Alumnos{
    
    public $Nombre_y_Apellido_Alumno = array();    
    public $DNI_Alumno = array();    
    public $Primer_Parcial_Alumno = array();    
    public $Segundo_Parcial_Alumno = array(); 

   
    public function guardar($Nombre_y_Apellido_Alumno, $DNI_Alumno, $Primer_Parcial_Alumno, $Segundo_Parcial_Alumno){
        
        
        $this -> Nombre_y_Apellido_Alumno[] = $Nombre_y_Apellido_Alumno;
        $this -> DNI_Alumno[] = $DNI_Alumno;
        $this -> Primer_Parcial_Alumno[] = $Primer_Parcial_Alumno;
        $this -> Segundo_Parcial_Alumno[] = $Segundo_Parcial_Alumno;
    }
    public function mostrar(){
        for ($i=0; $i < count($this -> Nombre_y_Apellido_Alumno); $i++) { 
            self:: formato($this -> Nombre_y_Apellido_Alumno[$i], 
            $this -> DNI_Alumno[$i], 
            $this -> Primer_Parcial_Alumno[$i], 
            $this -> Segundo_Parcial_Alumno[$i], 
            );
        }
    }
        public function formato($Nombre_y_Apellido_Alumno,$DNI_Alumno, $Primer_Parcial_Alumno, $Segundo_Parcial_Alumno){
           ?> <p>  <?php  

           $total = 12;
           $promedio_cada_alumno = $Primer_Parcial_Alumno + $Segundo_Parcial_Alumno / 12;
           $promedio_todo_alumno = $promedio_cada_alumno + $Segundo_Parcial_Alumno / 1;

           echo "<br> Nombre y Apellido: " .$Nombre_y_Apellido_Alumno. 
           "<br> DNI: " . $DNI_Alumno .  
           "<br> I Parcial: " .$Primer_Parcial_Alumno. 
           "<br> II Parcial: " .$Segundo_Parcial_Alumno. " ".
           "<br> Promedio: " .$promedio_cada_alumno. " ";
           echo "<br> Promedio Total de Alumno " .$promedio_todo_alumno. " ";
            ?> </p><?php  
        }
 }
 $Alumnos = new Alumnos();
 $Alumnos -> guardar("Maria", "315-1", "65", "68");
 $Alumnos -> guardar("Julio", "45-310-3", "63", "34");
 $Alumnos -> mostrar();
?>
    
<?php  ?> 
<style>
    body p{
        color: red;
        font-size: 30px;
    }
    body p a {
        color: white;
        font-size: 32px;
    }
    body p a b{
        color: red;
        font-size: 35px;
        }
</style>
</body>
</html>
?>