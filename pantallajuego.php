<?php
require_once 'header.php';
require_once 'clases/Tablero.php';

$tablero= new app\clases\Tablero();
$dimensiones=$tablero->getDimensiones();
?>
<div class="row">
    <div class="col-md-6">
        <table id="tabla_jugador">
            <?php
            for ($fila=0; $fila<$dimensiones[0];$fila++)
            {
                echo "<tr>";
                for ($columna=0; $columna<$dimensiones[1];$columna++)
            {
                echo "<td>($fila,$columna)</td>";
            }
            echo "</tr>";
            }
            ?>
            
        </table>
    </div>
    
    <div class="col-md-6">
         <table id="tabla_oponente">
            <?php
            for ($fila=0; $fila<$dimensiones[0];$fila++)
            {
                echo "<tr>";
                for ($columna=0; $columna<$dimensiones[1];$columna++)
            {
                echo "<td>($fila,$columna)</td>";
            }
            echo "</tr>";
            }
            ?>
            
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <img alt="Usuario 1" src="http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/256/Actions-im-user-icon.png">
    </div>
    <div class="col-md-6">
        <img alt="Usuario 2" src="http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/256/Actions-im-user-icon.png">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form role="form">
            <div class="form-group">

                <label for="exampleInputPassword1">
                    Usuario
                </label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="checkbox">
            </div> 
            <button type="submit" class="btn btn-primary">
                Enviar
            </button>
        </form>
    </div>
    <div class="col-md-6">
    </div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>