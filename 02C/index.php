<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - DataTables  </title>

    
   <!--  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" />-->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />


    <!-- Bootstrap CSS -->
    <!--  <link href="library/bootstrap-5/bootstrap.min.css" rel="stylesheet" /> --> 
    <!-- <link href="library/daterangepicker.css" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css"> -->
    <!-- <link href="library/dataTables.bootstrap5.min.css" rel="stylesheet" /> --> 


    
    <!-- <script src="library/jquery.min.js"></script> --> 
       <!--  <script src="library/bootstrap-5/bootstrap.bundle.min.js"></script> -->
        <!-- <script src="library/moment.min.js"></script> -->
        <!-- <script src="library/daterangepicker.min.js"></script> --> 
        <!--         <script src="library/Chart.bundle.min.js"></script> -->

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  -->


        <!-- <script src="library/jquery.dataTables.min.js"></script> -->
        <!-- <script src="library/dataTables.bootstrap5.min.js"></script> -->



       
        <!-- JavaScript Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

        

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"> </script>
    <script src="js/datatable.js" ></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>  -->
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>



    
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> 


</head>
<body>
<!-- <input type="text" id="daterange_textbox" class="form-control" readonly /> --> 
    <div class="container-fluid">
        <h1 class="mt-2 mb-3 text-center text-primary">Lista de Cargos e Salarios  </h1>

        <div class=" card ">
            <div class="card-header">
                <div class="row">
                    <div class="col col-sm-9">Data da venda </div>
                    <div class="col col-sm-3">
                        <input type="text" id="daterange_textbox" class="form-control" readonly />
                    </div>
                </div>

            </div>
       
        </div> 

        <div class="card-body">
            <div class="table-responsive">
                <div class="chart-container pie-chart">
                    <canvas id="bar_chart" height="40"></canvas>

                </div>
                <table class="table table-striped table-bordered" id="order_table" >
                    <thead>
                        <tr>
                            <th>Numero da Ordem </th>
                            <th>Valor do Pedido</th>
                            <th>Data do Pedido</th>
                        </tr>
                    </thead>
                    <tbody></tbody>

                </table>
            </div>
        </div>
    </div>
    
    </body>
</html>



