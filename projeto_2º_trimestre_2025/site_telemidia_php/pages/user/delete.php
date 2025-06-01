<?php
$rp = '../..';
require_once $rp . '/config.php';
require_once $rp . '/actions/user.php';
require_once $rp . '/pages/partials/header.php';

if(isset($_POST['id']))
    deleteUserAction($conn, $_POST['id']);

?>
<div class="container">
	<div class="row">
        <a href="../../../index.php"><h1>Users - Delete</h1></a>
        <a class="btn btn-success text-white" href="../../../index.php">Voltar</a>
    <br><br>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="../../pages/user/delete.php" method="POST">
                <label>Você realmente quer remover este usuário?</label>
                <input type="hidden" name="id" value="<?=$_GET['id']?>" required/>

                <button class="btn btn-success text-white" type="submit">Sim</button>
            </form>
        </div>
    </div>
</div>
<?php require_once $rp . '/pages/partials/footer.php'; ?>
