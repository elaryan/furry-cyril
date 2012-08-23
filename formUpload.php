<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Formulario de subida de archivos</title>
    </head>
    <body>
       
        <form name="upload" action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="avatar"/>
            <input type="submit" name="enviar" value="Subir"/>
        </form>
        
        
    </body>
</html>
