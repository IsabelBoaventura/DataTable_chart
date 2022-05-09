<?php

//incluir a conexao com o banco de dados 
include_once 'conexao/conectarpdo.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
//$id = 100 ;
if(!empty($id)){

    $sql_select = "SELECT * FROM cargo WHERE id= :id LIMIT 1";
    $resultado = $conn->prepare($sql_select);
    $resultado->bindParam(':id', $id);
    $resultado->execute();

    if( ($resultado) and ($resultado->rowCount()!= 0) ){
        $rowCargo = $resultado->fetch(PDO::FETCH_ASSOC);
        $retorna = [
            'status' => true, 
            'dados' => $rowCargo 
        ];
    

    }else{
        $retorna = [
            'status' => false,
            'msg' =>"<div class='alert alert-danger' role='alert'>Erro: Nenhum Cargo Encontrado no banco de dados !</div>"
        ];

    }


  
    

}else{
    $retorna = [
        'status' => false,
        'msg' =>"<div class='alert alert-danger' role='alert'>Erro: Nenhum Cargo Encontrado!</div>"
    ];
}

echo json_encode( $retorna );





?>