<?php include('View/Home/layouts/header.php')?>
            <div class="main">
                <div class="consep">
                    <div class="board">
                        <img src="public/images/post/<?php echo $post['picture'];?>" width="100%"
                            alt="<?php echo $post['title']?>">
                        <h3 class="text-title"><?php echo $post['title']?></h3>
                        <p> <?php echo $post['information']?></p>
                        <p> <?php echo $post['summary']?></p>
                        <p> <?php echo $post['author']?></p>
                        <p> <?php echo $post['created_at']?></p>
                        <img src="public/images/post/image_detail/<?php echo $post['image_detail'];?>" width="100%"
                            alt="<?php echo $post['title']?>">
                            <p> <?php echo $post['summary']?></p>
                            <p> <?php echo $post['summary']?></p>


                    </div>
                </div>
            </div>
<?php include('View/Home/layouts/footer.php')?>

          