<form method="POST">
    <div class="login">
        <div class="auth-wrapper">
            <div class="auth-content">
                <div class="auth-bg">
                    <span class="r"></span>
                    <span class="r s"></span>
                    <span class="r s"></span>
                    <span class="r"></span>
                </div>
                <div class="card">
                    <form action="" method="POST">
                        <div class="card-body text-center">
                            <div class="mb-4">
                                <i class="feather icon-unlock auth-icon"></i>
                            </div>
                            <h3 class="mb-4">Login</h3>
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control " placeholder="Email ">
                            </div>
                            <div class="input-group mb-4 ">
                                <input type="password" name="password" class="form-control " placeholder="password ">
                            </div>
                            <div class="form-group text-left ">
                                <div class="checkbox checkbox-fill d-inline">
                                    <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                                    <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                                </div>
                            </div>
                            <button type="submit" name="action" value="submit"
                                class="btn btn-primary shadow-2 mb-4 ">Login</button>
                            <p class="mb-2 text-muted ">Forgot password? <a href="auth-reset-password.html ">Reset</a>
                            </p>
                            <p class="mb-0 text-muted ">Don’t have an account? <a
                                    href="?controller=admincontroller&action=register">Signup</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</form>
<?php 
    include('View/Admin/layouts/login_master.php');
    
?>