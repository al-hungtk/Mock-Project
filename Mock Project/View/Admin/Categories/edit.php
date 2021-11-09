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
                                    <input name="id" type="text" value="<?php echo $category['id'] ?>" placeholder=""class="form-control" id=""
                                        placeholder="Input field" readonly>

                                    <label for="">categoryName</label>
                                    <input name="categoryname" type="text"
                                        value="<?php echo $category['categoryname']?> " class="form-control" id=""
                                        placeholder="Input field">

                                    <label for="">MoreInfo</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Slected</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="paren_id">
                                            <?php foreach ($categories as $key => $value): ?>
                                            <option value="<?php echo $value['id'] ?>">
                                                <?php echo $value['id'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
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