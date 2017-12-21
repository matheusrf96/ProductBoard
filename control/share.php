<?php

class Share extends Controller{
    protected function Index(){
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->Index(), true);
    }

    protected function add(){
        if(!isset($_SESSION['logado'])){
            header('Location: '.ROOT_URL.'share');
        }
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->add(), true);
    }
}