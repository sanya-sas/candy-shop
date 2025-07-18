<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Shop</title>
    <link rel="stylesheet" href="css/main.css">
</head>


<body class="standard-footer">
    <div class="wrapper">
        <header class="container">
            <span class="logo">Candy Shop</span>
            <nav>
                <ul>
                    <li><a href="index.html">О нас</a></li>
                    <li><a href="tovar.html">Наши товары</a></li>
                    <li><a href="korz.html">Корп. клиентам</a></li>
                    <li class="active"><a href="otzv.php">Обратная связь</a></li>
                    <li class="btn"><a href="vhod.php">Войти</a></li>
                </ul>
            </nav>
        </header>

        <div class="feedback">
            <div class="container">
                <h2>Отзыв о нашей продукции</h2>
                <p>Есть пожелания или замечания? Оставьте отзыв!</p>

                <form name="form1" method="post" action="http://praktika.ru/bd.php">
                    <div class="inline">
                        <div>
                            <label>Имя</label>
                            <input type="text", name="Name">
                        </div>
                        <div>
                            <label>Фамилия</label>
                            <input type="text", name="Surname">
                        </div>
                    </div>
                    <label>Адрес электронной почты</label>
                    <input type="email" class="one-line", name="Email">
                    <label>Сообщение</label>
                    <textarea class="one-line", name="Message"></textarea>
                    <p><input type="submit" name="send" value="Отправить"></p>

                </form>
            </div>
        </div>

        <footer>
            <div class="blocks container">
                <div>
                    <span class="logo">Candy Shop</span>
                    <p>Ягодные букеты, торты, клубника в шоколаде. Неописуемое удовольствие.</p>
                </div>
                <div>
                    <h4>Узнать больше</h4>
                    <ul>
                        <li>История бренда</li>
                        <li>Новости и акции</li>
                        <li>Доставка и оплата</li>
                        <li>Адреса магазинов</li>
                    </ul>
                </div>
                <div>
                    <h4>Связаться с нами</h4>
                    <p>+7 495 660-02-27 офис</p>
                    <p>+7 495 660-54-55 интернет</p>
                    <p>info@candyshop.ru</p>
                    <p>Москва, ул. Дмитрия Ульянова, 8А</p>
                </div>
            </div>
            <hr>
            <p>2015 - 2025 © Candy Shop Клубника в шоколаде.</p>
        </footer>

</body>

</html>