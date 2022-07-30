    <?php require_once "config/db.php";?>
    <?php include("checkLogin.php") ?>
    <?php include("styles.php") ?>
    <?php include("script.php") ?>
    

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/TD/index.html"><img src="/TD/images/logo_getpass.svg" alt="alternative"></a> 
            
            <a class="navbar-brand logo-text page-scroll" href="/TD/index.html">GetPass</a>

            
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
                        <a class="nav-link page-scroll" href="about.php">About<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm page-scroll" href="/TD/signin.php">เข้าสู่ระบบ</a>
                </span>
                <span class="nav-item">
                    <a class="btn-outline-sm page-scroll" href="/TD/signup.php">สมัครสมาชิก</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->