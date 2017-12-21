<?php

class Users extends Controller{
    protected function login(){
        $viewmodel = new UsersModel();
        $this->returnView($viewmodel->login(), true);
    }

    protected function register(){
        $viewmodel = new UsersModel();
        $this->returnView($viewmodel->register(), true);
    }

    protected function logout(){
        unset($_SESSION['logado']);
        unset($_SESSION['usuario']);
        session_destroy();

        header('Location: '.ROOT_URL);
    }
}