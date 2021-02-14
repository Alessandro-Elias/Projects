<?php
    $mysqli = new mysqli('localhost', 'root', '', 'users');
    if(!$mysqli){
        die('nao foi dessa vez');
    }
    $cont = 0;
    $sql = "select * from clientes";
    if( $resultado = $mysqli->query($sql) ){
        while($row = $resultado->fetch_row()){
            $dados[$cont] = [
               "id" => $row[0],
                "nome" => $row[1],
                "cpf" => $row[2],
            ];
            $cont++;
        }
        $dado = json_encode($dados);
        $resultado->free_result();

    }
?>