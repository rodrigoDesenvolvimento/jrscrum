<?php
include_once 'conexao.php';
class adminBD extends Conexao{
 
    function selectAdmin(admin $ad){
      try{
      $conexao=parent::getConexao();
      $login=$ad->getLogin();
      $senha=$ad->getSenha();
      $comando=$conexao->prepare("select id,nome,email,login,senha from admin where login=? and senha=?");
      $comando->bindParam(1,$login);
      $comando->bindParam(2,$senha);
      $comando->execute();
      return $comando->fetchall(PDO::FETCH_ASSOC); 
      }catch(Exception $ex){
      parent::setErros($ex->getCode().$ex->getMessage());
      }
    }
    
}
