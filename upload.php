<?php

$carpeta = "uploads/"; //IMPORTANTE: debe tener permisos de escritura
$extension = pathinfo($_FILES['avatar']['name']);
$destino = $carpeta.basename($_FILES['avatar']['name']);
//$destino = $carpeta.$usuario.'.'.$extension; //para asociar un archivo a un usuario

//filtrar archivos por tipo
if($_FILES['avatar']['type'] == 'image/jpeg' || $_FILES['avatar']['type'] == 'image/gif' || $_FILES['avatar']['type'] == 'image/png'){

    if(is_uploaded_file($_FILES['avatar']['tmp_name'])){
        move_uploaded_file($_FILES['avatar']['tmp_name'], $destino);
        echo 'Archivo subido correctamente';
    }else{
        echo 'Error al subir el archivo';
    }
}
else{
    echo 'Archivo no soportado';
}

?>
