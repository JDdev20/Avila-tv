

<!--Incluyebdo el HEADER-->
<?php include('includes/header.php'); ?>
<div class="body">
    <div class="inicio">
        <div class="barraLogo">
            <img src="assets/logos/Logo-avilatv.png" id="avilaLogo"" alt="">
            <div class="grupo_inputs">
                <div class="input">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" placeholder="Ingrese su nombre..." id="" required>
                </div>
                <div class="input">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" placeholder="Ingrese su apellido..." id="" required>
                </div>
                <div class="input">
                    <label for="cedula">Cédula:</label>
                    <input type="text" name="cedula" placeholder="Ingrese su cedula..." id="" required>
                </div>
                <div class="input">
                    <label for="equipo">Equipo:</label>
                    <input type="text" name="equipo" placeholder="Ingrese el código del equipo..." id="" required>
                </div>
                <div class="input">
                    <input type="submit" value="Enviar" class="enviar">
                </div>
                <div class="links">
                    <a href="index.php">Volver.</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <!--Incluyebdo el FOOTER-->
<?php include('includes/footer.php'); ?>

