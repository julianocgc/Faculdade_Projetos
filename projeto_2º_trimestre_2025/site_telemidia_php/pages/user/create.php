<?php
$rp = '../..';
require_once $rp . '/config.php';
require_once $rp . '/actions/user.php';
require_once $rp . '/pages/partials/header.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    createUserAction($conn, $_POST["name"], $_POST["email"], $_POST["phone"]);

?>
<div class="container">
	<div class="row">
        <a href="<?=$rp?>/index.php"><h1>Users - Create</h1></a>
        <a class="btn btn-success text-white" href="<?=$rp?>/index.php">Voltar</a>
    <br><br>
    </div>
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="<?=$rp?>/pages/user/create.php" method="POST">
                <label>Nome</label>
                <input type="text" name="name" required/>
                <label>E-mail</label>
                <input type="email" name="email" required/>
                <label>Comentários</label>
                <input type="text" name="phone" required/>

                <button class="btn btn-success text-white" type="submit">Salvar</button>
                <br>
            </form>
        </div>
    </div>
</div>
<?php require_once $rp . '/pages/partials/footer.php'; ?>

