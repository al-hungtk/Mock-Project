<?php include('View/Home/layouts/header.php')?>
<div class="main">
    <div class="board">
        <div class="container">
            <div class="row">
                <?php foreach($post as $key => $value):?>
                <div class="col col-lg-3">
                    <img src="public/images/post/<?php echo $value['picture'];?>" width="270" height="170"
                        alt="<?php echo $value['title']?>">
                    <h3 class="text-mutedd top-text">
                        <a href="?controller=home&action=detail-post&id=<?php echo $value['id']?>"><?php echo $value['title']?>
                        </a>
                    </h3>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
<?php include('View/Home/layouts/footer.php')?>