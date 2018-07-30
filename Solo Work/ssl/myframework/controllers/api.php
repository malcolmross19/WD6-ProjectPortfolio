<?php

class api extends AppController{
    public function __construct($parent)
    {
        $this->parent = $parent;
    }

    public function showApi(){
        $this->getView("header",array("pagename"=>"api"));
        $data = $this->parent->getModel("apiModel")->googleBooks("Henry David Thoreau");
        $this->getView("api",$data);
        //$this->getView("footer");
    }
}

?>