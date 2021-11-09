<?php
    include ('View/Admin/layouts/master.php');
?>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">
                            <!--[ daily sales section ] start-->
                            <form action="" method="post" role="form" enctype="multipart/form">
                                <legend>Form title</legend>
                                <div class="form-group">
                                    <label for="">categoryname</label>
                                    <input type="text" name="category_Name" class="form-control" id=""
                                        placeholder="Input field">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Slected</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="paren_id">
                                        <?php foreach ($categories as $key => $value): ?>
                                        <option value="<?php echo $value['id'] ?>">
                                            <?php echo $value['categoryname'] ?></option>
                                        <?php endforeach; ?>    
                                    </select>
                                </div>
                                <button type="submit" name="action" value="store"
                                    class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>