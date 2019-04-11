<?php
require_once 'header.php';
?>
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Barco
                                </th>
                                <th>
                                    Coordenadas
                                </th>
                                <th>
                                    Alineación
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Barco 1
                                </td>
                                <td>
                                    <input type="text"/> - <input type="number"/>
                                </td>
                                <td>
                                    <select name="alineacion">
                        <option>Horizontal</option>
                        <option>Vertical</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table-active">
                                <td>
                                    2
                                </td>
                                <td>
                                    Barco 2
                                </td>
                                <td>
                                    <input type="text"/> - <input type="number"/>
                                </td>
                                <td>
                                    <select name="alineacion">
                        <option>Horizontal</option>
                        <option>Vertical</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td>
                                    3
                                </td>
                                <td>
                                    Barco 3
                                </td>
                                <td>
                                    <input type="text"/> - <input type="number"/>
                                </td>
                                <td>
                                    <select name="alineacion">
                        <option>Horizontal</option>
                        <option>Vertical</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table-warning">
                                <td>
                                    4
                                </td>
                                <td>
                                    Barco 4
                                </td>
                                <td>
                                    <input type="text"/> - <input type="number"/>
                                </td>
                                <td>
                                   <select name="alineacion">
                        <option>Horizontal</option>
                        <option>Vertical</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table-danger">
                                <td>
                                    5
                                </td>
                                <td>
                                    Barco 5
                                </td>
                                <td>
                                    <input type="text"/> - <input type="number"/>
                                </td>
                                <td>
                                    <select name="alineacion">
                        <option>Horizontal</option>
                        <option>Vertical</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <img alt="Batalla Naval" src="img/batalla.png" class="rounded">
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