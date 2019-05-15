<?php
require_once 'header.php';
require_once 'clases/listaPersonas.php';
error_reporting(E_ALL);
ini_set('display_errors', 'stdout');
?>

<div class="row">
    <div class="col-md-12">
    </div>
</div>
<div class="row">

    <div class="col-md-12">
        <form role="form" class="form-inline">
            <div class="form-group col-md-3">

                <label for="correo">
                    Correo
                </label>
                <input type="text" class="form-control" id="correo" name="correo" value="<?php
                if (isset($_GET["correo"])) {
                    echo $_GET["correo"];
                } else {
                    echo "";
                }
                ?>"/>
            </div>
            <div class="form-group col-md-3">

                <label for="apellido">
                    Apellido
                </label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php
                if (isset($_GET["apellido"])) {
                    echo $_GET["apellido"];
                } else {
                    echo "";
                }
                ?>"/>
            </div>
            <div class="checkbox col-md-3">
                <label for="estudiante"> 
                    Estudiante: 
                    <select name="estudiante" id="estudiante">
                        <option value="" <?= empty($_GET['estudiante']) ? 'selected' : ''; ?> >  -  </option>
                        <option value="S" <?= !empty($_GET['estudiante']) && $_GET['estudiante'] == 'S' ? 'selected' : ''; ?> > Si </option>
                        <option value="N" <?= !empty($_GET['estudiante']) && $_GET['estudiante'] == 'N' ? 'selected' : ''; ?> > No </option>
                    </select>
                </label>

            </div>
            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-primary" name="boton">
                    Submit
                </button>
            </div>
        </form>
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Correo
                    </th>
                    <th>
                        Apellido
                    </th>
                    <th>
                        Estudiante
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach (\app\clases\ListaPersonas::obtenerListaPersonasFiltrada($_GET) as $persona) {
                    echo "
					<tr>
						<td>
							#
						</td>
						<td>
                                                  {$persona['correo']}
						</td>
						<td>
							{$persona['apellido']}
						</td>
						<td>
							{$persona['estudiante']}
						</td>
					</tr>";
                }
                ?>


            </tbody>
        </table>
    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>