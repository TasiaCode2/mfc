<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ver alumno</title>
  </head>

  <body>
    <header>
      <input type="button" onclick="history.back()" name="btnVolver" value="Volver">
    </header>

    <div>
      <div style="margin-right: auto; margin-left: auto;">
        

        <div style="display:inline-block; width: 30%; margin-top: 50px; margin-bottom: 50px; vertical-align: top;">
          <img src="https://upica.edu.pe/wp-content/uploads/2018/12/estudiante-icono.png" >
        </div>

        <div style="text-align: center; display:inline-block; width: 30%; vertical-align: top;margin-top: 35px; margin-bottom: 20px;">
          <table>
            <?php
              echo "<h3>ID: </h3>".$dato["id"]."<br>";
              echo "<h3>Nombre: </h3>".$dato["nombre"]."<br>";
              echo "<h3>Apellido: </h3>".$dato["apellidos"]."<br>";
              echo "<h3>Matrícula: </h3>".$dato["matricula"]."<br>";
            ?>
          </table>
        </div>

        <div style="display:inline-block; width: 30%; margin-top: 5px; vertical-align: top;">
          <img src="https://logosave.com/images/large/12/Universidad-Modelo-1-logo.png" >
        </div>

      </div>
    </div>
  </body>
</html>
