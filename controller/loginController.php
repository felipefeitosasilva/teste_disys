<?php 
require_once "../model/loginModel.php";

Class LoginController {
    Public Function __construct() {
       
    }
    
    Public Function login($login){

       
        if(isset($login) == 'true'){

            $verificaLogin = new LoginModel();  
            
            $loginConsult = $verificaLogin->login($login);
          
            //var_dump($loginConsult);
            
            if($loginConsult == 'true'){
                echo "<script>alert('parabpens')</script>";
                header("location:../views/conteudo.php");
            }elseif($loginConsult == ''){
                echo "<script>alert('E-mail e/ou Senha estão Incorretos')</script>";
            }
        
        }else{
            alert('Por favor, Preencha os campos corretamente.');
        }
    }

    Public Function cadastrar($login){
        
        if(isset($login) == 'true'){

            $cadastraLogin = new LoginModel();  
            
            $cadastraLogin = $cadastraLogin->cadastraLogin($login);
              
            if($cadastraLogin == 'true'){
                echo "<script>alert('Cadastrado com Sucesso')</script>";
                header("location:../views/login.php");
            }elseif($cadastraLogin == ''){
                echo "<script>alert('Erro ao Cadastrar')</script>";
            }
        
        }else{
            alert('Por favor, Preencha os campos corretamente.');
        }
    }

    Public Function Exibir(){
        
        $exebirUsuarios = new loginModel();

        $usuarios = $exebirUsuarios->Exibir();

        return $usuarios;
    }

    Public Function Deletar($login){

        $exebirUsuarios = new loginModel();

        $usuarios = $exebirUsuarios->Deletar($login);

        return true;
       
    }

    Public Function Editar($login){
        
        $exebirUsuarios = new loginModel();

        $usuarios = $exebirUsuarios->Editar($login);

        return true;
       
    }
}