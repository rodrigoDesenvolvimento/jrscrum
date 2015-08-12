<?php
if(isset($_POST["admin"])){
    include_once 'sessionAdmin.php';
    include_once '../Model/Entidade/admin.php';
    include_once '../Model/Persistencia/adminBD.php';
    $login=$_POST["login"];
    $senha=$_POST["senha"];
    $admin=new admin("","","",$login,$senha);
    $adminBD=new adminBD();
    $dados=current($adminBD->selectAdmin($admin));
        if($login==$dados["login"] && $senha==$dados["senha"]){
            echo"achei";
        }else{
            echo 'nao achei';
        }
}else{
echo 'entre como admin';
}