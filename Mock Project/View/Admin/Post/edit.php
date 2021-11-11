<?php
    include ('View/Admin/layouts/master.php');
    
?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->

                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!--[ daily sales section ] start-->

                            <form action="" method="POST" enctype="multipart/form-data">
                                <h1>Add Post New</h1>
                                <div class="form-group">
                                    <label for="">ID</label>
                                    <input class="form-control" type="text" name="id" value="<?php echo $post['id'] ?>"
                                        readonly>
                                </div>

                                <div class="form-group">
                                    <label for="">title</label>
                                    <input class="form-control" type="text" name="title"
                                        value="<?php echo $post['title'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Author</label>
                                    <input class="form-control" type="text" name="author"
                                        value="<?php echo $post['author'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Category_id</label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Slected</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="category_id">
                                            <?php foreach ($categories as $key => $value): ?>
                                            <option value="<?php echo $value['id'] ?>">
                                                <?php echo $value['categoryname'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="">Maxdate</label>
                                    <input class="form-control" type="datetime" name="maxdate"
                                        value="<?php echo $post['maxdate'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">Informations</label>
                                    <textarea class="form-control mytextarea" type="text" name="information" id="" cols="140"
                                        rows="10" placeholder="Enter your information" ><?php echo  $post['information'];?></textarea>
                                </div>
                             
                                <div class="form-group">
                                    <label for="">Summary</label>
                                    <textarea class="form-control mytextarea" type="text" name="summary" id="" cols="140"
                                        rows="10" placeholder="Enter your summary" ><?php echo  $post['summary'];?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Picture</label>

                                    <input class="form-file" type="file" name="picture"
                                        value="public/images/post/<?php echo $post['picture'] ?>" class="form-control">
                                    <img src="public/images/post/<?php echo $post['picture'] ?>" width="100px"
                                        alt="Image Post">

                                </div>

                                <div class="form-group">
                                    <label for="">Image_Details</label>
                                    <input class="form-file" type="file" name="image_detail"
                                        value="public/images/post/image_detail/<?php echo $post['image_detail'] ?>"
                                        class="form-control">
                                    <img src="public/images/post/image_detail/<?php echo $post['image_detail'] ?>"
                                        width="100px" alt="Image Post">
                                </div>
                                <button type="submit" class="btn btn-warning" name="action" value="update">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
tinymce.init({
    selector: '.mytextarea'

});

</script>