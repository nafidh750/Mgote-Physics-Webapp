<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary brand-name"><i class="fa fa-book me-3"></i>MGOTE PHYSICS</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <a href="about.php" class="nav-item nav-link">About</a>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
            <?php
            if (empty($_SESSION["user_id"])) {
            ?>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="form5.php" class="dropdown-item">FORM 5</a>
                    <a href="form6.php" class="dropdown-item">FORM 6</a>
                    <a href="videos.php" class="dropdown-item">VIDEOS</a>
                </div>
            </div>
            <?php } ?>
            <!-- only logged in and user paid package can see it -->
            <?php
            if (!empty($_SESSION["user_id"])) : ?>
            <a href="members.php" class="nav-item nav-link">Premium</a>
            <a href="profile.php" class="nav-item nav-link">My Account</a>
            <?php endif ?>
            <span class="nav-link nav-item theme">
                <i class="fas fa-toggle-off" title="Switch to dark mode" id="themeToggler"></i>
            </span>
            <!-- switching btn logout and join now -->
            <?php
            if (empty($_SESSION["user_id"])) : ?>

            <?php endif ?>
            <?php if (empty($_SESSION["user_id"])) {
            ?>
            <a href="register.php" class="btn btn-primary py-4 px-lg-5 d-lg-block join-btn">Join Now<i
                    class="fa fa-arrow-right ms-3"></i></a>
            <?php } else {
            ?>
            <a href="register.php?logout='1'" class="btn btn-primary py-4 px-lg-5 d-lg-block join-btn">Logout<i
                    class="fa fa-arrow-right ms-3"></i></a>
            <?php } ?>
        </div>
    </div>
</nav>
<!-- Navbar End -->