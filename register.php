<?php include ('Layout/header.php')?>



<body class="light-theme">
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- main content start -->
    <div class="main-content login-panel login-panel-2">
        <h3 class="panel-title">Registration </h3>
        <div class="login-body login-body-2">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <form>
                    <div class="input-group mb-25">
                        <input type="text" class="form-control" placeholder="Username">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    </div>
                    <div class="input-group mb-25">
                        <input type="email" class="form-control" placeholder="Email">
                        <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                    </div>
                    <div class="input-group mb-25">
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    </div>
                    <div class="input-group mb-20">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    </div>
                    <div class="d-flex justify-content-end mb-25">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                            <label class="form-check-label text-white" for="loginCheckbox">
                                I agree <a href="#" class="text-white text-decoration-underline">Terms & Policy</a>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 login-btn">Sign Up</button>
                </form>
                <div class="other-option">
                    <p class="mb-0">Already have an account? <a href="login.php" class="text-white text-decoration-underline">Login</a></p>
                </div>
            </div>
        </div>

        <?php include ('Layout/footer.php')?> 