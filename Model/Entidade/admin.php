<?php
class admin {
   private $id;
   private $nome;
   private $email;
   private $login;
   private $senha;
   
   function __construct($id, $nome, $email, $login, $senha) {
       $this->id = $id;
       $this->nome = $nome;
       $this->email = $email;
       $this->login = $login;
       $this->senha = $senha;
   }
   
   function getId() {
       return $this->id;
   }

   function getNome() {
       return $this->nome;
   }

   function getEmail() {
       return $this->email;
   }

   function getLogin() {
       return $this->login;
   }

   function getSenha() {
       return $this->senha;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setLogin($login) {
       $this->login = $login;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }



   
}
