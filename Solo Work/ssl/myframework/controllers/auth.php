<?php

class auth extends AppController{

    public function __construct($parent)
    {
        $this->parent = $parent;
    }

    public function login(){

        if($_REQUEST["username"] && $_REQUEST["password"]){
            $data = $this->parent->getModel("users")->select(
                "select * from users where email = :email and password = :password",
                array(":email"=>$_REQUEST["username"],":password"=>sha1($_REQUEST["password"])));

            if($data){
                $_SESSION["loggedin"]=1;
                $_SESSION['aboutme']=$data["aboutme"];
                header("location:/main");
            }else{
                header("location:/main?msg=Bad Login");
            }
        }

        /*if($_REQUEST["username"] && $_REQUEST["password"]){

            if($_REQUEST["username"]=="malcolmross93@gmail.com" && $_REQUEST["password"]=="password"){
                $_SESSION["loggedin"]=1;
                header("Location:/main");
            }else{
                header("Location:/main?msg=Bad Login");
            }

        }else{
                header("Location:/main?msg=Bad Login");
        }*/

    }

    public function fileLogin()
    {
        if ($_REQUEST["username"] && $_REQUEST["password"]) {
            $profiles = file("assets/profiles.txt");
            global $match;
            global $profile;
            $i = 0;

            while($i < count($profiles)){
                $profile = explode("|", $profiles[$i]);

                if($_REQUEST["username"]==$profile[0] && $_REQUEST["password"]==$profile[1]){
                    $match = true;
                    $_SESSION["aboutme"]=$profile[2];
                }
                $i++;
            }

            if(!$match){
                header("Location:/main?msg=Bad Login");
            }else{
                $_SESSION["loggedin"]=1;
                header("Location:/main");
            }
        }else{
            header("Location:/main?msg=Bad Login");
        }
    }


    public function logout(){
        session_destroy();
        header("Location:/main");
    }

}

?>