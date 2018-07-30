<?php
    //session_start();
    require_once "./Facebook/autoload.php";

    $fb = new \Facebook\Facebook([
        'app_id' => '383350122161079',
        'app_secret' => 'b7a03cabafb210b637fd22be2366ce8b',
        'default_graph_version' => 'v2.10'
    ]);
    $helper = $fb->getRedirectLoginHelper();
?>