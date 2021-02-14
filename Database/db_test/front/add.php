<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include '../back/connect.php';
        if(!isset($_POST["enviar"])){
    ?>
    <form action="add.php" method="POST">
        nome: <input type="text" name="nome">
        cpf: <input type="text" name="cpf">
        <input type="hidden" name="enviar" value="S">
        <input type="submit" name="incluir" value="incluir dados">
    </form>
    <?php
        }
        else{
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $response = $mysqli->query("insert into clientes (nome,cpf) VALUES ('".$nome."','".$cpf."')");
            if($mysqli->affected_rows>0){
                echo("inserção executada");
            }
            else{
                echo("nigga cat: " . $mysqli->connect_error);

            }

        }
    ?>

    
</body>
</html>