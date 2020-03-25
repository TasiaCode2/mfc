    <header>
      <input type="button" onclick="history.back()" name="btnVolver" value="Volver">
    </header>

    <center>
        <h2><?php echo $titulo ?></h2> <!-- Podemos enviar y recibir datos desde el controlador a la vista -->
        <?php 
            echo validation_errors();
            echo form_open('alumnoc/add'); 
        ?>

        <label>Nombre</label>
        <input type="text" name="nombre"><br />

        <label>Matricula</label>
        <input type="text" name="matricula"><br />

        <label>Apellidos</label>
        <input type="text" name="apellidos"><br />

        <input type = "submit" name="submit" value="Agregar alumno">
    </center>
</form>