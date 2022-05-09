<?php 

include_once("conexao/conectarpdo.php");

 $dados = filter_input_array( INPUT_POST, FILTER_DEFAULT);

 if( empty($dados['nome'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo Nome não foi preenchido!
      </div>"
    ];
 }else  if( empty($dados['cargo'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo CARGO não foi preenchido!
      </div>"
    ];

 } else  if( empty($dados['escritorio'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo ESCRITÓRIO não foi preenchido!
      </div>"
    ];
 } else  if( empty($dados['idade'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo IDADE não foi preenchido!
      </div>"
    ];
}else  if( empty($dados['salario'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo SALARIO não foi preenchido!
      </div>"
    ];
}else  if( empty($dados['admissao'] )){
    $retorna = [
        'status' => false, 
        'msg' => "<div class='alert alert-danger' role='alert'>
        Campo DATA DE ADMISSÃO  não foi preenchido!
      </div>"
    ];
}else{
    $sit="A";
    $sqlInsert = "INSERT INTO  cargo (cargo, nome, escritorio, idade, salario, admissao, situacao) 
        VALUES( :cargo, :nome, :escritorio, :idade, :salario, :admissao, :sit )";

    $cad_cargo = $conn->prepare($sqlInsert )    ;
    $cad_cargo->bindParam(':nome', $dados['nome']);
    $cad_cargo->bindParam(':cargo', $dados['cargo']);
    $cad_cargo->bindParam(':escritorio', $dados['escritorio']); 
    $cad_cargo->bindParam(':idade', $dados['idade']); 
    $cad_cargo->bindParam(':salario', $dados['salario']); 
    $cad_cargo->bindParam(':admissao', $dados['admissao']);
    $cad_cargo->bindParam(':sit', $sit);
    $cad_cargo->execute();

    if( $cad_cargo->rowCount()){
        $retorna = [
            'status' => true , 
            'msg' => "<div class='alert alert-success' role='alert'> Cargo cadastrado com SUCESSO!</div>"
        ];
    }else{
        $retorna = [
            'status' => false, 
            'msg' => "<div class='alert alert-danger' role='alert'> Erro! Falha ao cadastrar cargo. </div>"
        ];
    }



}

echo json_encode( $retorna);


?>