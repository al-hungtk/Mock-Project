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
                            <form action="" method="POST" role="form" enctype="multipart/form-data">
                                <legend>Edit category</legend>

                                <div class="form-group">
                                    <input name="id" type="text" value="<?php echo $id?>" class="form-control" id=""
                                        placeholder="Input field" readonly>

                                    <label for="">categoryName</label>
                                    <input name="categoryname" type="text"
                                        value="<?php echo $categories['categoryname']?> " class="form-control" id=""
                                        placeholder="Input field">

                                    <label for="">MoreInfo</label>
                                    <input name="moreinfo" type="text" value="<?php echo $categories['moreinfo']?> "
                                        class="form-control" id="" placeholder="Input field">
                                </div>

                                <button type="submit" name="action" value="save" class="btn btn-primary">SAVE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>