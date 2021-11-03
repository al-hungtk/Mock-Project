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
                            <form action="" method="post" role="form" enctype="multipart/form">
                                <legend>Form title</legend>
                                <div class="form-group">
                                    <label for="">categoryname</label>
                                    <input type="text" name="category_Name" class="form-control" id=""
                                        placeholder="Input field">
                                    <label for="">moreinfo</label>
                                    <input type="text" name="more_Info" class="form-control" id=""
                                        placeholder="Input field">
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