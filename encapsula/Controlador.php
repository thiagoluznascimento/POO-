<?php
//criando interface, que chamamos de controlador.. isso em encapsulamento.
interface Controlador{
//quando colocamos "abstract" que dizer que o metodo nao vai ser desenvolvido aqui dentro.
//ele vai ser desenvolvido na classe -> 

    public  function ligar();
    public  function desligar();
    public  function abrirMenu();
    public  function fecharMenu();
    public  function maisVolume();
    public  function menosVolume();
    public  function ligarMudo();
    public  function desligarMudo();
    public  function play();
    public  function pause();
}
?>