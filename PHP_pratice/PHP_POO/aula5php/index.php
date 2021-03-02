<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once '/Account.php';
        $account = new Account('cc');
        $account->abrir_conta();
        $account->definir_dono("Jubileu");
        $account->definir_numconta(1111);
        $account->depositar(300);
        $account_2 = new Account('cp');
        $account_2->abrir_conta();
        $account_2->definir_dono("Creuza");
        $account_2->definir_numconta(2222);
        $account_2->depositar(500);
        $account_2->sacar(100);
        print_r($account);
        print_r($account_2);
        $account->pagarmensal();
        $account_2->pagarmensal();
        $account->verificar_saldo();
        $account_2->verificar_saldo();
        $account_2->sacar(530);
        $account->fechar_conta();
        $account_2->fechar_conta();
    ?> 
    </pre>  
    
</body>
</html>