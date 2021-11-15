<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="public/css-font/home.css" type="text/css">
    <title>Post News ALL</title>
    <style>

    </style>
</head>

<body>
    <div class="overall">
        <div class=" wraper">
            <div class="header">
                <div class="list-header">
                    <div class="left-header">
                        <ul class="list-left">
                            <li class="list-date">
                                <span>Tuesday, November, 4, 2014</span>
                            </li>
                            <li>
                                <span class="label"><i class="far fa-sun"></i> 32° C</span>
                            </li>
                        </ul>
                    </div>
                    <div class="right-header">
                        <ul>
                            <li class="list-icon-app">
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-google-plus-g"></i>
                                <i class="fas fa-rss"></i>
                                <i class="fab fa-youtube"></i>
                                <i class="fab fa-pinterest-p"></i>
                            </li>
                            <li class="symbol">
                                <?php if($_SESSION['auth']){?>
                                <span><a href="?controller=admin&action=logout">LOGOUT</a></span>
                                <?php }else{?>
                                <span><a href="?controller=admin&action=login">LOGIN</a></span>
                                <?php }?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="banner-logo">
                <div class="list-logo">
                    <div class="logo-1">
                        <span><img src="public/img/logo.png" alt="Logo AZETE"></span>
                    </div>
                    <div class="logo-2">
                        <img src="public/img/1.png" alt="Logo AZETE">
                    </div>
                </div>
            </div>
            <div class="list-menu">
                <div class="menu-item">
                    <nav class="nav-menu-left">
                        <ul>
                            <li><a href="?controller=home&action=">HOME</a></li>

                            <?php foreach ($categories as $key => $value):?>
                            <li class="nav-item dropdown">
                                <?php if ($value['paren_id'] == 0):?>
                                <a class="menu-content-before"
                                    href="?controller=home&action=list_post&category_id=<?php echo $value['id'];?>"
                                    id="navbarDropdown"><?php echo $value['categoryname'];?></a>
                                <?php endif;?>
                                <div class="dropdown-content">
                                    <?php if (isset($children[$value['id']])):
                                        foreach ($children[$value['id']] as $child):  
                                    ?>
                                    <a class="dropdown-item"
                                        href="?controller=home&action=list_post&category_id=<?php echo $child['id'];?>"><?php echo $child['categoryname'];?></a>
                                    <div class="dropdown-divider"></div>
                                    <?php endforeach; endif;?>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <div class="icon-search">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="pan-lent" style="border:1px solid black; height:1px;margin-top:1px;"></div>
            </div>