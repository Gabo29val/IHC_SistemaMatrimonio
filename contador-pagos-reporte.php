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
        include("contador-sidebar.php");
        pintar_sidebar("contador-pagos-lista");
        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Factura</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="contador-perfil.php">Contador</a></li>
                                <li class="breadcrumb-item active">Factura</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
							<div class="btn-group btn-group-sm">
								<button class="btn btn-white">PDF</button>
								<button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Imprimir</button>
							</div>
						</div>                        
                    </div>
                </div>
                <!-- /Page Header -->


        
                
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 m-b-20">
                                        <img src="assets/img/logoo.png" class="inv-logo" alt="">
                                         <ul class="list-unstyled">
                                            <li>Sistema de Matrimonio Civil</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 m-b-20">
                                        <div class="invoice-details">
                                            <h3 class="text-uppercase">Factura #INV-0001</h3>
                                            <ul class="list-unstyled">
                                                <li>Fecha: <span>Marzo 12, 2019</span></li>
                                                <li>Fecha Límite: <span>Mayo 12, 2019</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-7 col-xl-8 m-b-20">
                                        <h5>Factura a:</h5>
                                         <ul class="list-unstyled">
                                            <li><h5><strong>Tiger Nixon</strong></h5></li>
                                            <li><span>Contrayente</span></li>
                                            <li>Calle Pelícanos 234.</li>
                                            <li>Perú.</li>
                                            <li>970577823</li>
                                            <li><a href="#">tigernixon@example.com</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-5 col-xl-4 m-b-20">
                                        <span class="text-muted">Detalles del pago:</span>
                                        <ul class="list-unstyled invoice-payment-details">
                                            <li>Tipo: <span>Efectivo</span></li>
                                            <li>País: <span>Perú</span></li>
                                            <li>Ciudad: <span>Lima</span></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>SERVICIO</th>
                                                <th class="d-none d-sm-table-cell">DESCRIPCIÓN</th>
                                                
                                                <th>COSTO UNITARIO</th>
                                                <th>CANTIDAD</th>
                                                <th class="text-right">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>C001</td>
                                                <td>Matrimonio</td>
                                                <td class="d-none d-sm-table-cell">Derecho de trámite</td>
                                                <td>S/.175.00</td>
                                                <td>1</td>
                                                <td class="text-right">S/.175.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <div class="row invoice-payment">
                                        <div class="col-sm-7">
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="m-b-20">
                                                <div class="table-responsive no-border">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th>Subtotal:</th>
                                                                <td class="text-right">S/.175.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>IGV: <span class="text-regular">(18%)</span></th>
                                                                <td class="text-right">S/.31.50</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total:</th>
                                                                <td class="text-right text-primary"><h5>S/.206.50</h5></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-info">
                                        <h5>Otra información</h5>
                                        <p class="text-muted">Revise bien su factura antes de retirarse del sistema.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->
            
        </div>
        <!-- /Page Wrapper -->                


            <!--    <div class="row">
                    <div class="col-sm-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>DNI</th>
                                                <th>Nombre</th>
                                                <th>Fecha</th>
                                                <th>Monto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>C001</td>
                                                <td>10577823</td>
                                                <td>Tiger Nixon</td>
                                                <td>1 Jan 2013</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C002</td>
                                                <td>10577824</td>
                                                <td>Garrett Winters</td>
                                                <td>1 Jan 2012</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C003</td>
                                                <td>10477824</td>
                                                <td>Ashton Cox</td>
                                                <td>14 Jan 2002</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C004</td>
                                                <td>10477456</td>
                                                <td>Cedric Kelly</td>
                                                <td>24 Dic 2002</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C005</td>
                                                <td>10477159</td>
                                                <td>Airi Satou</td>
                                                <td>3 Feb 2004</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C006</td>
                                                <td>10477753</td>
                                                <td>Brielle Williamson</td>
                                                <td>9 Feb 2007</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C007</td>
                                                <td>10987321</td>
                                                <td>Herrod Chandler</td>
                                                <td>15 Feb 2004</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C008</td>
                                                <td>45789321</td>
                                                <td>Rhona Davidson</td>
                                                <td>15 Abr 2020</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C009</td>
                                                <td>45258749</td>
                                                <td>Colleen Hurst</td>
                                                <td>28 Set 2019</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C010</td>
                                                <td>45852179</td>
                                                <td>Angelica Ramos</td>
                                                <td>15 Set 2019</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C011</td>
                                                <td>45852741</td>
                                                <td>Bradley Greer</td>
                                                <td>15 Aug 2015</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>C012</td>
                                                <td>45852319</td>
                                                <td>Brenden Wagner</td>
                                                <td>21 Jul 2020</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>$237,500</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>$85,600</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>$357,650</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>$163,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>-->
        <!-- /Page Wrapper -->


    </div>
    <!-- /Main Wrapper -->

    <?php
    include("footer.php");
    ?>
</body>

</html>