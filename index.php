<?php
session_start();
$period_cookie = 2592000; // 30 днів (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>
<!DOCTYPE html>
<html lang="en-ua">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bandero</title>
    <link rel="icon" href="/img/gus1.svg" type="img.svg" />

    <link rel="preload" href="./img/gus-anim.gif" as="image" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <section class="main-page">
      <div class="wraper">
        <div class="main-page-left-side">
          <img class="img-logo-container" src="./img/goit-logo.svg" alt="" />

          <div class="main-page-container">
            <h2 class="main-page-ds">Доброго вечора, ми з України</h2>
            <h1 class="main-page-ds2">Бандерогусь</h1>
            <p class="main-page-text">
              Спеціальний бойовий гусак із біолабораторій України. Пишаюся
              своїми подвигами, бороню Батьківщину та підтримую позитивний дух
              народу. Слава Україні!
            </p>

            <button class="main-but" id="go-to-form-btn">Запустити гуся</button>
          </div>
        </div>
        <img src="./img/gus-main-page.svg" alt="" />
      </div>
    </section>

    <section class="gus-facts">
      <img src="./img/tryzub.svg" alt="" class="tryzub" />
      <h2 class="gus-facts-item">Цікаві факти про бандерогусей</h2>
      <p class="gus-facts-text">
        Зазвичай бандерогуси — виключно мирні птахи. Але у разі небезпеки можуть
        атакувати ворога системою надпотужного озброєння. Також нищать
        психологічно, активуючи високочастотне шипіння та розмахування крилами
      </p>

      <div class="wraper">
        <div class="gus-item">
          <img src="./img/gus1.svg" alt="" />
          <h3 class="gus-item-title">Система навігації</h3>
          <p class="gus-item-text">
            Супутниковий GPS та ехолокатори розпізнають ворожу техніку навіть на
            етапі збірки
          </p>
        </div>

        <div class="gus-item">
          <img src="./img/gus2.svg" alt="" />
          <h3 class="gus-item-title">Очі-тепловізори</h3>
          <p class="gus-item-text">
            Допомагають виявити характер сигнатури об’єктів та значно підвищують
            точність удару
          </p>
        </div>

        <div class="gus-item">
          <img src="./img/gus3.svg" alt="" />
          <h3 class="gus-item-title">Байракрила</h3>
          <p class="gus-item-text">
            Можуть нести 2-4 керовані ракети, що вражають ціль на відстані
            «ніхріна собі» кілометрів
          </p>
        </div>
      </div>
    </section>

    <section class="form-section">
      <form action="zakaz.php" class="form-container" id="form" method="POST">
        <img src="./img/tryzub.svg" alt="tryzub" />
        <h3 class="form-title">Поділися, будь ласка, поштою</h3>
        <p class="form-text">та запиши гуся до бандерозагону</p>

        <div class="form-field">
          <label for="user-name" class="form-field-lable">Ім'я</label>
          <input
            type="text"
            class="form-field-imput"
            name="name"
            id="user-name"
          />
        </div>

        <div class="form-field form-field-email">
          <label for="user-email" class="form-field-lable">Телефон</label>
          <input
            type="phone"
            class="form-field-imput"
            name="phone"
            id="user-email"
          />
        </div>
        <button class="form-but" id="launch-btn">Запустити гуся</button>
      </form>
    </section>
    <script src="/form.js"></script>
  </body>
</html>
