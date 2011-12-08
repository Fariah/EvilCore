<html>
    <head>
        <title>Evil Story - <?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery1.4.2.min.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var login = $('#login');
                var register = $('#register');
                var modal_login = $('#modal-login');
                var modal_register = $('#modal-register');

                login.click(function () {
                    modal_register.modal('hide');
                });
                register.click(function () {
                    modal_login.modal('hide');
                });
            });
        </script>
    </head>
    <body>
        <div class="topbar">
            <div class="topbar-inner">
                <div class="container-fluid">
                    <a href="<?php echo base_url("home"); ?>" class="brand">An Evil mind in yours head</a>
                    <ul class="nav">
                        <li<?php if($title == "home") echo " class='active'"; ?>><a href="<?php echo base_url("home"); ?>">Home</a></li>
                        <li<?php if($title == "news") echo " class='active'"; ?>><a href="<?php echo base_url("news"); ?>">News</a></li>
                        <li<?php if($title == "about") echo " class='active'"; ?>><a href="<?php echo base_url("about"); ?>">About</a></li>
                        <li<?php if($title == "contact") echo " class='active'"; ?>><a href="<?php echo base_url("contact"); ?>">Contact</a></li>
                    </ul>
                    <?php if(!$logged_in): ?>
                        <p class="pull-right" data-controls-modal="modal-login"><a id="login" href="#">Login</a> <a id="register" href="#" data-controls-modal="modal-register">Register</a></p>
                    <?php else: ?>
                        <p class="pull-right">Greeting Evil <a id="" href="#"><?php echo $evil_name; ?></a> maybe <a id="" href="<?php echo base_url("logout"); ?>">Logout</a></p>
                    <?php endif; ?>    
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="sidebar">
                <div class="well">
                    <h4>Evil Арихв</h4>
                    <ul>
                        <li><a href="#">Декабрь</a></li>
                        <li><a href="#">Ноябрь</a></li>
                        <li><a href="#">Октябрь</a></li>
                        <li><a href="#">Сентябрь</a></li>
                    </ul>
                    <h5>Контакты</h5>
                    <ul class="unstyled">
                        <li>Email: darkclarus@gmail.com</li>
                        <li>Skype: darkclarus</li>
                        <li>Planet: Earth</li>
                    </ul>
                </div>
            </div>
            <div class="content">
