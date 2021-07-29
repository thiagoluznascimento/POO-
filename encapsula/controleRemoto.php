<?php
//quando eu dou  e (implements) falamos que a classe controleRemoto irá implementar a interface de controlador
require_once 'controlador.php';

class ControleRemoto implements Controlador{
    //atributos
    private $volume;
    private $ligado;
    private $tocando;
    //metodosEspeciais
    function __construct(){
        $this-> volume = 50;
        $this-> ligado =(false);
        $this-> tocando =(false);
    } 
    //metodo gets e sets
    private function getVolume(){
        return $this->volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function getTocando(){
        return $this->tocando;
    }
    private function setVolume($volume){
        $this->Volume = $volume;
    }
    private function setLigado($ligado){
        $this->Ligado = $ligado;
    }
    private function setTocando($tocando){
        $this->Tocando = $tocando;
    }
    //metodos 
    public function ligar(){
        $this->setLigado (true);
    }
    public function desligar(){
        $this->setLigado (false);
    }
    public function abrirMenu(){
        echo "<p>----MENU----</P>";
        echo "<br>Está ligado?: " . ($this->getLigado() ? "SIM":"NÃO"); // ? se chama operador ternário em PHP
        echo "<br>Está tocando?: " . ($this->getTocando() ? "SIM" : "NÃO"); //se for vdd ele escreve "SIM" se nao "NÃO
        echo "<br>Volume: " . $this -> getVolume();

        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo "|";
        }
        echo "<br>"; //quebrando a linha 
    }
    public function fecharMenu(){
        echo "<br> Fechando Menu... ";
    }
    public function maisVolume(){
        if ($this-> getLigado()){ // se getLigado for verdadeiro; faca .. como getLigado é um tipo logico não tem necessidade de colocar "== true"
            $this->setVolume($this->getVolume() + 5);   //setando o volume e add o volume mais 5
        }
    }
    public function menosVolume(){
        if($this->getLigado()){  //ou seja se ele estiver ligado faça.
            $this->setVolume($this->getVolume() - 5);  //estou setando o volume. esse trem é topdemais!!
        }
    }
    public function ligarMudo(){ // && simbulo de "e"
        if($this->getLigado() && getVolume() > 0){ //só vai funcionar,se o ligado e volume for maior que 0.
            $this->setVolume(0); //Passando um paramero para ficar mudo ou seja, zerar o volume
        }
    }
    public function desligarMudo(){
        if($this->getLigdo() && getVolume() == 0){ //se estiver ligada e volume for igual a 0, faça.
            $this->setVolume(50);
        }
    }
    public function play(){
        if($this->getLigdo() && ! ($this->getTocando())){ //se está ligado e não tocando.  ! simbulo de negação.
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigdo() && ($this->getTocando())){
            $this->setTocando(false); 
        }
    }
}
?>