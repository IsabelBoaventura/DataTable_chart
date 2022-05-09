<?php 

include_once("conexao/conectarpdo.php");

$dados = filter_input_array( INPUT_POST, FILTER_DEFAULT);

//var_dump($dados ); 


//se o id estiver vazio nao tem como continuar 
if( empty($dados['idEdit'] )){
    $retorna = [
        'status' => false,
        'msg' => "<div class='alert alert-danger' role='alert'>Erro! Não informado o Usuario </div>"
    ];

}else if( empty($dados['nomeEdit'])){

    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'> NOME não foi preenchido! </div>"
    ];
}else if( empty($dados['cargoEdit'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'> Campo CARGO não foi preenchido! </div>"
    ];

 } else  if( empty($dados['escritorioEdit'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'> Campo ESCRITÓRIO não foi preenchido! </div>"
    ];
 } else  if( empty($dados['idadeEdit'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'> Campo IDADE não foi preenchido! </div>"
    ];
}else  if( empty($dados['salarioEdit'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'> Campo SALARIO não foi preenchido! </div>"
    ];
}else  if( empty($dados['admissaoEdit'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'> Campo DATA DE ADMISSÃO  não foi preenchido! </div>"
    ];

}else {

    $sqlUpdate = "UPDATE cargo SET ". 
                " cargo= :cargo, nome = :nome, escritorio= :escritorio, idade= :idade , salario= :salario, admissao= :admissao ". 
                " WHERE id= :id ";

    $edit_cargo = $conn->prepare($sqlUpdate )    ;
    $edit_cargo->bindParam(':nome', $dados['nomeEdit']);
    $edit_cargo->bindParam(':cargo', $dados['cargoEdit']);
    $edit_cargo->bindParam(':escritorio', $dados['escritorioEdit']); 
    $edit_cargo->bindParam(':idade', $dados['idadeEdit']); 
    $edit_cargo->bindParam(':salario', $dados['salarioEdit']); 
    $edit_cargo->bindParam(':admissao', $dados['admissaoEdit']);
    $edit_cargo->bindParam(':id', $dados['idEdit']);
   
    if(   $edit_cargo->execute()    ){
        $retorna = [
            'status' => true , 
            'msg' => "<div class='alert alert-success' role='alert'> Cargo alterado com SUCESSO!</div>"
        ];
    }else{
        $retorna = [
            'status' => false, 
            'msg' => "<div class='alert alert-danger' role='alert'> Erro! Falha ao ALTERAR cargo. </div>"
        ];
    }


}



echo json_encode( $retorna);
