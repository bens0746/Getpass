    <?php require_once "config/db.php";?>
    <?php include("checkLogin.php") ?>
    <?php include("styles.php") ?>
    <?php include("script.php") ?>


<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/TD/home.php"><img src="/TD/images/logo_getpass.svg" alt="alternative"></a> 
            
            <a class="navbar-brand logo-text page-scroll" href="/TD/home.php">GetPass</a>

            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/TD/post.php">ดูโพสต์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/TD/post_form.php">ระบบโพสต์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/TD/about.php">About<span class="sr-only">(current)</span></a>
                    </li>
                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">คุณ <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/TD/profile.php"><span class="item-text">โปรไฟล์</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/TD/post_own.php"><span class="item-text">โพสต์ของฉัน</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/TD/about.php"><span class="item-text">แชท</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/TD/logout.php"><span class="item-text">ออกจากระบบ</span></a>
                        </div>
                    </li>
                    <!-- ดึงรูปภาพจาก CheckLogin.php -->
                    <img src="/TD/pdo-crud-bootstrap5-main/uploads/<?php echo $row['img']; ?>" class="rounded-circle z-depth-2" width="25" height="25" alt="User" />
                    <!-- end of dropdown menu -->
                </ul>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->