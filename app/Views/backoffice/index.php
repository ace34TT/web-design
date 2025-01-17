<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://i.ibb.co/Y0Tm0tq/Pngtree-earth-cartoon-png-material-5472758.png">
    <title>Earth-Login</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/tinidash/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/tinidash/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/tinidash/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/tinidash/css/app-dark.css" id="darkTheme" disabled>
</head>

<body class="light ">
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form method="POST" action="<?= route_to('admin.login.process') ?>" class="col-lg-3 col-md-4 col-10 mx-auto text-center">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="<?= route_to('homepage') ?>">
                    <img height="100px" width="100px" src="https://i.ibb.co/Y0Tm0tq/Pngtree-earth-cartoon-png-material-5472758.png" alt="">
                </a>
                <h1 class="h6 mb-3">Sign in</h1>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="email" value="guest@earth.com" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" required="" autofocus="">
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" value="1234" id="inputPassword" class="form-control form-control-lg" placeholder="Password" required="">
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Stay logged in </label>
                </div>
                <?php
                if (isset($message)) {
                ?>
                    <p style="color: #ff9640;">Please , make sure to enter a correct credentials . If you think this is an error , please , contact a responsible .</p>
                <?php
                }
                ?>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
                <p class="mt-5 mb-3 text-muted">© 2020</p>
            </form>
        </div>
    </div>
    <script src="<?= base_url() ?>/assets/tinidash/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/tinidash/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/tinidash/js/moment.min.js"></script>
    <script src="<?= base_url() ?>/assets/tinidash/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/tinidash/js/simplebar.min.js"></script>
    <script src='<?= base_url() ?>/assets/tinidash/js/daterangepicker.js'></script>
    <script src='<?= base_url() ?>/assets/tinidash/js/jquery.stickOnScroll.js'></script>
    <script src="<?= base_url() ?>/assets/tinidash/js/tinycolor-min.js"></script>
    <script src="<?= base_url() ?>/assets/tinidash/js/config.js"></script>
    <script src="<?= base_url() ?>/assets/tinidash/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>

</html>
</body>

</html>