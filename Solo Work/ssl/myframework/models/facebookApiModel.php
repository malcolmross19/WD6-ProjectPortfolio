<?php

class facebookApiModel{
    public function __construct($parent){
        $this->db = $parent->db;
    }

    public function login(){
        require_once "Facebook/autoload.php";
        $fb = new \Facebook\Facebook([
            'app_id' => '383350122161079',
            'app_secret' => 'b7a03cabafb210b637fd22be2366ce8b',
            'default_graph_version' => 'v2.10'
        ]);
        $helper = $fb->getRedirectLoginHelper();

        $redirectURL = "http://localhost/facebookapi/fbcallback";
        $permissions = ['email'];
        $loginURL = $helper->getLoginUrl($redirectURL, $permissions);
        return $loginURL;
    }
}

?>


