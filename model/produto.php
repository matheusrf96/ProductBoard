<?php

class Produto{
    private $id;
    private $nome;
    private $valor;
    private $descricao;

    public function __construct($nome, $valor, $desc){
        $id = null;
        
        if(strlen($nome) >= 45){
            $this->nome = substr($nome, 0, 45);
        }
        else{
            $this->nome = $nome;
        }

        if($valor > 0){
            $this->valor = $valor;
        }
        else{
            $this->valor = 0.0;
        }

        $this->descricao = $desc;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        if(strlen($nome) >= 45){
            $this->nome = substr($nome, 0, 45);
        }
        else{
            $this->nome = $nome;
        }
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        if($valor > 0){
            $this->valor = $valor;
        }
        else{
            $this->valor = 0.0;
        }
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function toString(){
        return "
            ID: ".$this->id."<br />
            Nome do Produto: ".$this->nome."<br />
            Valor do Produto: ".$this->valor."<br />
            Descrição: ".$this->descricao."<br /><br />
        ";
    }
}