<?php
$conexion=mysqli_connect('localhost','root','','prueba_db');

if(mysqli_connect_error()){

    echo "hay un error en la conexion";

} 
else{echo "se ha conectado correctamente";
}

// $seleccionar="SELECT * FROM usuarios";

$consulta=mysqli_query($conexion,$seleccionar);


while($dato=mysqli_fetch_assoc($consulta)){


  echo "<h2>".$dato['nombre']."</h2>";
  echo "<h2>".$dato['apellido']."</h2>";
}
$insertar="INSERT INTO usuarios (id,nombre,apellido,email) VALUES (NULL,'andres','rodriguez','andres@gmail.com')";
$consulta_insertar=mysqli_query ($conexion,$insertar);

if($consulta_insertar){

    echo "se inserto correctamente";
} else {echo "no se a insertado correctamente"; } 




$update="UPDATE `usuarios` SET nombre='ignacio' WHERE id=7";
$consulta_update=mysqli_query ($conexion,$update);
if ($consulta_update) {
    echo "correctamente";
} 
else 
{
     echo "incorrectamente";
}






$eliminar="DELETE FROM `usuarios` WHERE id= ";

$consulta_eliminar=mysqli_query($conexion,$eliminar);

if($consulta_eliminar){

    echo "se elimino correctamente";
} 
else { echo "no se elimino"};










?>