<?php include('View/Home/layouts/header.php')?>
<div class="main">
    <div class="board">
        <div class="container">
            <div class="row">
                <?php foreach($post as $key => $value):?>
                <div class="col col-lg-3">
                    <img src="public/images/post/<?php echo $value['picture'];?>" width="100%"
                        alt="<?php echo $value['title']?>">
                    <h3 class="text-title"><a href="?controller=homecontroller&action=detail-post&id=<?php echo $value['id']?>"><?php echo $value['title']?></a></h3>
                    <p style="display: -webkit-box; max-height: 6.2rem;
                        -webkit-box-orient: vertical;overflow: hidden;
                        text-overflow: ellipsis;white-space: normal;
                        -webkit-line-clamp:3;line-height: 1.6rem;"> <?php echo $value['summary']?></p>
                  
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
<?php include('View/Home/layouts/footer.php')?>