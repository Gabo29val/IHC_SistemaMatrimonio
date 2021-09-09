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
        include("calificador-sidebar.php");
        pintar_sidebar("calificador-expedientes-lista");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Lista de expedientes</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Expedientes</a></li>
                                <li class="breadcrumb-item active">Lista de expedientes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card mb-0">
                            <!--<div class="card-header">
                                <h4 class="card-title mb-0">Default Datatable</h4>
                                <p class="card-text">
                                    This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
                                </p>
                            </div>-->
                            <div class="card-body">

                                <div class="table-responsive">
                                    <!--<table class="datatable table table-stripped mb-0">-->
                                    <table class="table table-hover datatable mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>DNI Hombre</th>
                                                <th>DNI Mujer</th>
                                                <th>Tipo de Matrimonio</th>
                                                <th class="text-center">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>C001</td>
                                                <td>10577823</td>
                                                <td>34057708</td>
                                                <td>Matrimonio Civil Mayores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C002</td>
                                                <td>10577824</td>
                                                <td>59769592</td>
                                                <td>Matrimonio Civil Menores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C003</td>
                                                <td>10477824</td>
                                                <td>91930582</td>
                                                <td>Matrimonio Civil de Extranjeros</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C004</td>
                                                <td>10477456</td>
                                                <td>39453289</td>
                                                <td>Matrimonio Civil Mayores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C005</td>
                                                <td>10477159</td>
                                                <td>29188332</td>
                                                <td>Matrimonio Civil Menores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C006</td>
                                                <td>10477753</td>
                                                <td>41182307</td>
                                                <td>Matrimonio Civil Menores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C007</td>
                                                <td>10987321</td>
                                                <td>77694697</td>
                                                <td>Matrimonio Civil de Viudos</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C008</td>
                                                <td>45789321</td>
                                                <td>98348790</td>
                                                <td>Matrimonio Civil Mayores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C009</td>
                                                <td>45258749</td>
                                                <td>50156482</td>
                                                <td>Matrimonio Civil Menores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C010</td>
                                                <td>45852179</td>
                                                <td>95808355</td>
                                                <td>Matrimonio Civil de Extranjeros</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C011</td>
                                                <td>45852741</td>
                                                <td>28799952</td>
                                                <td>Matrimonio Civil Mayores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C012</td>
                                                <td>45852319</td>
                                                <td>08150355</td>
                                                <td>Matrimonio Civil Menores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C013</td>
                                                <td>75852319</td>
                                                <td>03824115C</td>
                                                <td>Matrimonio Civil de Extranjeros</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C014</td>
                                                <td>85852319</td>
                                                <td>04632709</td>
                                                <td>Matrimonio Civil Menores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C015</td>
                                                <td>85852348</td>
                                                <td>38213148</td>
                                                <td>Matrimonio Civil Mayores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C016</td>
                                                <td>85852348</td>
                                                <td>64641519</td>
                                                <td>Matrimonio Civil de Extranjeros</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C017</td>
                                                <td>85852348</td>
                                                <td>73204955</td>
                                                <td>Matrimonio Civil Menores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C018</td>
                                                <td>85852348</td>
                                                <td>51499006</td>
                                                <td>Matrimonio Civil de Extranjeros</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C019</td>
                                                <td>85852348</td>
                                                <td>28122768</td>
                                                <td>Matrimonio Civil Mayores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C020</td>
                                                <td>85852348</td>
                                                <td>04090573</td>
                                                <td>Matrimonio Civil de Extranjeros</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C021</td>
                                                <td>85852348</td>
                                                <td>17671548</td>
                                                <td>Matrimonio Civil de Viudos</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C022</td>
                                                <td>85852348</td>
                                                <td>17224986</td>
                                                <td>Matrimonio Civil Menores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C023</td>
                                                <td>85852348</td>
                                                <td>12505378</td>
                                                <td>Matrimonio Civil Mayores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C024</td>
                                                <td>85852348</td>
                                                <td>37576628</td>
                                                <td>Matrimonio Civil de Extranjeros</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C025</td>
                                                <td>85852348</td>
                                                <td>18400733</td>
                                                <td>Matrimonio Civil de Extranjeros</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C026</td>
                                                <td>85852348</td>
                                                <td>03094040</td>
                                                <td>Matrimonio Civil Mayores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C027</td>
                                                <td>85852348</td>
                                                <td>31695938</td>
                                                <td>Matrimonio Civil Menores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C028</td>
                                                <td>85852348</td>
                                                <td>70745148</td>
                                                <td>Matrimonio Civil de Viudos</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C029</td>
                                                <td>85852348</td>
                                                <td>60067764</td>
                                                <td>Matrimonio Civil de Viudos</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>C030</td>
                                                <td>85852348</td>
                                                <td>12637881</td>
                                                <td>Matrimonio Civil Mayores de Edad</td>
                                                <td>
                                                    <div class="text-center">
                                                        <button class="btn btn-primary " href="#" data-toggle="modal" data-target="#edit_expediente"><i class="fa fa-pencil m-r-5"></i> Editar</button>
                                                        <button class="btn btn-secondary ml-1" href="#" data-toggle="modal" data-target="#delete_expediente"><i class="fa fa-trash-o m-r-5"></i> Eliminar</button>
                                                    </div>  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <!-- /Page Content -->
            
            <?php
            include("calificador-expedientes-lista-edit.php");
            include("calificador-expedientes-lista-delete.php");
            ?>
        </div>
        <!-- /Page Wrapper -->


    </div>
    <!-- /Main Wrapper -->

    <?php
    include("footer.php");
    ?>
</body>

</html>