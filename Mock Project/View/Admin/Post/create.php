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

                        <h1>ADD POST</h1>

                        <div class="row">
                            <!--[ daily sales section ] start-->
                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input class="form-control" type="text" name="title"
                                        placeholder="Enter your name" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Author</label>
                                    <input class="form-control" type="text" name="author" placeholder="Enter your name"
                                        required>
                                </div>

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

                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input class="form-control" type="datetime-local" name="maxdate" id="maxdate"
                                        placeholder="Enter your date" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Information</label>
                                    <textarea class="form-control" type="text" name="information" id="" cols="140"
                                        rows="10" placeholder="Enter your text" required="information"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Summary</label>
                                    <textarea class="form-control" type="text" name="summary" id="" cols="140"
                                        rows="10" placeholder="Enter your summary" required="summary"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Picture</label>
                                    <input class="form-control" type="file" name="picture" placeholder="Enter your name"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="">Image_Details</label>
                                    <input class="form-control" type="file" name="image_detail" placeholder="Enter your name"
                                        required>
                                </div>

                                <button type="submit" class="btn btn-primary" value="store" name="action">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>