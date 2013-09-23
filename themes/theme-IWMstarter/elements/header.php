<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php Loader::element('header_required'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo $this->getThemePath(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $this->getThemePath(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo $this->getThemePath(); ?>/typography.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $this->getThemePath()?>/css/bootstrap-responsive.css">
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body id="<?= $c->getCollectionHandle() ?>" class="<? global $u; echo $u->isLoggedIn() ? "logged-in" : "logged-out" ?>"> 

<div class="navbar ">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a id="logo" href="/"><?php echo SITE?></a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    <a href="/login" class="navbar-link">Login</a>
                </p>
                <ul class="nav">
                    <?php
                    $a = new GlobalArea('Main Navigation');
                    $a->setBlockLimit(1);
                    $a->display();
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>