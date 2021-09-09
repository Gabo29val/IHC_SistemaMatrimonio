<?php
include("head.php");
?>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <?php
        include("header.php");
        ?>

        <?php
        include("secretaria-sidebar.php");
        pintar_sidebar("secretaria-denuncia-lista");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Lista de denuncias</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-secretaria.php">Secretaria</a></li>
                                <li class="breadcrumb-item active">Lista de denuncias</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card mb-0">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="datatable table table-stripped mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre de Opositor</th>
                                                <th>N° expediente</th>
                                                <th>Nombre de Funcionario</th>
                                                <th>Estado</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>C001</td>
                                                <td>Francisco Lozano Lopez</td>
                                                <td>10577823</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-success">Aceptado</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>

                                            </tr>
                                            <tr>
                                                <td>C002</td>
                                                <td>Manuel Gonzales Melendez</td>
                                                <td>10577850</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-success">Aceptado</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>C003</td>
                                                <td>Ciro Avila Casas</td>
                                                <td>10477824</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>C004</td>
                                                <td>José Campos Guerrero</td>
                                                <td>10577823</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>C005</td>
                                                <td>Jesus Palomino Correa</td>
                                                <td>10477159</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-danger">Rechazado</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>C006</td>
                                                <td>Danilo Bustamante Ferreros</td>
                                                <td>10477753</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-danger">Rechazado</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>

                                            </tr>
                                            <tr>
                                                <td>C007</td>
                                                <td>Andrea Portocarrero Sifuentes</td>
                                                <td>10987321</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-success">Realizado</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>

                                            </tr>
                                            <tr>
                                                <td>C008</td>
                                                <td>Coraima Montez Enriquez</td>
                                                <td>45789321</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>C009</td>
                                                <td>Karla Sifuentes Enriquez</td>
                                                <td>45258749</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>C010</td>
                                                <td>Enrique Campos Guerrero</td>
                                                <td>45852179</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>C011</td>
                                                <td>Verónica Mendoza Linares</td>
                                                <td>45852741</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>
                                               
                                            </tr>
                                            <tr>
                                                <td>C012</td>
                                                <td>Carina Velez Montes</td>
                                                <td>45852319</td>
                                                <td>Eduardo Perez Carrasco</td>
                                                <td><span class="badge bg-inverse-warning">Pendiente</span></td>
                                                <td><a href="#" class="dropdown-item" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil"></i></a></td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div id="edit_ticket" class="modal custom-modal fade" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Editar Denuncia</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h3>Datos del opositor</h3>
                                                            <div class="form-group">
                                                                <label>Nombre</label>
                                                                <input class="form-control" type="text" value="Francisco Lozano Lopez">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>DNI</label>
                                                                <input class="form-control" type="text" readonly value="75345696">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Distrito</label>
                                                                <select class="select">
                                                                    <option>-</option>
                                                                    <option selected>Ancon</option>
                                                                    <option>Ate Vitarte</option>
                                                                    <option>Barranco</option>
                                                                    <option>Breña</option>
                                                                    <option>Carabayllo</option>
                                                                    <option>Chaclacayo</option>
                                                                    <option>Chorrillos</option>
                                                                    <option>Cieneguilla</option>
                                                                    <option>El Agustino</option>
                                                                    <option>Independencia</option>
                                                                    <option>Jesus María</option>
                                                                    <option>La Molina</option>
                                                                    <option>La Victoria</option>
                                                                    <option>Lima</option>
                                                                    <option>Lince</option>
                                                                    <option>Los Olivos</option>
                                                                    <option>Lurigancho</option>
                                                                    <option>Lurin</option>
                                                                    <option>Miraflores</option>
                                                                    <option>Pachacamac</option>
                                                                    <option>Pucusana</option>
                                                                    <option>S.J.Lurigancho</option>
                                                                    <option>S.J.Miraflores</option>
                                                                    <option>Surquillo</option>
                                                                    <option>V.M. del Triunfo</option>
                                                                    <option>V. el Salvador</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Dirección</label>
                                                                <input class="form-control" type="text" value="av. 15 de noviembre">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Edad</label>
                                                                <input class="form-control" type="text" value="42">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        
                                                    <div class="col-sm-6">
                                                            <h3>Datos del funcionario publico</h3>
                                                            <div class="form-group">
                                                                <label>Nombre</label>
                                                                <input class="form-control" type="text" value="Eduardo Perez Carrasco">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>DNI</label>
                                                                <input class="form-control" type="text" readonly value="35621454">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Cargo</label>
                                                                <select class="select">
                                                                    <option>-</option>
                                                                    <option selected>Calificador</option>
                                                                    <option>Alcalde</option>
                                                                    <option>Administrador R.C</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Codigo de expediente</label>
                                                                <input class="form-control" type="text" value="10577823">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Estado</label>
                                                                <select class="select">
                                                                    <option>-</option>
                                                                    <option selected>Aceptado</option>
                                                                    <option>Pendiente</option>
                                                                    <option>Rechazado</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label>Subir nuevo archivo</label>
                                                                <input class="form-control" type="file" value="denuncia-n123456.pdf">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="submit-section">
                                                        <button class="btn btn-primary submit-btn">Guardar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->


    </div>
    <!-- /Main Wrapper -->

    <?php
    include("footer.php");
    ?>
</body>

</html>