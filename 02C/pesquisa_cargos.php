<?php 

require_once('conexao/conectarpdo.php');


//receber a requisao da pesquisa
$requestData = $_REQUEST;

// var_dump($_REQUEST);


// Lista de colunas da tabela no banco de dados 
// indice das colunas das tabelas vindas do banco de Dados 
$colunas  = array(
    '0' => 'id',     
    '1' => 'cargo' , 
    '2' => 'nome'  ,
    '3' => 'escritorio' ,
    '4' => 'idade', 
    '5' => 'salario', 
    '6' => 'admissao' 
   
);

// echo '<br> linha 24 colunas : ';
// var_dump($colunas );

//obter todas as informações do banco de dados 
// $consulta = 'SELECT * FROM cargo ';
// $respConsulta  = $conn->query( $consulta) ; 
// $totalGeral = $respConsulta->rowCount(); //quantas linhas tem no banco de dados 
//Desta forma esta correto , mas vbamos seguir para exercitar o PDO 

$query_qnt_cargos = "SELECT COUNT(id) AS qnt_usuarios FROM cargo ";

//agora trabalhando com a PAGINACAO conforme a PESQUISA
if( !empty( $requestData['search']['value'])){
    // se houver um parametro de pesquisa 
    // $requestData['search']['value']
    //contem o parametro da pesquisa 
    $query_qnt_cargos.= " WHERE  id LIKE :id ";
    $query_qnt_cargos.= " OR nome LIKE :nome ";
    $query_qnt_cargos.= " OR cargo LIKE :cargo ";
    $query_qnt_cargos.= " OR escritorio LIKE :escritorio ";
    $query_qnt_cargos.= " OR idade LIKE :idade ";
    $query_qnt_cargos.= " OR salario LIKE :salario ";
    $query_qnt_cargos.= " OR admissao LIKE :admissao  ";
}


$result_qnt_cargos = $conn->prepare($query_qnt_cargos);

//Acessa o IF quando tiver parametro de pesquisa 
if(!empty(  $requestData['search']['value'] )){
    $valor_pesquisado = "%".  $requestData['search']['value'] . "%";
    $result_qnt_cargos->bindParam(':id', $valor_pesquisado, PDO::PARAM_STR );
    $result_qnt_cargos->bindParam(':nome', $valor_pesquisado, PDO::PARAM_STR );
    $result_qnt_cargos->bindParam(':cargo',  $valor_pesquisado, PDO::PARAM_STR );
    $result_qnt_cargos->bindParam(':escritorio', $valor_pesquisado, PDO::PARAM_STR );
    $result_qnt_cargos->bindParam(':idade',  $valor_pesquisado, PDO::PARAM_STR );
    $result_qnt_cargos->bindParam(':salario',  $valor_pesquisado, PDO::PARAM_STR );
    $result_qnt_cargos->bindParam(':admissao',  $valor_pesquisado, PDO::PARAM_STR );
    
}
$result_qnt_cargos->execute();
$row_qnt_cargos = $result_qnt_cargos->fetch(PDO::FETCH_ASSOC);
//FETCH_ASSOC apresenta com o nome dos campos 

//var_dump( $row_qnt_cargos);




//busca das informacoes no bando de dados 
// $busca = "SELECT * 
//             FROM cargo
//             WHERE 1=1
//             ORDER BY id ASC 
//             LIMIT :inicio , :quantidade";
// Agora adicionando no proprio codigo para ter a paginacao 


//Agora a query com a ordenação que o usuario fizer 
$busca= "SELECT * 
        FROM cargo
        WHERE situacao='A' AND 1=1";
   


//agora trabalhando com a PESQUISA
if( !empty( $requestData['search']['value'])){
    // se houver um parametro de pesquisa 
    // $requestData['search']['value']
    //contem o parametro da pesquisa 
    $busca.= " AND ( id LIKE :id ";
    $busca.= " OR nome LIKE :nome ";
    $busca.= " OR cargo LIKE :cargo ";
    $busca.= " OR escritorio LIKE :escritorio ";
    $busca.= " OR idade LIKE :idade ";
    $busca.= " OR salario LIKE :salario ";
    $busca.= " OR admissao LIKE :admissao ) ";
}



if(isset($requestData['order'])){
    $busca.=" ORDER BY ".$colunas[$requestData['order'][0]['column']]." ". 
            $requestData['order'][0]['dir'];
}else{
    $busca.= " ORDER BY id ASC ";
}
$busca.= " LIMIT :inicio , :quantidade";

//  ORDER BY id ASC 
//  echo ' <br> linha 59: '. $busca ;

//$resp  = $conn->query( $busca ) ; 
//No lugar de faer a query direto, por segurança recomenda -se fazer a preparação d query

$result_cargos = $conn->prepare( $busca );
//agora como temos os links (:inicio) e (:quantidade) temos de fazer a substituicao
$result_cargos->bindParam(':inicio', $requestData['start'], PDO::PARAM_INT);
//Forçando que o que esteja na variavel requestaData, coluna start seja um inteiro 
$result_cargos->bindParam(':quantidade', $requestData['length'], PDO::PARAM_INT);


//Acessa o IF quando tiver parametro de pesquisa 
if(!empty(  $requestData['search']['value'] )){
    $valor_pesquisado = "%".  $requestData['search']['value'] . "%";
    $result_cargos->bindParam(':id', $valor_pesquisado, PDO::PARAM_STR );
    $result_cargos->bindParam(':nome', $valor_pesquisado, PDO::PARAM_STR );
    $result_cargos->bindParam(':cargo',  $valor_pesquisado, PDO::PARAM_STR );
    $result_cargos->bindParam(':escritorio', $valor_pesquisado, PDO::PARAM_STR );
    $result_cargos->bindParam(':idade',  $valor_pesquisado, PDO::PARAM_STR );
    $result_cargos->bindParam(':salario',  $valor_pesquisado, PDO::PARAM_STR );
    $result_cargos->bindParam(':admissao',  $valor_pesquisado, PDO::PARAM_STR );
    
}



$result_cargos->execute();
//após esta execução se terá os registros 
// *..1



//$totalFiltered = $resp->rowCount(); //quantas linhas tem no banco de dados 

if( isset($_REQUEST)){
    // var_dump( $_REQUEST);
    //  echo ' linha 65: '. $colunas[$requestData['columns'][0]['name']] . ' '.
        //  $requestData['order'][0]['dir'].
        //  ' LIMIT '.$requestData['start'].
        //  ' , '. $requestData['length'].' ';
    //nao aceitou order // orderable//data

    //ordenar conforme o resultado 
   $busca .= ' '.
            //  ORDER BY '.$colunas[$requestData['columns'][0]['name']]. ' '. 
            //   $requestData['order'][0]['dir'].
                 ' LIMIT '.$requestData['start'].' , '. $requestData['length'].' ';


    //
   //
  
}

 // echo ' <br> linha 96 <br> ' . $busca ;





//$resp = $conn->query( $busca );




//echo '<br> total de linhas: '. $total . '<br>'; 


//lendo os dados do bando 
$dados = array();


//*..1

while ( $row = $result_cargos->fetch( PDO::FETCH_ASSOC) ){
    // var_dump($row );

    extract( $row);
    //para imprimir atraves do nome da coluna {{direto}}
    $dado = array();

    $dado[] = $id;
   
    $dado[] = $cargo ;
    $dado[] = $nome; // . ' '. $colunas[$requestData['order'][0]['column']]." ";
    $dado[] = $escritorio ;
    $dado[] = $idade ;
    $dado[] = $salario ;
    $dado[] = $admissao ;
    $dado[] =  "<button type='button' class='btn btn-outline-primary btn-sm' id='$id' onclick='visCargo($id)' > Visualizar</button>
                <button type='button' class='btn btn-outline-warning btn-sm' id='$id' onclick='editarCargo($id)'> Editar </button>
                <button type='button' class='btn btn-outline-danger btn-sm' id='$id' onclick='apagarCargo($id)'> Deletar </button>
                <button type='button' class='btn btn-outline-success btn-sm' id='$id'                  
                onclick=window.open(imprimir.php, mywindow,  'width=400,height=200,toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes')              
                > Imprimir </button>";


    $dados[] = $dado ;


}
 
// var_dump($dados );
// echo '<br><br>';
// print_r( $dados );
 
// // SQL server connection information
// $sql_details = array(
//     'user' => '',
//     'pass' => '',
//     'db'   => '',
//     'host' => ''
// );
 

//array com informações que serao retornadas para o javascript 
$json_data = array(
    "draw" => intval( $requestData['draw']),
    //para cada requuisicao é enviado um numero como paramentro
    "recordsTotal" => intval( $row_qnt_cargos['qnt_usuarios'] ),
    //  quanitdade de registros que ha no banco de dados 
    "recordsFiltered" => intval( $row_qnt_cargos['qnt_usuarios'] ),
    // total de registros quando houver pesquisas 

    //array de dados completos do resultado do sql da tabela 
    "data" => $dados 
);

//var_dump( $json_data);

 

 //enviar os dados em formato json 
echo json_encode(
   $json_data
);





?>