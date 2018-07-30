<?php

require_once 'facebookconfig.php';

try {
    $accessToken = $helper->getAccessToken();
} catch (\Facebook\Exceptions\FacebookResponseException $e){
    echo "Response Exceptions: " . $e->getMessage();
    exit();
} catch (\Facebook\Exceptions\FacebookSDKException $e){
    echo "SDK Exceptons: " . $e->getMessage();
    exit();
}

if (!$accessToken) {
    header("Location: facebooklogin.php");
    exit();
}

$oAuth2Client = $fb->getOAuth2Client();
if (!$accessToken->isLongLived())
    $accessToken = $oAuth2Client->getLongLivedAccessToken();

$response = $fb->get("me?fields=id,picture.type(large),email,first_name,last_name", $accessToken);
$userData = $response->getGraphNode()->asArray();

$_SESSION['userData'] = $userData;
$_SESSION['accessToken'] = (string) $accessToken;
header("Location: index");
exit();

?>


