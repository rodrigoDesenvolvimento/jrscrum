<?php
class Conexao {
 
    private $url="127.0.0.1";
    private $banco="jrscrum";
    private $login="root";
    private $senha="";
    private $conexao;
    private $varificador;
    private $erros;
    private $mensagemErro="Erro entre em contato com o suporte:";
    
    function getErro(){
        return $this->mensagemErro+$this->erros;
    }
    function setErros($erro){
        $this->erros=$erro;
        
    }
         function  __construct(){
         $this->conexao=new PDO("mysql:host=$this->url;dbname=$this->banco","$this->login","$this->senha");
         $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         }
        function getConexao(){
         return $this->conexao;
        }
        function __destruct() {
            $this->conexao=null;
        }
}
?>