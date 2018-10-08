<?php 
require_once "../controller/loginController.php";

require_once "../dist/includes/header.php";

$usuariosList = new LoginController();

$listUser = $usuariosList->Exibir();


?>
<div class="container">
  <table>
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Alterações</th>
    </thead>
    <tbody>
    <?php 
        for($i=0;$i<=count($listUser)-1;$i++){ 
    ?>
        
            <tr>
                <form method="POST">
                    <td><input type="text" name="id" id="id" value="<?php echo $listUser[$i]['id'];?>"></td>
                    <td><input type="text"  id="nome" name="nome" value=" <?php echo $listUser[$i]['usuario_nome'];?>"></td>
                    <td><input type="email" id="email" name="email"  value=" <?php echo $listUser[$i]['usuario_email'];?>"></td>
                    <td><button name="editar" id="editar" >Editar</button>&nbsp;<button name="deletar" id="deletar">Excluir</button> </td>
                </form>
            </tr>

        <?php }?>
    </tbody>
    <?php 
        if(array_key_exists('deletar',$_POST)){
            $usuariosList->Deletar($_POST['id']);
        }

        if(array_key_exists('editar',$_POST)){
            $usuariosList->editar($_POST);
        }
    ?>
</div>
<?php 
require_once "../dist/includes/footer.php";  
?>