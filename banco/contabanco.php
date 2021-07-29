<?php
    class ContaBanco{
        //atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        //métodosEspeciais
        function __construct(){
        $this->setSaldo = 0;
        $this->setStatus = (false);
        echo"<p>Conta criada com sucesso!</p>";
    }
        public function getNunConta(){
        return $this-> numConta; //estou retornando a consulta 
        }
        public function setNunConta($numConta){
            $this-> numConta = $numConta; //estou recebendo $n que é o numero dessa nova conta.
        }
        public function getTipo(){
            return $this-> tipo;
        }
        public function setTipo($tipo){
            $this-> tipo = $tipo; // estou pegando essa variavel $tipo, e jogando dentro do atributo $tipo;
        }
        public function getDono(){
            return $this-> dono;
        }
        public function setDono($dono){ //toda vez qie tem o $this na frente, é referente a um atributo.
            $this-> dono = $dono;  // já esse "$dono" é uma variavel.
        }
        public function getSaldo(){
            return $this-> saldo;
        }
        public function setSaldo($saldo){
            $this-> saldo = $saldo;
        }
        public function getStatus(){
            return $this-> status;
        }
        public function setStatus($status){
            $this-> status = $status;
        }
        
        //métodos  (esses não segue um padrão, mas sim uma logica)
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "cc"){
                $this-> setSaldo(50);
               
            }elseif($t == "cp"){
                $this->setSaldo(100);
            }

        }
        public function fecharConta(){
            if($this->getSaldo() > 0 ){
                echo"<p>A conta de ".$this->getDono(). " ainda está com Dinheiro</p>";
            }elseif($this->getSaldo() < 0){
                echo"<p>Conta em débito.</p>";

            }else {
                $this-> setStatus(false);
                echo"<p>Conta de ".$this->getDono()."fechada com sucesso.</p>";
            }
        }
        public function depositar($v){
            if($this->getStatus()){ //então .... setSaldo vai obter o saldo + $v que é o valor que recebir como parametro.
                $this-> setSaldo($this-> getSaldo() + $v);
                //$this->saldo = $this->saldo + $v;
                echo"<p>Deposito de R$$v na conta de".$this->getDono(). "</p>";
            }else{
                echo"<p>Impossível depositar, abra uma conta.</p>";
            }
        }
        public function sacar($v){
            if($this->getStatus()){
                if ($this-> getSaldo() >= $v){
                    $this->setSaldo($this->getSaldo() - $v); //ou seja, modifique o saldo para getSaldo() - $v.
                    // $this->saldo = $this->saldo - $v;
                    echo"<p>Saque de R$=$v autorizado na conta de ".$this->getDono()."</p>"; //. estou concatenando
            } else {
                echo"<p>Saldo insuficiente para saque.</p>";
            }
        } else{
                echo"<p>Impossível sacar, abra uma nova conta.</p>";
            }

        }
        public function pagarMensal(){
            if($this-> getTipo() == "cc"){
                $v = 12;
            }elseif ($this-> getTipo() == "cp") {
                $v = 20;
            }
            if($this-> getStatus()){ // essa linha está dizendo. se estiver avita..

                $this->setSaldo($this->getSaldo() - $v);
                echo"<p>Mensalidade de R$$v debitada na conta de".$this->getDono()."</p>";

            }else{
                echo"<p>Problema com a conta. Não posso cobrar.</p>";
            }

        }

    }


?>