<?php

    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM admin WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">Email has already been taken!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO admin(name,password,email) VALUES (:name,:password_hash,:email)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                echo '<p class="success">Registration Success!</p>';
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
        }
    }
?>
<?php 
    include('View/Admin/layouts/login_master.php');
?>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="feather icon-user-plus auth-icon"></i>
                        </div>
                        <h3 class="mb-4">Sign up</h3>
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mb-4">
                            <input type="passssword" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-1" checked="">
                                <label for="checkbox-fill-1" class="cr"> Save Details</label>
                            </div>
                        </div>
                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
                                <label for="checkbox-fill-2" class="cr">Send me the <a href="#!"> Newsletter</a>
                                    weekly.</label>
                            </div>
                        </div>
                        <button type="submit" name="action" value="add" class="btn btn-primary shadow-2 mb-4">Sign
                            up</button>
                        <p class="mb-0 text-muted">Allready have an account? <a
                                href="?controller=admin&action=login"> Log in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

