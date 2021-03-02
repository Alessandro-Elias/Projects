<?php
class Account{
    public $numconta;
    private $saldo;
    private $dono;
    protected $tipo;
    private $status;
    function __construct($t){
    $this->status = False;
    $this->saldo = 0;
    $this->definir_tipo($t);
    } 
    function definir_tipo($t){
        if($t == "cc"){
            $this->tipo = "Conta Corrente";
            $this->saldo = $this->saldo + 50;
        }
        elseif($t == "cp"){
            $this->tipo = "Conta Poupança";
            $this->saldo = 150;
        }
        else{
            echo("<p> Você digitou um tipo invalido de conta, tente novamente com o valor cc 'Conta corrente'  ou  cp 'Conta Poupança'<br> </p>");
            break;
        }

    }
    public function verificar_saldo(){
        echo("<p> Seu saldo atual é {$this->saldo} reais <br> </p>");
    }
    public function verificar_status(){
        if($this->status == True)
            echo("<p>Sua conta atualmente está aberta <br> </p>");
        else{
            echo("<p>Sua conta atualmente está fechada <br> </p>");
        }
    }
    public function verificarnum_conta(){
        if(!$this->numconta){
            echo(" <p> O número da sua conta ainda não foi definido, portanto defina um para sua segurança. <br> </p>");
        }
        else{
        echo("<p> O número da sua conta é {$this->numconta} <br> </p>");
        }
    }
    public function verificar_tipo(){
        if($this->tipo == "Conta Corrente"){
            echo("<p> Sua conta é uma conta Corrente <br </p>");
        }
        elseif($this->tipo == "Conta Poupança"){
            echo("<p> Sua conta é uma conta Poupança <br> </p>");
        }
        else{
            echo("<p> Você ainda não definiu seu tipo de conta, sugerimos que defina um tipo valido de conta. <br> </p>");
        }
    }
    public function verificar_dono(){
        echo("<p> dono desta conta é: {$this->dono}  <br> <p>");
    }
    public function fechar_conta(){
        if($this->saldo > 0 and $this->status == True){
            echo("<p>Você precisa sacar seu dinheiro antes de fechar uma conta <br> </p>");
        }
        elseif($this->saldo<0 and $this->status == True){
            echo("<p>Você precisa pagar sua divida antes de fechar sua conta <br> </p>");
        }
        elseif($this->status ==False){
            echo("<p>Você não tem uma conta aberta pra fechar burro <br> </p>");
        }
        elseif($this->saldo == 0 and $this->status == True){
            $this->status = False;
            echo("<p> Conta fechada com sucesso <br> </p>");
        }

    }
    public function abrir_conta(){
        $this->status = True;
    }

    public function depositar($d){
        if($d > 0){
        $this->saldo = $this->saldo + $d;
        echo("<p>Você depositou $d reais <br> </p>");
        }
        elseif($d< 0){
            echo("<p> Você quer sacar, não depositar.<br> </p>");
        }
        elseif($d == 0){
            echo("<p> Você depositou 0 reais seu burro.<br> </p>");
        }
        else{
            echo("<p> Não foi feita nenhuma alteração no valor do seu saldo.<br> </p>");
        }
    }
    public function sacar($s){
        if($this->saldo >= $s){
            $this->saldo = $this->saldo - $s;
            echo("<p> Você sacou $s reais <br> </p>");
            $this->verificar_saldo();
        }
        elseif($this->saldo < $s){
            echo("<p> Seu saldo é insuficiente para sacar $s reais <br> </p>");
            $this->verificar_saldo();
        }
        else{
            echo("<p> Falha na operação <br> </p>");
        }
    }
    public function pagarmensal(){
        if($this->tipo == "Conta Corrente"){
            $this->saldo = $this->saldo - 12;
            echo("<p>Você pagou a mensalidade de 12 reais, debitada na conta de" .$this->dono. "</p>");
        } 
        elseif($this->tipo == "Conta Poupança"){
            echo("<p> Você pagou a mensalidade de 20 reais, debitada na conta de ".$this->dono. "</p>");
            $this->saldo = $this->saldo - 20;
        }
    }
    public function definir_numconta($n){
        $this->numconta = $n;
    }
    public function definir_dono($d){
        $this->dono = $d;
    }
}

