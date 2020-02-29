<?php include "./header.php" ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Login</h3>
            <hr><br>
            <form action="./login.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

<?php  include './footer.php';  ?>