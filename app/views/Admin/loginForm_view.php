<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC APP ADMİN</title>
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
    <div id="content">
        <div id="main">
            <div class="full_w">
                <form action="<?php echo SITE_URL;?>/admin/runLogin" method="POST">
                    <label for="login">Username:</label>
                    <input id="login" name="username" class="text" />
                    <label for="pass">Password:</label>
                    <input id="pass" name="password" type="password" class="text" />
                    <div class="sep"></div>
                    <button type="submit" class="ok">Login</button> <a class="button" href="">Forgotten password?</a>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>