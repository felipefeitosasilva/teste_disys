<?php 

require_once "../controller/loginController.php";
$loginCheck = new LoginController();
if($_POST){
    $loginCheck->cadastrar($_POST);
}
?>
<html>
<head>
    <title>Teste Dev.</title>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Felipe Silva">

        <!-- Links CSS -->
            <link href="../dist/css/bootstrap.css" rel="stylesheet">
            <link href="../dist/css/style.css" rel="stylesheet">
        <!-- End Links CSS -->
</head>
<body>
    <div class="login-page">
            <div class="form">
                
                <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <input type="text" name="nome" placeholder="Nome"/>
                <input type="email" name="email" placeholder="E-mail"/>
                <input type="password" name="senha" placeholder="Senha"/>
                <button >Registrar</button> <br>&nbsp;
                <button>Voltar</button>
               
                </form>
            </div>
        </div>
<?php 
require_once "../dist/includes/footer.php";
?>