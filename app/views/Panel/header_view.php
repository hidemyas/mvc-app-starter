<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC PANEL</title>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="/public/css/navi.css" media="screen"/>
    <script type="text/javascript" src="/public/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".box .h_title").not(this).next("ul").hide("normal");
            $(".box .h_title").not(this).next("#home").show("normal");
            $(".box").children(".h_title").click(function () {
                $(this).next("ul").slideToggle();
            });
        });
    </script>
</head>
<body>
<div class="wrap">
    <div id="header">
        <div id="top">
            <div class="left">
                <p>Hoşgeldiniz, <strong><?= $data['homepage']['username']; ?></strong> [ <a href="<?php echo SITE_URL;?>/admin/logout">Çıkış Yap</a> ]</p>
            </div>
            <div class="right">
                <div class="align-right">
                    <p>Last login: <strong>23-04-2012 23:12</strong></p>
                </div>
            </div>
        </div>
        <div id="nav">
            <ul>
                <li class="upp"><a href="#">Main control</a>
                    <ul>
                        <li>&#8250; <a href="">Visit site</a></li>
                        <li>&#8250; <a href="">Reports</a></li>
                        <li>&#8250; <a href="">Add new page</a></li>
                        <li>&#8250; <a href="">Site config</a></li>
                    </ul>
                </li>
                <li class="upp"><a href="#">Manage content</a>
                    <ul>
                        <li>&#8250; <a href="">Show all pages</a></li>
                        <li>&#8250; <a href="">Add new page</a></li>
                        <li>&#8250; <a href="">Add new gallery</a></li>
                        <li>&#8250; <a href="">Categories</a></li>
                    </ul>
                </li>
                <li class="upp"><a href="#">Users</a>
                    <ul>
                        <li>&#8250; <a href="">Show all uses</a></li>
                        <li>&#8250; <a href="">Add new user</a></li>
                        <li>&#8250; <a href="">Lock users</a></li>
                    </ul>
                </li>
                <li class="upp"><a href="#">Settings</a>
                    <ul>
                        <li>&#8250; <a href="">Site configuration</a></li>
                        <li>&#8250; <a href="">Contact Form</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>