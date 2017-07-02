<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="/static/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/public/static/css/bootstrap.css">
    <link  rel="stylesheet" href="/public/static/css/style.css">
    <title><? echo $app_title; ?></title>
</head>
<body>
    <nav class="navbar navbar-fixed-top">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/public/">
                        PHP.SHOP
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav ">
                        <li>
                            <a href="/public/">Главная</a>
                        </li>
                        <li>
                            <a href="/public/cart">Корзина</a>
                        </li>
                        <li>
                            <a href="/public/contacts">Контакты</a>
                        </li>
                        <li>
                            <a id="login_btn">Личный кабинет</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </nav>

</body>
</html>