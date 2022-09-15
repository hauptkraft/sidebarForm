<?php

require_once __DIR__ . '/asset/data.php';
require_once __DIR__ . '/asset/functions.php';

if (!empty($_POST)) {
    debug($_POST);
    $fields = load($fields);
    debug($fields);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="menu__side">
        <div class="page__wrap">
            <div class="page__name">
                <div class="img__wrap">
                    <img class="img" src="asset/img/Interface.png" alt="smile">
                </div>
                <div class="profile">
                    <h4>Михаил Мингалёв</h4>
                    <h5>Покупатель</h5>
                </div>
            </div>
        </div>
        <div class="options__menu">
            <a href="#" class="selected">
                <div class="option">
                    <p>Мой профиль</p>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <p>Statut Club</p>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <p>Заказы</p>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <p>Избранные товары</p>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <p>Отзывы о товарах</p>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <p>Выход</p>
                </div>
            </a>
        </div>
    </div>
    <div class="form__wrap">
        <div class="form__container">
            <p>Мой профиль</p>
            <nav>
                <ul class="form__header">
                    <li><a href="#">Личные данные</a></li>
                    <li><a href="#">Адреса доставки</a></li>
                    <li><a href="#">Пароль</a></li>
                </ul>
            </nav>
        </div>
        <form action="#" class="form-fields" method="post">
            <!-- Ввод email -->
            <div class="form-field__wrap">
                <label class="form-field__label" for="email">E-mail</label>
                <div class="form-field">
                    <input class="form-field-input" type="email" placeholder="" value="mingalyovuxcheck@gmail.com" id="email" name="email">
                    <button class="form-btn__check"><img class="form-btn__image" src="/asset/img/Icon3.svg" alt="image"></button>
                </div>
            </div>
            <!-- Ввод номера телефона -->
            <div class="form-phone__wrap">
                <div class="form-phone__container">
                    <label class="form-field__label" for="phone">Номер телефона</label>
                    <div class="form-phone">
                        <input class="form-phone-input" type="number" placeholder="+7" value="" id="phone" name="phone" pattern="^[ 0-9]+$">
                        <button class="form-btn__check"><img class="form-btn__image" src="/asset/img/Icon3.svg" alt="image"></button>
                    </div>
                </div>
                <div class="form-phone__container">
                    <label class="form-field__label" for="phone2">Дополнительный номер</label>
                    <div class="form-phone">
                        <input class="form-phone-input" type="number" placeholder="" value="" id="phone2" name="phone2">
                    </div>
                </div>
            </div>
            <!-- Выбор фамилии -->
            <div class="form-field__wrap">
                <label class="form-field__label" for="surname">Фамилия</label>
                <div class="form-field">
                    <input class="form-field-input" type="text" placeholder="" value="Мингалёв" id="surname" name="surname">
                    <button class="form-btn__check"><img class="form-btn__image" src="/asset/img/Icon2.png" alt="image"></button>
                </div>
            </div>
            <!-- Выбор имени -->
            <div class="form-field__wrap">
                <label class="form-field__label" for="name">Имя</label>
                <div class="form-field">
                    <input class="form-field-input" type="text" placeholder="" value="Михаил" id="name" name="name">
                    <button class="form-btn__check"><img class="form-btn__image" src="/asset/img/Icon2.png" alt="image"></button>
                </div>
            </div>
            <!-- Выбор отчества -->
            <div class="form-field__wrap">
                <label class="form-field__label" for="patronymic">Отчество</label>
                <div class="form-field">
                    <input class="form-field-input" type="text" placeholder="" value="Михайлович" id="patronymic" name="patronymic">
                    <button class="form-btn__check"><img class="form-btn__image" src="/asset/img/Icon2.png" alt="image"></button>
                </div>
            </div>
            <!-- Выбор даты -->
            <div class="form-data__wrap">
                <label class="form-field__label" for="data">Дата рождения</label>
                <div class="form-data__container">
                    <div class="select-wrapper">
                        <select class="wrap-data data-day" name="day">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="23">23</option>
                        </select>
                    </div>
                    <select class="wrap-data data-month" name="month">
                        <option value="Октября">Октября</option>
                        <option value="Ноября">Ноября</option>
                        <option value="Декабря">Декабря</option>
                        <option value="Января">Января</option>
                        <option value="Сентября">Сентября</option>
                    </select>
                    <select class="wrap-data data-year" name="year">
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1993">1993</option>
                    </select>
                </div>
            </div>
            <!-- Выбор пола -->
            <div class="form-field__wrap">
                <div class="gender__wrap">
                    <label class="form-field__label" for="data">Пол</label>
                    <div class="gender__container">
                        <!-- <button class="gender-btn" name="" type="button"><p>Мужской</p><img class="gender-img" src="/asset/img/Icon2.png" alt="img"></button> -->
                        <!-- <button class="gender-btn" name="" type="button"><p>Женский</p><img class="gender-img" src="/asset/img/Icon2.png" alt="img"></button> -->


                        <input type="radio" id="male" name="gender" value="Мужчина"></input>
                        <label class="gender-btn" for="male" id="male" value="male">
                            <p>Мужской</p><img class="gender-img" src="/asset/img/Icon2.png" alt="img">
                        </label>
                        <input type="radio" id="female" name="gender" value="Женщина"></input>
                        <label class="gender-btn" for="female" id="female" value="female">
                            <p>Женский</p><img class="gender-img" src="/asset/img/Icon2.png" alt="img">
                        </label>
                    </div>
                </div>

                <!-- <input type="radio" id="male" name="sex"> 
                <label for="male" id="male">male</label>
                <input type="radio" id="female"name="sex"></input>
                <label class="gender-btn" for="female" id="female"></label> -->

                <!-- <input type="radio" name="radio" placeholder="ghj"> -->

                <!-- <button class="main-btn" type="submit">Сохранить изменения</button> -->
                <!-- <input type="button" value="Send" class="main-btn"> -->
            </div>
            <button class="main-btn" type="submit">Сохранить изменения</button>
        </form>
    </div>
    <script src="asset/script.js"></script>
</body>
</html>
