<div class="pan"></div>
<div class="strikethrough"></div>
<div class="footer">
    <div class="footer-colum">
        <div class="tail-1">
            <h5>
                <span> POPULAR TAGS</span>
            </h5>
            <ul class="text-tag">
                <?php foreach ($categories as $key => $value):
                    if($value['paren_id'] ==0 ):
                ?>
                <li><a href="?controller=homecontroller&action=list_post&category_id=<?php echo $value['id'];?>"><?php echo $value['categoryname']; ?></a></li>
                <?php endif; endforeach;?>
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
            <li><a href="?controller=homecontroller&action=">HOME</a></li>
            <?php foreach ($categories as $key => $value):
                if($value['paren_id'] ==0 ):
            ?>
            <li><a href="?controller=homecontroller&action=list_post&category_id=<?php echo $value['id'];?>"><?php echo $value['categoryname']; ?></a></li>
            <?php endif; endforeach;?>

        </ul>
    </div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js">
</script>
</body>

</html>