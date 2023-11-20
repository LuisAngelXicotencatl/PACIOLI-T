    <!-- Clientes -->
    <section id="clientes" class="clientes">
            <?php
            include('../CONTROLLER/conexionbd.php');
            $sugerencias = "SELECT `sugerencias`.`id_sugerencias`, `sugerencias`.`id_usuarios`, `usuarios`.`nombre`, `usuarios`.`nombre`, `usuarios`.`portada`, `sugerencias`.`sugerencia` FROM `sugerencias`  LEFT JOIN `usuarios` ON `sugerencias`.`id_usuarios` = `usuarios`.`id_usuario`;";
            $resultado = mysqli_query($conexion, $sugerencias);
             while($row=mysqli_fetch_assoc($resultado)) {
            ?>
        <div class="tarjet">
            <img  class="p-c" src="data:image/jpg;base64,<?php echo base64_encode($row['portada']); ?>" alt="portada">
            <div class="title-clientes"><?php echo $row['nombre'];?></div>
            <div class="p-clientes"><?php echo $row['sugerencia'];?></div>
        </div>
        <?php
            }
             ?>
    </section>
    <!-- footer--->