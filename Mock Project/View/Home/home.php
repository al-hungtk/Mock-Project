<?php include('View/Home/layouts/header.php')?>

<div class="main">
    <div class="main-left">
        <h5 class="box-tweets">
            <p class="title-latest">LATEST NEWS</p>
        </h5>
        <ul class="last-news">
            <?php foreach ($post as $news):?>
            <li>
                <strong>
                    <a href="?controller=home&action=detail-post&id=<?php echo $news['id'] ?>" style="color:red">
                        <?php echo $news['author']?>
                    </a>
                </strong>
                <p> <i class="far fa-clock"></i> <?php echo $news['created_at']?></p>
                <h4>
                    <a href="?controller=home&action=detail-post&id=<?php echo $news['id'] ?>" style="color:black">
                        <?php echo $news['title']?>
                    </a>
                </h4>
            </li>
            <span class="dash"></span>
            <?php endforeach; ?>
            <li>
                <a style="color:#fff;" href="?controller=home&action=all-post" class="btn1">View All Posts</a>
            </li>
        </ul>
        <div class="aside">
            <div class="img-content">
                <img src="public/img/docean.png" width="125" height="125" alt="img docean">
            </div>
            <h5 class="box-tweets">
                <p class="title-latest">TWWETS</p>
            </h5>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="public/img/logo-pic.png" width="62" height="62" class="d-block" alt=" Img Logo-pic">
                        <div class="carousel-text-slide d-none d-md-block">
                            <p>
                                Check out 'Momental - Vertical Navigation HTML5 Template' on
                                <a href="#">@EnvatoMarket</a> by <a href="#">@premiummlayers</a>
                                #themeforest <strong><a href="#">http://t.co/eva3o65Kky</a></strong>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="public/img/logo-pic.png" width="62" height="62" class="d-block" alt="Img Logo-pic">
                        <div class="carousel-text-slide d-none d-md-block">
                            <p>
                                Check out 'Momental - Vertical Navigation HTML5 Template' on
                                <a href="#">@EnvatoMarket</a> by <a href="#">@premiummlayers</a>
                                #themeforest <strong><a href="#">http://t.co/eva3o65Kky</a></strong>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/logo-pic.png" width="62" height="62" class="d-block" alt="Img Logo-pic">
                        <div class="carousel-text-slide d-none d-md-block">
                            <p>
                                Check out 'Momental - Vertical Navigation HTML5 Template' on
                                <a href="#">@EnvatoMarket</a> by <a href="#">@premiummlayers</a>
                                #themeforest <strong><a href="#">http://t.co/eva3o65Kky</a></strong>
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev button-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <i class="icon-slide fas fa-arrow-circle-left"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next button-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <i class="icon-slide fas fa-arrow-circle-right"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div>
            <h6 class="new-cate">
                <p>What's Your Favourite News Category</p>
            </h6>
            <form class="form-horizontal">
                <ul>
                    <li>
                        <input type="radio" name="radiog_lite" id="radio1" class="css-checkbox">
                        <label for="radio1" class="css-label radGroup1">Business</label>
                    </li>
                    <li>
                        <input type="radio" name="radiog_lite" id="radio2" class="css-checkbox">
                        <label for="radio2" class="css-label radGroup1">Technology</label>
                    </li>
                    <li>
                        <input type="radio" name="radiog_lite" id="radio3" class="css-checkbox">
                        <label for="radio3" class="css-label radGroup1">Science</label>
                    </li>
                    <li>
                        <input type="radio" name="radiog_lite" id="radio4" class="css-checkbox">
                        <label for="radio4" class="css-label radGroup1">Nature</label>
                    </li>
                    <li>
                        <input type="radio" name="radiog_lite" id="radio5" class="css-checkbox">
                        <label for="radio5" class="css-label radGroup1">Culture</label>
                    </li>
                </ul>
            </form>
            <div class="vote">
                <a href="#">Vote</a>
            </div>
        </div>
    </div>
    <div class="main-center">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="slide-img">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <?php foreach ($post as $key => $value): ?>
                <div class="carousel-item <?php echo $key == 1 ? 'active' : ''?> ">
                    <span><?php echo $value['author']?></span>
                    <a href="?controller=home&action=detail-post&id=<?php echo $value['id'] ?>">
                        <img src="public/images/post/<?php echo $value['picture'];?>" width="570" height="460"
                            alt="img LATEST NEWS">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>
                            <a href="?controller=home&action=detail-post&id=<?php echo $value['id'] ?>"
                                style="color:white">
                                <?php echo $value['title']?>
                            </a>
                        </h5>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="box-alt">
            <h5>
                FEATURED NEWS
            </h5>
        </div>
        <div class="box-show">
            <nav>
                <?php foreach ($featured_news as $value):?>
                <li class="colum-1">
                    <div class="cell-1">
                        <img src="public/images/post/<?php echo $value['picture'];?>" width="271" height="182"
                            alt="img technology">
                        <div class="text-img"><?php echo $value['author']?></div>
                        <h5>
                            <a class="text-mutedd"
                                href="?controller=home&action=detail-post&id=<?php echo $value['id']?>"
                                style="font-family: sans-serif;">
                                <?php echo $value['title']?>
                            </a>
                        </h5>
                        <p class="text-icon"> <i class="far fa-clock"></i>
                            <?php echo $value['created_at']?><i class="fas fa-comments"></i> 5</p>
                        <span class="max-text" style="display: -webkit-box; max-height: 5rem;
                        -webkit-box-orient: vertical;overflow: hidden;
                        text-overflow: ellipsis;white-space: normal;
                        -webkit-line-clamp:4;line-height: 1.6rem;">
                            <?php echo $value['summary']?>
                        </span>
                    </div>
                </li>
                <?php endforeach; ?>

            </nav>

        </div>
        <div class="box-alt">
            <h5>
                <span>TECHNOLOGY</span>
            </h5>
        </div>
        <div class="box-technology">
            <?php foreach ($technology as $key => $value):?>
            <div class="colum-3">
                <div class="cell">
                    <img src="public/images/post/<?php echo $value['picture'];?>" width="270" height="460"
                        alt="IMG TECHNOLOGY">
                </div>
            </div>
            <div class="colum-4">
                <div class="box-center">
                    <h5 class="title-technology">
                        <a style=""
                            href="?controller=home&action=detail-post&id=<?php echo $value['id'] ?>"><?php echo $value['title'];?></a>
                    </h5>
                    <p> <i class="far fa-clock">
                        </i><?php echo$value['created_at']?> <i class="fas fa-comments"></i> 5
                    </p>
                    <span class="title-technology text-box-p">
                        <?php echo $value['summary']?>
                    </span>
                    <ul>
                        <?php foreach ($tech as $key => $value):?>
                        <li>
                            <h4 >
                                <i class="icon fas fa-arrow-right"></i>
                                <a  href="?controller=home&action=detail-post&id=<?php echo $value['id'] ?>"><?php echo $value['title']; ?>
                                </a>
                            </h4>
                        </li>
                        <?php  endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php  endforeach; ?>
        </div>
    </div>
    <div class="main-right">
        <div class="title-main">
            <span>POPULAR NEWS</span>
        </div>
        <div class="list-ul">
            <ul>
                <?php foreach($post as $value):?>
                <li>
                    <p class="img-popular">
                        <img src="public/images/post/<?php echo $value['picture'];?>" width="110" height="81"
                            alt="Driverless cars">
                    </p>
                    <div class="popular-news-text">
                        <p class="text-icon"> <i class="far fa-clock">
                            </i> <?php echo $value['created_at']; ?> <i class="fas fa-comments"></i> 5
                        </p>
                        <h4>
                            <a href="?controller=home&action=detail-post&id=<?php echo $value['id'] ?>">
                                <?php echo $value['title']; ?>
                            </a>
                        </h4>
                    </div>
                    <div class="dash-main"></div>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="side-widget">
            <a href="#">
                <img src="public/img/codecanyon.png" alt=" img codecanyon">
            </a>
        </div>
        <div class="title-main">
            <span>MOST COMMENTED</span>
        </div>
        <ul class="designed">
            <?php foreach ($comment as $key => $value):?>
            <li>
                <img src="public/images/post/<?php echo $value['picture']?>" width="370" height="201"
                    alt="MOST COMMENTED 1">
                <h5>
                    <a href="?controller=home&action=detail-post&id=<?php echo $value['id'] ?>">
                        <?php echo $value['title']?>
                    </a>

                </h5>
                <p> <?php echo $value['author']?></p>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
<?php include('View/Home/layouts/footer.php')?>