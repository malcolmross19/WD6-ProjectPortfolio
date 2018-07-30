<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/logo-nav.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/tether.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="../assets/email/validation.js" type="text/javascript"></script>

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <!--<a class="nav-link" href="main/login">
            <!--<img src="http://placehold.it/300x60?text=Logo" width="150" height="30" alt="">
            Login
        </a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-form navbar-left" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li <?=@$data["pagename"]=="index"?'class="active"':''?>>
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li <?=@$data["pagename"]=="about"?'class="active"':''?>>
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li <?=@$data["pagename"]=="api"?'class="active"':''?>>
                    <a class="nav-link" href="/api/showApi">Api</a>
                </li>
                <li <?=@$data["pagename"]=="facebook"?'class="active"':''?>>
                    <a class="nav-link" href="/facebookapi/facebookLogin">Facebook</a>
                </li>
                <li <?=@$data["pagename"]=="services"?'class="active"':''?>>
                    <a class="nav-link" href="services" onclick="toggleActive(this)">Services</a>
                </li>
                <li <?=@$data["pagename"]=="contact"?'class="active"':''?>>
                    <a class="nav-link" href="main/contact" onclick="checkURL(this)">Contact</a>
                </li>
            </ul>

        </div> <!--/.nav-collapse -->
        <span style="color:red"><?=@$_REQUEST["msg"]?$_REQUEST["msg"]:'';?></span>
        <?if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){?>
            <form class="navbar-form navbar-right">
                <a href="/profile">Profile</a>|
                <a href="/auth/logout">Logout</a>
            </form>
        <?}else{?>
            <form class="form-inline" role="search" method="post" action="/auth/login" style="display:inline">
                <div class="form-control">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-control">
                    <input type="text" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
        <?}?>
    </div>
</nav>