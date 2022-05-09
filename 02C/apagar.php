<?php



include_once("conexao/conectarpdo.php");

//$dados = filter_input_array( INPUT_POST, FILTER_DEFAULT);
//agora estou recebendo pelo metodo GET 

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);


//$id = "";
//se o id estiver vazio nao tem como continuar 
if( !empty($id )){

    $sit = 'E'; 

    $sqlDEL = "UPDATE cargo SET ". 
                " situacao= :sit ". 
                " WHERE id= :id ";

    $del_cargo = $conn->prepare($sqlDEL )    ;
   
    $del_cargo->bindParam(':sit', $sit );
    $del_cargo->bindParam(':id',  $id , PDO::PARAM_INT );
   
    if(   $del_cargo->execute()    ){
        $retorna = [
            'status' => true , 
            'msg' => "<div class='alert alert-success' role='alert'> Cargo DELETADO com SUCESSO!</div>"
        ];
    }else{
       
        $retorna = [
            'status' => false, 
            'msg' => "<div class='alert alert-danger' role='alert'> Erro! Falha ao DELETAR  cargo. </div>"
        ];

    }
}else {

   
    $retorna = [
        'status' => false,     
        'msg' => "<div class='alert alert-success' role='alert'> Erro! Falha ao DELETAR  cargo.  </div>"
    ];


}

echo json_encode( $retorna);


?>