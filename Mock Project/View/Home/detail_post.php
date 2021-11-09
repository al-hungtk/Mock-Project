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
        .consep{
            height:500px
        }
        .board{
            width: 1150px;
            margin: 50px ;
        }
        .text-title{
            font-size:40px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight:700;
            text-align: center;
        }
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
                                <span><a href="?controller=admincontroller&action=login">LOGIN</a></span>
                                <!-- <form method="post">
                                    <button type="submit" name="action" value="logout"
                                        class="btn btn-primary">logout</button>
                                </form> -->
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
                            <li><a href="#">HOME</a></li>

                            <?php foreach ($categories as $key => $value):?>
                            <li class="nav-item dropdown">
                                <a class="menu-content-before" href="#"
                                    id="navbarDropdown"><?php echo $value['categoryname'];?></a>
                                <div class="dropdown-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <div class="icon-search">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
            <div class="main">
        <div class="consep">
            <div class="board">
                <img src="public/images/post/<?php echo $post['picture'];?>" width="100%"  alt="<?php echo $post['name']?>">
                <h3 class="text-title"><?php echo $post['title']?></h3>
                <p> <?php ?></p>
            </div>
        </div>
            </div>
            <div class="footer">
                <div class="footer-colum">
                    <div class="tail-1">
                        <h5>
                            <span> POPULAR TAGS</span>
                        </h5>
                        <ul class="text-tag">
                            <li><a href="">web design</a></li>
                            <li><a href="">coding</a></li>
                            <li><a href="">photography</a></li>
                            <li><a href="">php</a></li>
                            <li><a href="">wordpress</a></li>
                            <li><a href="">woo commerce</a></li>
                        </ul>
                    </div>
                    <div class="tail-1 text-widget">
                        <h5>
                            <span>TEXT WIDGET</span>
                        </h5>
                        <p>
                            This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lorem quis bibendum auctor duis sed odio sit.
                        </p>
                        <p>
                            amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                            odio tincidunt auctor a ornare
                        </p>
                    </div>
                    <div class="tail-1">
                        <h5>
                            <span>FLICKR GALLERY</span>
                        </h5>
                        <ul class="img-flickr">
                            <li>
                                <img src="public/img/flickr-1.png" width="59" height="60" alt="Img GALLERY 1">
                            </li>
                            <li>
                                <img src="public/img/flickr-2.png" width="59" height="60" alt="Img GALLERY 2">
                            </li>
                            <li>
                                <img src="public/img/flickr-3.png" width="59" height="60" alt="Img GALLERY 3">
                            </li>
                            <li>
                                <img src="public/img/flickr-4.png" width="59" height="60" alt="Img GALLERY 4">
                            </li>
                            <li>
                                <img src="public/img/flickr-5.png" width="59" height="60" alt="Img GALLERY 5">
                            </li>
                            <li>
                                <img src="public/img/flickr-6.png" width="59" height="60" alt="Img GALLERY 6">
                            </li>
                            <li>
                                <img src="public/img/flickr-7.png" width="59" height="60" alt="Img GALLERY 7">
                            </li>
                            <li>
                                <img src="public/img/flickr-8.png" width="59" height="60" alt="Img GALLERY 8">
                            </li>
                        </ul>
                    </div>
                    <div class="tail-1">
                        <h5>
                            <span>FACEBOOK WIDGET</span>
                        </h5>
                        <div class="facebook-widget">
                            <ul class="facebook-info">
                                <li>
                                    <p class="icon-setting"><img src="public/img/setting.png" width="50" height="50"
                                            alt="Setting FACEBOOK"></p>
                                </li>
                                <li>
                                    <p class="text-facebook">
                                        <a href="#">
                                            Facebook Developers <i class="fas fa-check-circle"></i>
                                            <img src="public/img/facebook-like.png" width="50" alt="Icons for Facebook">
                                            <span class="number">3, 108, 789 </span>
                                        </a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="tail-2">
                        <img src="public/img/azeta-footer.png" alt="img logo azeta-footer">
                        <p>
                            © Copyright Gazeta - All rights reserved.<br> Registered in Melbourne, No 13245678.
                            Registered Office: ENVATO Graphics Ltd. 4 Royton Square, Bakewell Road, Orton Westgate,
                            Melbourne PE1 2GX.
                        </p>
                    </div>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js">
        </script>
</body>

</html>