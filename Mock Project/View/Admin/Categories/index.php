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
                            <h1 class="text-center">List of categories
                                <div class="row">
                                    <a href="?controller=categorycontroller&action=add"><button type="button"
                                            class="btn btn-default">Add
                                            New</button></a>
                                </div>
                            </h1>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>categoryname</th>
                                        <th>moreinfo</th>
                                        <th>edit</th>
                                        <th>delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categories as $key => $value): ?>
                                    <tr>
                                        <td><?php echo $value['id'];?></td>
                                        <td><?php echo $value['categoryname'];?></td>
                                        <td><?php echo $value['moreinfo'];?></td>
                                        <td><a href="?controller=categorycontroller&action=edit&id=<?php echo $value['id'] ?>"
                                                class="btn btn-primary">Edit</a></td>
                                        <td><a  data-confirm="Are you sure to delete this item?"  href="?controller=categorycontroller&action=delete&id=<?php echo $value['id']?>"
                                                class="btn btn-primary">Delete</a></td>
                                    </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>