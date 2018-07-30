<?php

class about extends AppController
{
    public function __construct($parent)
    {
        $this->parent = $parent;
        $this->db = $parent->db;
        $this->showList();
    }

    public function showList(){
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table");
        $this->getView("header",array("pagename"=>"about"));
        $this->getView("about",$data);
        //$this->getView("footer");
    }

    public function showAddForm(){

        $this->getView("header",array("pagename"=>"about"));
        $this->getView("addform");
    }

    public function showUpdateForm(){
        $this->getView("header",array("pagename"=>"about"));
        $this->getView("updateform");
    }

    public function addItem(){
        $this->parent->getModel("fruits")->add("insert into fruit_table(name) values(:name)",array(":name"=>$_REQUEST["name"]));

        header("Location:/about");
    }

    public function deleteItem(){
        $this->parent->getModel("fruits")->delete("delete from fruit_table where id = :id",array(":id"=>$_REQUEST["id"]));

        header("Location:/about");
    }

    public function updateItem(){
        //var_dump($_REQUEST);
        $this->parent->getModel("fruits")->update("update fruit_table set name = :name where id = :id",array(":name"=>$_REQUEST["name"],":id"=>$_REQUEST["id"]));

        header("Location:/about");
    }
}

?>