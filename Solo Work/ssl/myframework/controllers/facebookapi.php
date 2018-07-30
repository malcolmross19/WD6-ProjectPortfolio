<?php

class facebookapi extends AppController{
    public function __construct($parent)
    {
        $this->parent = $parent;
    }

    public function facebookLogin(){
        $this->getView("header",array("pagename"=>"facebook"));
        $this->getView("facebooklogin");
    }

    public function login(){
        $this->parent->getModel("facebookApiModel")->login();
    }

    public function fbcallback(){
        $this->getView("fb-callback");
    }

    public function index(){
        $this->getView("header", array("pagename"=>"facebook"));
        $this->getView("facebookindex");
    }
}

?>