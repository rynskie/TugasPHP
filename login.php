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
    <div class="main-content login-panel login-panel-3">
        <div class="container">
            <div class="d-flex justify-content-end">
                <div class="login-body">
                    <div class="top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <img src="assets/images/logo-black.png" alt="Logo">
                        </div>
                        <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>
                    </div>
                    <div class="bottom">
                        <h3 class="panel-title">Login</h3>
                        <form>
                            <div class="input-group mb-25">
                                <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username or email address">
                            </div>
                            <div class="input-group mb-20">
                                <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                                <input type="password" class="form-control rounded-end" placeholder="Password">
                                <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                            </div>
                            <div class="d-flex justify-content-between mb-25">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheckbox">
                                    <label class="form-check-label text-white" for="loginCheckbox">
                                        Remember me
                                    </label>
                                </div>
                                <a href="reset-password.html" class="text-white fs-14">Forgot Password?</a>
                            </div>
                            <button class="btn btn-primary w-100 login-btn">Sign in</button>
                        </form>
                        <div class="other-option">
                            <p>Or continue with</p>
                            <div class="social-box d-flex justify-content-center gap-20">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-google"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include ('Layout/footer.php')?> 