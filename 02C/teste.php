<?php


echo '<br> teste linha 4 <br>';

$id = 5 ;

echo "<button type='button' class='btn btn-outline-success btn-sm' id='$id'                  
onclick=window.open(imprimir.php', '_blank',  'mywindow', 'width=400,height=200,toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes' )              
> Imprimir </button>";





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
<INPUT type="button" value="  Ir  "
 onClick="window.open('imprimir.php',  '_blank' , 'mywindow','width=400,height=200,toolbar=yes,location=yes,directories=yes,status=yes,menubar=yes,scrollbars=yes,resizable=yes' )"> 	

   
</body>
</html>