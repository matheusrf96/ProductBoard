<?php

class UsersModel extends Model{
    public function register(){
        if($_POST['submit-register']){
            if($_POST['senha1'] == $_POST['senha2']){
                $password = md5($_POST['senha1']);
            }
            else{
                Message::setMsg("Senhas não batem! Tente novamente.", 'error');           
            }

            $this->query("
                INSERT INTO Usuario(nome, email, senha) VALUES
                (:nome, :email, :senha)
            ");

            $this->bind(':nome', $_POST['nome']);
            $this->bind(':email', $_POST['email']);
            $this->bind(':senha', $password);

            if($this->execute()){
                header('Location: '.ROOT_URL.'users/login');
                echo "Usuário cadastrado com sucesso";
            }
            else{
                Message::setMsg("Ocorreu um erro ao registrar o usuário!", 'error');
            }
        }
        
        return;
    }

    public function login(){
        if($_POST['submit-login']){

            $password = md5($_POST['senha']);

            $this->query("SELECT * FROM Usuario WHERE email = :email AND senha = :senha");

            $this->bind(':email', $_POST['email']);
            $this->bind(':senha', $password);

            $row = $this->singleResult();

            if($row){
                $_SESSION['logado'] = true;
                $_SESSION['usuario'] = array(
                    "id" => $row['id'],
                    "nome" => $row['nome'],
                    "email" => $row['email'],
                    "senha" => $row['senha']
                );

                header('Location: '.ROOT_URL.'share');
            }
            else{
                Message::setMsg("Login incorreto! Tente novamente.", 'error');
            }
        }
        
        return;
    }
}