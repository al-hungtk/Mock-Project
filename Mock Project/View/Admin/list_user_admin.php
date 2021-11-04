<?php
    include ('View/Admin/layouts/master.php');
?>

<?php 
    // PHẦN XỬ LÝ PHP
    // BƯỚC 1: KẾT NỐI CSDL
    $conn = mysqli_connect('localhost', 'root', '', 'mvc');

    // BƯỚC 2: TÌM TỔNG SỐ RECORDS
    $result = mysqli_query($conn, 'select count(id) as total from admin');
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['total'];

    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 10;

    // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
    // tổng số trang
    $total_page = ceil($total_records / $limit);

    // Giới hạn current_page trong khoảng 1 đến total_page
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }

    // Tìm Start
    $start = ($current_page - 1) * $limit;

    // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
    // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
    $result = mysqli_query($conn, "SELECT * FROM admin LIMIT $start, $limit");

    
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
                            <table class="table table-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Picture</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($admin as $key => $value):?>
                                    <tr>
                                        <td><?php echo $key+1; ?></td>
                                        <td><?php echo $value['name']; ?></td>
                                        <td><?php echo $value['email']; ?></td>
                                        <td><?php echo $value['password']; ?></td>
                                        <td><img src="public/images/admin/<?php echo $value['picture'];?>" width="100"
                                                height="50" alt=""></td>

                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                                <?php 
                                        // PHẦN HIỂN THỊ TIN TỨC
                                        // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
                                        while ($row = mysqli_fetch_assoc($result)){
                                            echo '<li>' . $row['id'] . '</li>';
                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pagination">
    <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="?controller=admincontroller&action=?page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
            }
           ?>
</div>