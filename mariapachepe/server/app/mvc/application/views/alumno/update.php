<header>
      <input type="button" onclick="history.back()" name="btnVolver" value="Volver">
    </header>

    <center>
        <h2><?php echo $titulo ?></h2> <!-- Podemos enviar y recibir datos desde el controlador a la vista -->
        <?php

            //print_r($dato); -- Imprimir un array
            echo validation_errors();
            echo form_open('alumnoc/update'); 
        ?>

        <label>Nombre</label>
        <input type="text" name="nombre" value = "<?=$dato["nombre"];?>"><br />

        <label>Matricula</label>
        <input type="text" name="matricula" value = "<?=$dato["matricula"];?>"><br />

        <label>Apellidos</label>
        <input type="text" name="apellidos" value = "<?=$dato["apellidos"];?>"><br />

        <input type="text" style = "display: none;" name="id" value = "<?=$dato["id"];?>"><br />

        <input type = "submit" name="submit" value="Actualizar alumno">
    </center>
</form>