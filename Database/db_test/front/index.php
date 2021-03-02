<?php
require_once '../back/connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./index.js"></script>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <p><a href="./add.php" class="btn_add"> adicionar ao banco de dados denovo</a></p>
    <script> x = <?php  print $dado;        ?>  </script>

    <?php
    for ($i=0; $i < $cont; $i++) {
        echo('<div>
                <p id="nome'.$i.'"> </p>
                <p id="cpf'.$i.'"> </p>
                <script>
                    get_data(x,'.$i.');
                </script>
            </div>');
       }
    
    
    
    ?>


    
</body>
</html>