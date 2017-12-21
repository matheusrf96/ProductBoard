<?php

abstract class Controller{
    protected $request;
    protected $action;

    public function __construct($action, $request){
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction(){
        return $this->{$this->action}();
    }

    protected function returnView($viewmodel, $fullview){
        $view = 'view/actions/'.get_class($this).'/'.$this->action.'.php';
        $view = strtolower($view);

        if($fullview){
            require('view/main.php');
        }
        else{
            require($view);
        }
    }
}

?>