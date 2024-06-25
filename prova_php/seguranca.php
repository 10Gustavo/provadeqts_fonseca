<?php

function seguranca(){
    if(empty($_SESSION['nome']) && empty($_SESSION['nivel'])){
        header("location: index.php");
   }else{
    
   }

}

seguranca();

?>