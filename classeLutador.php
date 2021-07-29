<?php
class Lutador{
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade,$altura,$peso;
    private $categoria,$vitorias,$derrotas,$empates;
}
public function apresentar(){

}
public function status(){

}
public function ganharLuta(){

}
public function perderLuta(){

}
public function empatarLuta(){
    
}
//metodosEspeciais
function __construct($no, $na, $id, $al, $pe, $ca, $vi, $de, $em){
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->peso = $pe;
    $this->catergoria = $ca;
    $this->vitorias = $vi;
    $this->derrotas = $de;
    $this->empates = $em; 
}
public function getNome(){
    return $nome;
}
public function getNacionalidade(){
    return $nacionalidade;
}
public function getIdade(){
    return $idade;
}
public function getAltura(){
    return $altura;
}
public function getPeso(){
    return $peso;
}
public function getCategoria(){
    return $categoria;
}
public function getVitorias(){
    return $vitorias;
}
public function getDerrotas(){
    return $derrotas;
}
public function getEmpates(){
    return $empates;
}

public function setNome($no){
    $this->nome = $no;
}
public function setPeso($pe){
    $this->peso = $pe;
    $this->setCategoria();
}