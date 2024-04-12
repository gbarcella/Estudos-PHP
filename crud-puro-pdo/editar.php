<?php
    require "config.php";
    
    $info = [];
    $id = filter_input(INPUT_GET, 'id');

    if($id) {
        
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) {

            $info = $sql->fetch(PDO::FETCH_ASSOC);

            $name = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            

        } else {
            header("Location: index.php");
            exit;
        }

    } else {
        header("Location: index.php");
        exit;
    }
?>

<h1>Editar Usuário</h1>

<form action="editar_action.php" method="post">
    <input type="hidden" name="id" value="<?= $info['id'] ?>">
    <label>
        Nome: <br/>
        <input type="text" name="name" value="<?= $info['nome'] ?>"><br/>
    </label>

    <br/>

    <label>
        Email: <br/>
        <input type="email" name="email" value="<?= $info['email'] ?>"><br/>
    </label>

    <br/>

    <input type="submit" value="Salvar">
</form>