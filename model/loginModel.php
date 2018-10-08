<?php

Class LoginModel{
    public function __construct() {
        $username = "root";
        $senha    = "";

        $this->banco = new PDO('mysql:host=localhost;dbname=dev_disys', $username, $senha);
        $this->banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function login($login){
        
        
        $usuario = $this->banco->query("SELECT * FROM usuarios_dev where usuario_email = '".$login['email']."' && senha = '".$login['senha']."'")->fetch();
        
        if($usuario['usuario_email']){
            return true;
        }
        if(!isset($usuario)){
           return false;
        }
    }

    public function cadastraLogin($login){
     
       $usuario = $this->banco->query(" Insert Into usuarios_dev (usuario_nome, usuario_email, senha) values('".$login['nome']."','".$login['email']."','".$login['senha']."') ");
        
       return true;
    }
    Public Function Exibir(){
        $usuario = $this->banco->query("SELECT * FROM usuarios_dev")->fetchAll();
            
        return $usuario;
    }

    Public Function Editar($login){
        
        $usuario = $this->banco->query("UPDATE usuarios_dev SET usuario_nome = '".$login['nome']."', usuario_email = '".$login['email']."' WHERE id = '".$login['id']."'");
            
        return $usuario;
    }

    Public Function Deletar($login){
        $usuario = $this->banco->query("DELETE FROM usuarios_dev Where id = '".$login."' ");
            
        return true;
    }
}

?>