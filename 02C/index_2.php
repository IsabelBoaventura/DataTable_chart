<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - DataTables  </title>

    
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />


    <!-- Bootstrap CSS -->
    <!--  <link href="library/bootstrap-5/bootstrap.min.css" rel="stylesheet" /> --> 
    <!-- <link href="library/daterangepicker.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css">
    <!-- <link href="library/dataTables.bootstrap5.min.css" rel="stylesheet" /> --> 


    
    <!-- <script src="library/jquery.min.js"></script> --> 
       <!--  <script src="library/bootstrap-5/bootstrap.bundle.min.js"></script> -->
        <!-- <script src="library/moment.min.js"></script> -->
        <!-- <script src="library/daterangepicker.min.js"></script> --> 
        <!--         <script src="library/Chart.bundle.min.js"></script> -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


        <!-- <script src="library/jquery.dataTables.min.js"></script> -->
        <!-- <script src="library/dataTables.bootstrap5.min.js"></script> -->



       
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  

</head>
<body>
<input type="text" id="daterange_textbox" class="form-control" readonly />
    <div class="container">

        <div class="d-flex justify-content-between align-items-center pt-3 pb-2 ">
            <h1 class="display-5 mb-4">Lista de Cargos e Salarios  </h1>
            <!--  <h2>Advance Date Range Filter in PHP MySQL using Date Range Picker</h2> -->
            <h2> Filtro de intervalo de datas avançado do PHP Ajax em DataTables e Chart.js usando o seletor de intervalo de datas</h2>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#cadCargoModal">
               Cadastrar
            </button>
        </div>
            <!-- Apresentar os alerts de sucesso  -->
            <span id="msgAlerta"></span>
            <!-- Fim dos alerts-->
        
    
       

    
        <table id="order-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                
                    <th>Cargo</th>
                    <th>Nome</th><th>Escritório</th>
                    <th>Idade</th>
                    <th>Salário</th>
                    <th>Admissão</th>
                    <th>Ações</th>
                </tr>
            </thead>
        </table>
    </div>


    <!-- Iniciando a parte da Modal de cadastro -->


    <!-- Modal -->
<div class="modal fade" id="cadCargoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cadCargoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cadCargoModalLabel">Cadastrar Cargos </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
           


                <!---------  A partir daqui form cadastro cargo  ---------->
                <!-- Apresentar os alerts de erro -->
                <span id="msgAlertErroCad"></span>
                <!-- Fim dos alerts--> 


                            
                <form method="POST" id="form-cad-cargo" >
                <div class="row mb-3">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="cargo" class="col-sm-2 col-form-label">Cargo</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo que exerce">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="escritorio" class="col-sm-2 col-form-label">Escritório</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="escritorio" name="escritorio" placeholder="Cidade onde trabalha">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="idade" class="col-sm-2 col-form-label">Idade </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="idade" name="idade" placeholder="Sua idade ">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="salario" class="col-sm-2 col-form-label">Salário</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="salario" name="salario" placeholder="Seu salário ">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="admissao" class="col-sm-2 col-form-label">Data de Admissão</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="admissao" name="admissao" placeholder="Data de Admissão">
                    </div>
                </div>

                <button type="submit" class="btn btn-outline-success btn-sm" value="cadastrar">Salvar </button>
                </form>


                <!---------- Ate aqui form cadastro cargo ---------->
            </div>

        </div>
    </div>
</div>










    <!-- Modal VISUALIZACAO das informações do cargo  -->
    <div class="modal fade" id="visCargoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="visCargoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visCargoModalLabel">Visualizar Cargos </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-3">ID</dt>
                        <dd class="col-sm-9"> <span id="idCargoVis"></span></dd>

                        <dt class="col-sm-3">Cargo</dt>
                        <dd class="col-sm-9"> <span id="cargoVis"></span>  </dd>

                        <dt class="col-sm-3">Nome</dt>
                        <dd class="col-sm-9"> <span id="nomeVis"></span> </dd>                     

                        <dt class="col-sm-3">Escritório </dt>
                        <dd class="col-sm-9"> <span id="escritorioVis"></span> </dd>

                        <dt class="col-sm-3">Idade</dt>
                        <dd class="col-sm-9"> <span id="idadeVis"></span> </dd> 

                        <dt class="col-sm-3"> Salário </dt>
                        <dd class="col-sm-9"> <span id="salarioVis"></span> </dd> 

                        <dt class="col-sm-3">Admissão </dt>
                        <dd class="col-sm-9"> <span id="admissaoVis"></span> </dd> 
                           
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- FIM do  Modal VISUALIZACAO das informações do cargo  -->





    <!-- Modal EDITAR  cargo  -->
    <div class="modal fade" id="editCargoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editCargoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCargoModalLabel">Edição do Cargo </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Apresentar os alerts de erro -->
                    <span id="msgAlertErroEdit"></span>
                    <!-- Fim dos alerts--> 


                    <!-- Inicio do Form do EDITAR cargo -->

                    <form method="POST" id="form-edit-cargo" >
                        <div class="row mb-3">
                            <label for="idEdit" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text"  id="idEdit" name="idEdit" placeholder="adicionar a propriedade que nao permite que eidtem " >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nomeEdit" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomeEdit" name="nomeEdit" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cargoEdit" class="col-sm-2 col-form-label">Cargo</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="cargoEdit" name="cargoEdit" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="escritorioEdit" class="col-sm-2 col-form-label">Escritório</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="escritorioEdit" name="escritorioEdit" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="idadeEdit" class="col-sm-2 col-form-label">Idade </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="idadeEdit" name="idadeEdit" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="salarioEdit" class="col-sm-2 col-form-label">Salário</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="salarioEdit" name="salarioEdit" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="admissaoEdit" class="col-sm-2 col-form-label">Data de Admissão</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="admissaoEdit" name="admissaoEdit" >
                            </div>
                        </div>

                        <button type="submit" class="btn btn-outline-warning btn-sm" value="salvar">Salvar </button>
                    </form>

                    <!-- Fim do FORM do EDITAR carfo  -->


                 
                </div>
            </div>
        </div>
    </div>

    <!-- FIM do  Modal Editar cargo  -->








    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"> </script>
    <script src="js/datatable.js" ></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>





    
    </body>
</html>