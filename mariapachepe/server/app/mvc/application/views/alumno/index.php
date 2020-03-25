<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Alumnos</title>

    </head>

    <body>
        <header style="background-color: #3949ab; color: white; text-align: center; padding: 16px;">
            <h1  style="display:inline-block; width: 400px; font-weight: bold;">Registro de Alumnos</h1>
        </header>
        
        <div style="padding-top: 20px; padding-left: 10px;">
            <a href = 'alumnoc/add'>Agregar</a>
        </div>

        <center>
            <lu>
                <table>
                    <tr>
                        <th style= "padding: 7px">Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Matricula</th>
                        <th>Opciones</th>
                    </tr>
                    
                    <?php
                        //foreach ($alumnos as $alumno){ echo "<li>".$alumno->nombre."</li>";}
                        foreach ($alumnos as $alumno){ 
                            echo "<tr style= 'padding: 7px'>";
                            echo "<td>".$alumno->id."</td> 
                            <td>".$alumno->nombre."</td> 
                            <td>".$alumno->apellidos."</td> 
                            <td>".$alumno->matricula."</td> 

                            <td>
                            <a href ='alumnoc/view/".$alumno->id."'>Ver</a> 
                            <a href ='alumnoc/delete/".$alumno->id."'>Eliminar</a> 
                            <a href ='alumnoc/update/".$alumno->id."'>Editar</a>
                            </td> <br>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </lu>
        </center>
    </body>
</html>