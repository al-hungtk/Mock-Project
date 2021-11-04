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
                            <div class="col-md-2">
                                <a name="" id="" class="btn btn-primary" href="?controller=postcontroller&action=create"
                                    role="button">ADD</a>
                            </div>

                            <table class="table table-light table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>STT</th>
                                        <th>Name</th>
                                        <th>title</th>
                                        <th>Author</th>
                                        <th>Category_id</th>
                                        <th>Maxdate</th>
                                        <th>Information</th>
                                        <th>Summary</th>
                                        <th>Picture</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($post as $key => $value):?>
                                    <tr>
                                        <td><?php echo $key+1?></td>
                                        <td><?php echo $value['name'];?></td>
                                        <td><?php echo $value['title'];?></td>
                                        <td><?php echo $value['author'];?></td>
                                        <td><a href="?controller=categorycontroller&action=list_category&id=<?php echo $value['name'] ?>"
                                                class="btn btn-warning "><?php echo $value['category_id'];?></a></td>
                                        <td><?php echo $value['maxdate'];?></td>
                                        <td><textarea name="" id="" cols="70" rows="10"
                                                readonly><?php echo $value['information'];?></textarea>
                                        </td>
                                        <td><textarea name="" id="" cols="70" rows="10"
                                                readonly><?php echo $value['summary'];?></textarea>
                                        </td>
                                        <td><img src="public/images/post/<?php echo $value['picture'];?>" width="100"
                                                alt=""></td>
                                        <td>
                                            <a href="?controller=postcontroller&action=edit&id=<?php echo $value['id'] ?>"
                                                class="btn btn-warning">Edit</a>

                                            <a href="?controller=postcontroller&action=delete&id=<?php echo $value['id'] ?>"
                                                class="btn btn-warning">DEL</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>