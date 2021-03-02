<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
        <form action="matrix.php" method="POST">
            <label for="row">   How much rows you want in your matrix? </label>
            <label for="column">    How much columns you want in your matrix? <br></label>
            <input name="row"   id="row" type="number"><br>
            <input name="column" id="column" type="number"> <br>
            <input type="submit" name='firstsubmit' value='envia ai mano'/>
        </form>
        <?php
        /* Programa para criação de matrizes */                                                 
        // functions
        
        if(isset($_POST['row'])){
            $row = $_POST['row'];
        }
        else{
            echo "The rows wasn't given".'<br>';
        }
        if(isset($_POST['column'])){
            $column = $_POST['column'];

        }
        else{
            echo "The columns wasn't given".'<br>';
        }
        $matriz = array();
        $coluna = array();
        if($row and $column !== null){
            for($i=1; $i<=$row; $i++){
                for($cont=1;$cont<=$column;$cont++){
                    ?>
                    <div> 
                            
                        <form action='' method="POST">
                        <label for="linha">Digite um valor pra linha<?php echo $i; ?> e coluna<?php echo $cont; ?></label>
                        <input name="linha" id="linha" type="number"><br>
                        <Input type="submit" id="valor" name='valor' value='input'/>
                    </div>
                    <?php 
                    if(isset($_POST['valor'])){
                        $value = $_POST['linha'];
                        $coluna[$cont] = $cont;
                        $key = 1;
                        echo 'none'.$value;
                }
                
        }
        }
    }
        else{
            echo("create your matrix bro");
        }
        ?>

</body>
</html>