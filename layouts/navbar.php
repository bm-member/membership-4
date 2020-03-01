<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <a class="navbar-brand" href="#">Membership</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <?php if(isset($_SESSION['auth']) && $_SESSION['auth'] ): ?>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php">logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="./login_form.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./register_form.php">Register</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>