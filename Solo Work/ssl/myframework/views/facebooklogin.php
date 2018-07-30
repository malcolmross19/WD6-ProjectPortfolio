<?

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



?>

<div class="container" style="margin-top:100px">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
            <form>
                <input type="text" name="email" placeholder="Email" class="form-control"><br>
                <input type="text" name="password" placeholder="Password" class="form-control"><br>
                <input type="submit" value="Log In" class="btn btn-primary">
                <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Facebook" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>