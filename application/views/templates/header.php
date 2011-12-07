<html>
    <head>
        <title>Evil Story - <?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <div class="topbar">
            <div class="topbar-inner">
                <div class="container-fluid">
                    <a href="<?php echo base_url("home"); ?>" class="brand">An Evil mind in yours head</a>
                    <ul class="nav">
                        <li<?php if($title == "home") echo " class='active'"; ?>><a href="<?php echo base_url("home"); ?>">Home</a></li>
                        <li<?php if($title == "about") echo " class='active'"; ?>><a href="<?php echo base_url("about"); ?>">About</a></li>
                        <li<?php if($title == "contact") echo " class='active'"; ?>><a href="<?php echo base_url("contact"); ?>">Contact</a></li>
                    </ul>
                    <p class="pull-right">Logged in as <a href="#">evil username</a></p>
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
