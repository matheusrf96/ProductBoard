<?php

class ShareModel extends Model{
    public function Index(){
        $this->query("SELECT * FROM Produto");
        $rows = $this->resultSet();

        return $rows;
    }

    public function add(){
        if($_POST['submit-add']){
            $prod = new Produto($_POST['nome'], $_POST['valor'], $_POST['desc']);

            $this->query("
                INSERT INTO Produto(nome, valor, descricao) VALUES
                (:nome, :valor, :descricao)
            ");

            $this->bind(":nome", $prod->getNome());
            $this->bind(":valor", $prod->getValor());
            $this->bind(":descricao", $prod->getDescricao());

            if($this->execute()){
                header("Location: ".ROOT_URL."share");
            }
            else{
                Message::setMsg("Ocorreu um erro ao cadastrar o produto. Tente novamente.", 'error');
            }            
        }
        
        return;
    }
}