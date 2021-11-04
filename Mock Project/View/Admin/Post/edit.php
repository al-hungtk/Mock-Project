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
                                    <label for="">Name</label>
                                    <input class="form-control" type="text" name="name"
                                        value="<?php echo $post['name'] ?>">
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
                                            <option value="<?php echo $value['categoryname'] ?>">
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
                                    <label for="">Information</label>
                                    <input class="form-control" type="text" name="information" id="information"
                                        value="<?php echo $post['information']?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="">Summary</label>
                                    <input class="form-control" type="text" name="summary" id="summary"
                                        value="<?php echo $post['summary']?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="">Picture</label>
                                    <img src="public/images/post/<?php echo $post['picture'] ?>" width="100px"
                                        alt="Image Post">
                                    <input class="form-file" type="file" name="picture" value="public/images/post/<?php echo $post['picture'] ?>"class="form-control">

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