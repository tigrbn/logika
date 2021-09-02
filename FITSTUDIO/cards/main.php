<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Fit-studio - это эффективные и безопасные тренировки, низкая стоимость посещения, гарантия качества, внимательное отношение и забота о клиентах.");
$APPLICATION->SetPageProperty("keywords", "фитнес, персональные тренировки, групповые тренировки");
$APPLICATION->SetPageProperty("title", "Fit-studio");
$APPLICATION->SetTitle("Fit-studio");
?>
     <!--? slider Area Start-->
<video  id="video"  autoplay="autoplay" loop="loop" preload="auto" width="100%" height="auto">
<source src="<?=SITE_TEMPLATE_PATH?>/assets/video/video.mp4" type="video/mp4" />
</video>
                                    
    <!-- slider Area End-->

    <!-- Traning categories Start -->
    <div class="row" style="margin-top: 50px;">
        <div class="col-xl-12">
            <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <h2 >ПРОГРАММЫ</h2>
            </div>
        </div>
    </div>
    <section class="traning-categories black-bg">
        <div class="container-fluid">
            <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
            <div class="row">   
                <div class="col-xl-6 col-lg-6" >
                    <a class="imghover"> 
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img class="dva" src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/cat1.png" alt="">
                            <img class="raz" src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/cat2.png" alt="">
                           </div>
                    </div>
                     </a>
                </div>
            <div class="col-xl-6 col-lg-6">
                <a class="imghover"> 
                <div class="single-topic text-center mb-30">
                    <div class="topic-img">
                        <img class="dva" src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/cat1.png" alt="">
                        <img class="raz" src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/cat2.png" alt="">
                       </div>
                </div>
                 </a>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Traning categories End-->
        <!--? Team -->
    <section class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s" >
                        <div class="cat-icon" >
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/team1.png" alt="">
                        </div>
                        <div class="cat-cap" class="home-blog-single mb-30 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s">
                            <h5><a href="services.html">Кардио</a></h5>
                            <p>Тренировка, которая решает самые разные задачи: укрепляется сердечнососудистая система, корректируется вес, приобретается эффектный рельеф тела.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/team2.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Функциональный тренинг</a></h5>
                            <p> Вовлекает в работу все мышцы тела, включая глубокие, так называемые постуральные мышцы.
                                Он наиболее близок к повседневной физической активности, предоставляя телу естественную и эффективную нагрузку. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="cat-icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mind & body</a></h5>
                            <p>Дословно в переводе с английского языка "Mind & body" означает "Разум и тело".
                                Такая мягкая и щадящая программа тренировок благотворно воздействует одновременно и на тело, и на душевное состояние, способствует гармонизации сознания, повышению внутренней энергетики. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <div class="cards">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <h2>КЛУБНЫЕ КАРТЫ</h2>
                    </div>
                </div>
            </div>
          </div>
          </div>
<div class="carousel slide" id="carouselControls" style="width:100%; height: 100%;">
<div class="carousel-inner">
<div class="carousel-item active">
<section class="card-list" >
    <article class="card4" style="background-image: url(blue_big.png); background-size: cover;">   
        <h3 style="color: white; margin-left: 38%; font-size: 13px;  text-align: right;" >ВЫХОДНЫЕ ДНИ 12</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 25px;"></h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-22:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 12 месяцев</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 60 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #32679a; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">22 900.-</h3>
        </div>
        </article>

    <article class="card3" style="background-image: url(blue_big.png); background-size: cover;">   
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ВЫХОДНЫЕ ДНИ 6</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 25px;"></h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-22:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 6 месяцев</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 30 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #32679a; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">12 900.-</h3>
        </div>
        </article>

    <article class="card2" style="background-image: url(blue_big.png); background-size: cover;">   
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ВЫХОДНЫЕ ДНИ 3</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 25px;"></h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-22:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 3 месяца</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 14 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #32679a; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">7 450.-</h3>
        </div>
        </article>

    <article class="card1" style="background-image: url(blue_big.png); background-size: cover;">   
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ВЫХОДНЫЕ ДНИ 1</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 25px;"></h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-22:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 1 месяц</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ -</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #32679a; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">2 900.-</h3>
        </div>
        </article>
</section>
<section class="card-list2">
<article class="card3" style="background-image: url(green_big.png);  background-size: cover; ">
    <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >СТУДЕНТ</h3>
    <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 10:00-17:00</h2>
    <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 10:00-17:00</h2>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 1 месяц</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ -</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #74c043; text-align: center; margin-top: 30px; "> 
    <h3 style="margin-top: 7px; color: white;">2 500.-</h3>
    </div>
</article>

<article class="card2" style="background-image: url(green_big.png);  background-size: cover;">
    <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ЛЕГКИЙ СТАРТ</h3>
    <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-23:00</h2>
    <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 07:00-22:00</h2>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 7 дней</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ -</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>

    <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #74c043; text-align: center; margin-top: 30px; "> 
    <h3 style="margin-top: 7px; color: white;">1 900.-</h3>
    </div>
</article>

<article class="card1" style="background-image: url(green_big.png);  background-size: cover;">
    <h3 style="color: white; margin-left: 35%; margin-top: -8px; font-size: 13px;  text-align: right;" >РАЗОВОЕ ПОСЕЩЕНИЕ</h3>
    <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 10px;">Будни: 07:00-23:00</h2>
    <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-22:00</h2>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 1 день</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ -</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>  
    <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #74c043; text-align: center; margin-top: 30px; "> 
    <h3 style="margin-top: 7px; color: white;">750.-</h3>
    </div>
    </article>
</section>
<section class="card-list3"> 
    <article class="card4" style="background-image: url(orange_big.png);  background-size: cover;">   
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ДНЕВНОЙ СТАРТ 12</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 12:00-17:00</h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 12:00-17:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 12 месяцев</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 60 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #fd9100; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">39 900.-</h3>
        </div>
      </article>

<article class="card3" style="background-image: url(orange_big.png);  background-size: cover;">   
    <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ДНЕВНОЙ СТАРТ 6</h3>
    <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 12:00-17:00</h2>
    <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 12:00-17:00</h2>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 6 месяцев</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 30 дней</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #fd9100; text-align: center; margin-top: 30px; "> 
    <h3 style="margin-top: 7px; color: white;">20 900.-</h3>
    </div>
  </article>

<article class="card2" style="background-image: url(orange_big.png);  background-size: cover;">
    <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ДНЕВНОЙ СТАРТ 3</h3>
    <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 12:00-17:00</h2>
    <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 12:00-17:00</h2>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 3 месяца</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 14 дней</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ 
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg>
    </h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ 
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg>
    </h3>
    <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #fd9100; text-align: center; margin-top: 30px; "> 
    <h3 style="margin-top: 7px; color: white;">11 450.-</h3>
    </div>
</article>

<article class="card1" style="background-image: url(orange_big.png);  background-size: cover;">
<h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ДНЕВНОЙ СТАРТ 1</h3>
<h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 12:00-17:00</h2>
<h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 12:00-17:00</h2>
<h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 1 месяц</h3>
<h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ -</h3>
<h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ 
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
</svg></h3>
<h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ 
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
</svg></h3>
<div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #fd9100; text-align: center; margin-top: 30px; "> 
<h3 style="margin-top: 7px; color: white;">4 450.-</h3>
</div>
</article>
</section> 
</div>
<div class="carousel-item">
<section class="card-list"> 
    <article class="card4" style="background-image: url(orange_big.png);  background-size: cover;">   
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ДЕНЬ 12</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-17:00</h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-17:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 12 месяцев</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 60 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #fd9100; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">42 900.-</h3>
        </div>
      </article>

    <article class="card3" style="background-image: url(orange_big.png);  background-size: cover;">   
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ДЕНЬ 6</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-17:00</h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-17:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 6 месяцев</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 30 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #fd9100; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">22 900.-</h3>
        </div>
      </article>

    <article class="card2" style="background-image: url(orange_big.png);  background-size: cover;">   
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ДЕНЬ 3</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-17:00</h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-17:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 3 месяца</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 14 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #fd9100; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">13 450.-</h3>
        </div>
      </article>
    
    <article class="card1" style="background-image: url(orange_big.png);  background-size: cover;">
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >ДЕНЬ 1</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-17:00</h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-17:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 1 месяц</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ -</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #fd9100; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">4 950.-</h3>
        </div>
    </article>
</section> 
<section class="card-list2">
    <article class="card4"  style="background-image: url(green_big.png);  background-size: cover;">   
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >УТРО 12</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-17:00</h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-17:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 12 месяцев</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 60 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #74c043; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">39 900.-</h3>
        </div>
    </article>
    
    <article class="card3" style="background-image: url(green_big.png);  background-size: cover; ">
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >УТРО 6</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-17:00</h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-17:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 6 месяцев</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 30 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #74c043; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">20 900.-</h3>
        </div>
    </article>
    
    <article class="card2" style="background-image: url(green_big.png);  background-size: cover;">
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >УТРО 3</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-17:00</h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-17:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 3 месяца</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 14 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
    
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #74c043; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">11 450.-</h3>
        </div>
    </article>

<article class="card1"  style="background-image: url(green_big.png);  background-size: cover;">   
    <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >УТРО 1</h3>
    <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-17:00</h2>
    <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-17:00</h2>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 1 месяц</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ -</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #74c043; text-align: center; margin-top: 30px; "> 
    <h3 style="margin-top: 7px; color: white;">4 450.-</h3>
    </div>
</article>
</section>
<section class="card-list3" >  
    <article class="card4" style="background-image: url(blue_big.png); background-size: cover;">   
        <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >БЕЗЛИМИТ 12</h3>
        <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-23:00</h2>
        <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-22:00</h2>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 12 месяцев</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 60 дней</h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg></h3>
        <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #32679a; text-align: center; margin-top: 30px; "> 
        <h3 style="margin-top: 7px; color: white;">49 900.-</h3>
        </div>
        </article>
        
    <article class="card3" style="background-image: url(blue_big.png); background-size: cover;">   
    <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >БЕЗЛИМИТ 6</h3>
    <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-23:00</h2>
    <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-22:00</h2>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 6 месяцев</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 30 дней</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #32679a; text-align: center; margin-top: 30px; "> 
    <h3 style="margin-top: 7px; color: white;">27 900.-</h3>
    </div>
    </article>


    <article class="card2"  style="background-image: url(blue_big.png);  background-size: cover;" >
    <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >БЕЗЛИМИТ 3</h3>
    <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-23:00</h2>
    <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-22:00</h2>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 3 месяца</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ 14 дней</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>

    <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #32679a; text-align: center; margin-top: 30px; "> 
    <h3 style="margin-top: 7px; color: white;">15 450.-</h3>
    </div>
    </article>


    <article class="card1"  style="background-image: url(blue_big.png);  background-size: cover;">
    <h3 style="color: white; margin-left: 40%; font-size: 13px;  text-align: right;" >БЕЗЛИМИТ 1</h3>
    <h2 style="color: white; font-size: 13px; text-align: center; margin-top: 15px;">Будни: 07:00-23:00</h2>
    <h2 style="color: white;font-size: 13px; text-align: center;">Выходные: 09:00-22:00</h2>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 15px;">СРОК ДЕЙСТВИЯ 1 месяц</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ЗАМОРОЗКА КАРТЫ -</h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В ТРЕНАЖЕРНЫЙ ЗАЛ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    <h3 style="color: white;font-size: 13px; text-align: right; margin-top: 5px;">ПОЛОТЕНЦЕ В САУНУ И ДУШЕВУЮ <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#75bf42" class="bi bi-check" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
        </svg></h3>
    
    <div style="border: 2px solid white;  height: 40px; width: 100px; background-color: #32679a; text-align: center; margin-top: 30px; "> 
    <h3 style="margin-top: 7px; color: white;">5 950.-</h3>
    </div>
    </article>   
</section>

</div>
</div>

<a class="carousel-control-prev" role="button" href="#carouselControls" data-slide="prev" >
<span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" role="button" href="#carouselControls" data-slide="next">
<span class="carousel-control-next-icon"></span>
</a>
</div>
<div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
<h1 style="color: white; font-size: 25px;">Нужны занятия для сотрудников предприятия?</h1>
<a href="http://fitstudio-ykt.ru/clients.php"><h3 style="color: white; margin-top: 12px;" class="btn">КОРПОРАТИВНЫМ КЛИЕНТАМ</h3></a>
</div>
    <!-- Services End -->
 <div class="row" style="margin-top: 50px;">
    <div class="col-xl-12">
        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <h2 >ТРЕНЕРЫ</h2>
        </div>
    </div>
</div>

        <div class="gallery-area">
            <div class="container-fluid ">
                <div class="row">
                    <div class="swiper trainersSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <div class="trainer">
                                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery1.png" class="img">
                                    </div>
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Алена КОМУС </h1>
                                            <p class="panel_info"> <i>Персональный тренер</i></p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Сертифицированный тренер, Школа
                                                    «StartFit» г.
                                                    Москва, 2016г. Сертифицированный тренер: TRX Force, TRX Sport
                                                    Medicine,
                                                    Академия Life-Fitness, 2014г.</p>
                                                <p class="panel-content__text">Мастер спорта России по пауэрлифтингу,
                                                    Чемпион
                                                    ДВФО по пауэрлифтингу 2014г. Чемпион РС(Я) по пауэрлифтингу
                                                    2014/15г.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery2.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="group.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Анна СЕМЕНОВА </h1>
                                            <p class="panel_info"><i>Инструктор групповых программ</i></p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Лицензированный специалист направления
                                                    Stretching
                                                    VoD 2020 г., Инструктор по стретчингу и развитию гибкости, Фитнес
                                                    академия
                                                    "Движение", 2018 г.
                                                </p>
                                                <p class="panel-content__text">Трехкратный чемпион РС(Я) по
                                                    фитнес-аэробике,
                                                    Чемпион VII спортивных игр народов РС(Я), 2019 г.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery3.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Василий АЛЕКСЕЕВ </h1>
                                            <p class="panel_info"><i>Персональный тренер</i></p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Сертифицированный инструктор.</p>
                                                <p class="panel-content__text"> Специалист по эргогенической диететике,
                                                    Колледж
                                                    фитнеса и бодибилдинг им. Бена Вейдера, г. Москва.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery4.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Алена ЗАРУБИНА </h1>
                                            <p class="panel_info"><i>Персональный тренер</i></p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Дипломированный тренер.</p>
                                                <p class="panel-content__text">ФГБОУВО "Национальный государственный
                                                    Университет
                                                    физической культуры, спорта и здоровья им. П.Ф. Лесгафта",
                                                    г. Санкт-Петербург, 2020 г.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery5.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="group.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Инесса ИНФИНИТИ </h1>
                                            <p class="panel_info"><i>Инструктор групповых программ</i></p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Сертифицированный инструктор.</p>
                                                <p class="panel-content__text">Йога, НОУ "Педагогический колледж
                                                    фитнеса",
                                                    г.Санкт-Петербург, 2017 г. <br>Стретчинг и методика развития
                                                    гибкости,
                                                    Фитнес-академия "Движение", "Основы йогатерапии", Академия воздушной
                                                    йоги.
                                                </p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery6.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <img class="panel_name" src="group.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Ксения ПАК </h1>
                                            <p class="panel_info"><i> Персональный тренер</i> <br> <i
                                                    style="margin-top: -15px; float: left;"> Инструктор групповых
                                                    программ</i>
                                            </p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Сертифицированный инструктор: TAE-BO,
                                                    CYCLE,
                                                    тренер по боксу, ЯГУ им. М.К. Аммосова, г.Якутск, 2008г. </p>
                                                <p class="panel-content__text">Мастер спорта России по пауэрлифтингу,
                                                    Чемпион
                                                    ДВФО по пауэрлифтингу 2014г. Чемпион РС(Я) по пауэрлифтингу
                                                    2014/15г.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery7.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Екатерина КУЧКОВСКАЯ </h1>
                                            <p class="panel_info"><i>Персональный тренер</i></p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Сертифицированный тренер.</p>
                                                <p class="panel-content__text">Колледж бодибилдинга и фитнеса им. Бена
                                                    Вейдера,
                                                    г.Санкт-Петербург, 2019г.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery8.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <img class="panel_name" src="group.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Наталья Емельянова </h1>
                                            <p class="panel_info"><i> Персональный тренер</i> <br> <i
                                                    style="margin-top: -15px; float: left;"> Инструктор групповых
                                                    программ</i>
                                            </p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Сертифицированный персональный тренер и
                                                    инструктор по направлениям: Bodyflex, Super Sculpt, Pilates.</p>
                                                <p class="panel-content__text">НОУ Педагогический фитнес-колледж, г.
                                                    Санкт-Петербург.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery9.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Александ СИВЦЕВ </h1>
                                            <p class="panel_info"><i>Персональный тренер</i></p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Дипломированный инструктор.</p>
                                                <p class="panel-content__text">ФГАОУ ВПО «СВФУ им. М.К. Аммосова»,
                                                    2016г.
                                                    «Спортивная тренировка и подготовка высококвалифицированных
                                                    спортсменов».
                                                </p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery10.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Сергей СОРОКИН </h1>
                                            <p class="panel_info"><i>Персональный тренер</i></p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Сертифицированный персональный тренер.
                                                    Колледж
                                                    бодибилдинга и фитнеса им. Бена Вейдера, г.Москва, 2014г.</p>
                                                <p class="panel-content__text">Вице-Чемпион по пляжному бодибилдингу.
                                                    Гран-при
                                                    Республики Саха (Якутия) по бодибилдингу и фитнес-бикини, 2015г.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery11.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Семен НИКАНОРОВ </h1>
                                            <p class="panel_info"><i>Персональный тренер</i></p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Сертифицированный персональный тренер,
                                                    Колледж
                                                    бодибилдинга и фитнеса им. Б.Вейдера, г. Санкт-Петербург, 2016г.</p>
                                                <p class="panel-content__text">Чемпион РС(Я) по боксу. Призер по
                                                    армейскому
                                                    рукопашному бою ДВФО.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery12.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <img class="panel_name" src="group.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Светлана БЕЛЯЕВА </h1>
                                            <p class="panel_info"><i> Персональный тренер</i> <br> <i
                                                    style="margin-top: -15px; float: left;"> Инструктор групповых
                                                    программ</i>
                                            </p>
                                            <div class="panel-content">
                                                <p class="panel-content__text">Дипломированный инструктор.
                                                    Дальневосточная
                                                    Академия Физической культуры, г.Хабаровск, 2008г. КМС по плаванию
                                                    2006г.</p>
                                                <p class="panel-content__text">Призер Гран-При по бодибилдингу и
                                                    фитнес-бикини
                                                    Республики Саха (Якутия) 2015-2016гг., Чемпион «Кросс-кантри
                                                    триатлон»
                                                    2015/16гг.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box snake mb-30">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/gallery13.png">
                                    <div class="panel">
                                        <div class="panel__info">
                                            <img class="panel_name" src="personal.png"
                                                style="width: 50px; height: 50px; position: relative; float: right;">
                                            <h1 class="panel__name">
                                                Сардаана ОСИПОВА </h1>
                                            <p class="panel_info"><i>Персональный тренер/i></p>
                                            <div class="panel-content">
                                                <p class="panel-content__text"> Мастер спорта России и РС(Я) по
                                                    мас-рестлингу и
                                                    универсальный атлет
                                                    класса "А".</p>
                                                <p class="panel-content__text">Мастер спорта международного класса по
                                                    арм-лифтингу.
                                                    Многократный чемпион и призер Соревнований международного и
                                                    российского
                                                    уровней по мас-рестлингу, армлифтингу, Strongwoman.</p>
                                                <a href="#/"><i class="ti-angle-down"></i>
                                                    <h1 style="margin-left: 30px; margin-top: 25px; color: white;">
                                                        ПОСМОТРЕТЬ
                                                        ТАРИФЫ</h1>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="more">
                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЕ ТРЕНИРОВКИ</h1>
                                            <p class="more__text">Количество тренировок</p>
                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20 </div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>

                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                950 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                900 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                4 750 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                9 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                850 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                800 ₽ </div>

                                            <H1 class="more__text">ПЕРСОНАЛЬНЫЙ ДУЭТ</h1>
                                            <p class="more__text">Количество тренировок</p>

                                            <div class="more__text"
                                                style="background-color: #74c043; float: left; width: 50px; height: 30px; font-size: 20px; text-align: center;">
                                                1</div>
                                            <div class="more__text"
                                                style="background-color: rgb(163, 173, 13);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                5</div>
                                            <div class="more__text"
                                                style="background-color: rgb(209, 112, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                10</div>
                                            <div class="more__text"
                                                style="background-color: rgb(255, 94, 0);  float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                15</div>
                                            <div class="more__text"
                                                style="background-color: rgb(250, 0, 0); float: left; width: 50px; height: 30px; font-size: 20px; text-align: center; margin-left: 10px;">
                                                20</div>
                                            <br>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                1 600 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1400 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1300 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                1200 ₽ </div>
                                            <div class="more__text"
                                                style="background-color: #75c04300; float: left; width: 50px; height: 30px; ">
                                            </div>
                                            <br>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center;">
                                                ПАКЕТ:</div>
                                            <div class="more__text"
                                                style="float: left; width: 50px; height: 30px; font-size: 13px; text-align: center; margin-left: 10px;">
                                                7 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center; margin-left: 5px;">
                                                14 000 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                19 500 ₽</div>
                                            <div class="more__text"
                                                style="float: left; width: 60px; height: 30px; font-size: 13px; text-align: center;">
                                                24 000 ₽ </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/next.svg" alt=""></div>
                        <div class="swiper-button-prev"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/gallery/prev.svg" alt=""></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
 

  <!-- FAQ -->
      <!-- Courses area End -->
      <div class="row">
        <div class="col-xl-12">
            <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h2>FAQ</h2>
            </div>
        </div>
    </div>
    <section class="faq">
        <ul class="acc">
            <li class="acc">
              <div class="section-title">
                <h2  class="acc">АБОНЕМЕНТ</h2>
              </div>
              <div class="section-content">
                  <div class="section-text" style="overflow: auto; height:100%;">
                <h1 style="color: #74c043;">Что входит в абонемент?</h1><br>
                    <p style="color: black;">Посещение всех зон клуба без ограничений: <br>
                        - групповые занятия <br>
                   -  исследование состава тела <br>
   - персональный браслет <br>
- шкаф в раздевалке <br>
- сейфовая ячейка</p>                 
                <h1 style="color: #74c043;">Есть ли ограничения по времени и количеству посещений?</h1> <br>
                <p style="color: black;">Нет, абонемент без ограничений по времени и количеству посещений.   </p>                                      
                <h1 style="color: #74c043;">С какого возраста можно посещать клуб? </h1> <br>
    <p style="color: black;"> Членом клуба можно стать с 14-ти лет.
                </p>                                                               
                <h1 style="color: #74c043;">Сколько стоит абонемент? <h1>
       <p style="color: black;" >         
В клубе действует система помесячной и единовременной оплаты услуг. Подробная информация в разделе «Абонемент».
</p>
                <h1 style="color: #74c043;">Что такое сетевой абонемент? <h1>
           <p style="color: black;"> Сетевой абонемент – вид абонемента, доступ по которому предоставляется во все клубы сети, официально открытые и оказывающие услуги на дату покупки абонемента.
                </p>

                <h1 style="color: #74c043;">Могу ли я посещать несколько клубов? </h1>
                <p style="color: black;">Для посещения 2-х и более клубов сети на постоянной основе, необходимо воспользоваться услугой «Со-доступ» или приобрести "Сетевой абонемент". Единовременный платёж за услугу со-доступа в каждый клуб составляет от 1500₽ до 3500₽, в зависимости от категории клуба. Ежемесячный платеж осуществляется по тарифу более дорогого клуба. После осуществления платежа, «со-доступ» предоставляется на весь срок действия основного контракта. <br>
Член клуба может 1 раз бесплатно посетить любой клуб сети. 
При возобновлении контракта, услуга повторно не предоставляется.</p>
                <h1 style="color: #74c043;">Как оплатить абонемент?</h1>
                <p style="color: black;" >Оплатить абонемент можно онлайн на сайте, через мобильное приложение Spirit. fitness или при посещении клуба. Первый платеж производится в момент заключения Контракта,  последующие платежи производятся ежемесячно, путем списания денежных средств, со счета банковской карты.
                </p>
                <h1 style="color: #74c043;">На какие формы обучения действует студенческий тариф?</h1>
                <p style="color: black;">Студенческий тариф действует на все формы обучения.</p>
                <h1 style="color: #74c043;">Как оформить студенческий тариф?</h1>
                <p style="color: black;">Приобрести абонемент по студенческому тарифу можно через сайт.
Заходите в раздел "Абонементы" - "Студенческий тариф" - "Выбор клуба".
Для получения браслета, предъявите действующий студенческий билет администратору клуба.</p>
                <h1 style="color: #74c043;">Какой срок действия заморозки?</h1>
                <p style="color: black;">Чтобы приостановить действие абонемента, необходимо воспользоваться услугой "заморозка".
Заморозку можно приобрести на 30 или 90 дней. Если во время "заморозки" вы посетите клуб, абонемент возобновляется и "заморозка" больше не действует.  Например, вы оплатили "заморозку" и воспользовались услугой только в течение 10 дней, а затем посетили фитнес-клуб. В этом случае оставшиеся дни "заморозки" сгорают.  Услугой можно воспользоваться повторно неограниченное количество раз. 
                </p>
                <h1 style="color: #74c043;">Когда начнет действовать абонемент?</h1>
                <p style="color: black;">Абонемент активируется с даты оплаты услуг.</p>
                <h1 style="color: #74c043;">Как приостановить «заморозить» срок действия абонемента?</h1>
                <p style="color: black;">Срок действия абонемента  можно приостановить, подключив услугу «заморозка» в мобильном приложении Spirit. Fitness, либо написав на электронную почту вашего клуба, указав ваши контактные данные.  Максимальный срок «заморозки» - 90 дней. Услугой можно воспользоваться неограниченное количество раз. 
                </p>
                <h1 style="color: #74c043;">Как осуществляется доступ в клуб по абонементу?</h1>
                <p style="color: black;">Доступ в клуб осуществляется только с помощью персонального браслета члена клуба.</p>
                <h1 style="color: #74c043;">Когда можно получить браслет?</h1>
                <p style="color: black;">Браслет можно получить в клубе, сразу после оплаты абонемента, при предъявлении паспорта в часы работы консультантов клуба на рецепции с 9 утра до 22 часов ежедневно.
                <h1 style="color: #74c043;">Можно ли попасть в клуб без браслета?</h1>
                <p style="color: black;">Посещение клуба без браслета невозможно.</p>
                <h1 style="color: #74c043;">Можно ли переоформить абонемент?</h1>
                <p style="color: black;">Переоформление абонемента невозможно.</p>
            </div>
        </div>
            </li>
            <li class="acc">
              <div class="section-title">
                <h2  class="acc">ОПЛАТА</h2>
              </div>
              <div class="section-content">
                <div  style="overflow: auto; height:100%;">
                    <h1 style="color: #74c043;">Публичная Оферта и Правила посещения клуба</h1>
                    <p style="color: black;">Перед покупкой абонемента внимательно прочитайте текст <a style="color:#74c043"target="_blank" href="https://spiritfit.ru/upload/form/oferta.pdf">Оферты</a> и ознакомьтесь с <a  style="color: #74c043;" target="_blank" href="https://spiritfit.ru/upload/form/rules.pdf">Правилами</a> посещения клуба.
                    </p>
                    <h1 style="color: #74c043;">Как осуществляются платежи?</h1>
                    <p style="color: black;">Оплата осуществляются через процессинговый центр CloudPayments. CloudPayments – многопрофильный процессинговый центр для обработки  платежей по банковским картам международных платежных систем Visa и MasterCard, а также по картам национальной платежной системы МИР.
                    </p>
                    <h1 style="color: #74c043;">Безопасны платежи онлайн банковской картой?</h1>
                    <p style="color: black;">Процессинговый центр CloudPayments защищает и обрабатывает данные Вашей банковской карты по стандарту безопасности PCI DSS 3.0. Передача информации в платежный шлюз происходит с применением технологии шифрования SSL. Дальнейшая передача информации происходит по закрытым банковским сетям, имеющим наивысший уровень надежности. CloudPayments не передает данные Вашей карты нам и иным третьим лицам. Для дополнительной аутентификации держателя карты используется протокол 3D Secure.
                    </p>
                    <h1 style="color: #74c043;">Как происходит оплата?</h1>
                    <p style="color: black;">Оплата стоимости услуг производится ежемесячно на условиях предоплаты.
Оплата первого месяца производится в момент  заключения Контракта. Оплата второго и последующих месяцев производится путем ежемесячного списания денежных средств со счета банковской карты.
                    </p>
                    <h1 style="color: #74c043;">Можно ли выбрать дату оплаты?</h1>
                    <p style="color: black;">Датой ежемесячного платежа является дата покупки абонемента. Автоматическое списание будет осуществляться ежемесячно в один и тот же день, в зависимости от даты активации абонемента.
                    </p style="color: black;">
                    <h1 style="color: #74c043;">Можно ли перенести дату платежа?</h1>
                    <p style="color: black;">Дата платежа по контракту не меняется, за исключением использования услуги «Заморозка».
                    </p>
                    <h1 style="color: #74c043;">Что будет, если платеж за следующий месяц не будет осуществлен?</h1>
                    <p style="color: black;">В данном случае доступ в клуб будет приостановлен. Если оплата не поступает в течение 3 дней, то персональная скидка уменьшается до 40% за текущий месяц. Если оплата не поступает в течение 10 дней, то контракт будет автоматически расторгнут. При расторжении контракта скидка аннулируется, при возобновлении 1-й месяц оплачивается по базовой стоимости.
                    </p>
                    <h1 style="color: #74c043;">Можно ли оплатить сразу за год?</h1>
                    <p style="color: black;">Есть возможность оформить абонемент по предоплате на 12 месяцев. Стоимость месяца при единовременной оплате выгоднее. Подробная информация в разделе «Абонемент».
                    </p>
                    <h1 style="color: #74c043;">Можно ли оплатить год  в рассрочку?</h1>
                    <p style="color: black;">Можно оплачивать услуги клуба помесячно или, при единовременной оплате за год, воспользоваться скидкой.</p>
                    <h1 style="color: #74c043;">Как расторгнуть контракт?</h1>
                    <p style="color: black;">Для расторжения контракта, необходимо обратиться с письменным заявлением к сотрудникам клуба.</p>
                </div>   
            </div>
            </li>
            <li class="acc">
              <div class="section-title">
                <h2  class="acc">ТРЕНИРОВКИ</h2>
              </div>
              <div class="section-content">
            <div class="section-text"  style="overflow: auto; height:100%;">
                <h1 style="color: #74c043;">Какие зоны клуба доступны для посещения?</h1>
                <p style="color: black;">Кардио-зона, тренажерный зал, зона функционального тренинга, боевых искусств доступны для самостоятельных и персональных тренировок, зал групповых программ в соответствии с расписанием.
                </p>
                    <h1 style="color: #74c043;">Есть ли вводный инструктаж с тренером?</h1>
<p style="color: black;">Все члены клуба могут пройти часовой вводный инструктаж. Услуга предоставляется бесплатно, по предварительной записи и включает: 
- исследование состава тела InBody и расшифровка результатов
- фитнес-тест силовой нагрузки
- фитнес-тест функциональной нагрузки
- инструктаж по работе кардио-тренажера
- демонстрация настройки тренажеров
- рекомендации по выбору оборудования
- рекомендация режима тренировок и первой программы тренировок.
Услугой можно воспользоваться один раз.</p>
                <h1 style="color: #74c043;">Что такое тестирование состава тела?</h1>
               <p style="color: black;">Тестирование состава тела с помощью INBODY-570 – бесплатная услуга для всех членов клуба, позволяющая определить следующие показатели:
- жировая масса;
- безжировая (костно-мышечная) масса;
- активная клеточная масса;
- процент содержания жира в организме;
- индекс массы тела;
- количество внутриклеточной, внеклеточной, общей жидкости;
- уровень основного обмена веществ.
Услугой можно воспользоваться не ограниченное количество раз.
               </p>
            <h1 style="color: #74c043;">Сколько стоит персональная тренировка с тренером?</h1>
            <p style="color: black;">Стоимость тренировок от 2000 рублей, это зависит от категории тренера и количества тренировок в блоке. </p>
                                       <h1 style="color: #74c043;">Что такое «Стартовый блок» тренировок? </h1>
                                        <p style="color: black;">Стартовый блок из 5 тренировок на специальных условиях – от 6 000 рублей.
Услугой можно воспользоваться один раз.
                                        </p>
                                      <h1 style="color: #74c043;">Что такое групповые тренировки?</h1>
                                        <p style="color: black;">Силовые, аэробные, высокоинтенсивные интервальные тренировки, танцевальные классы и йога проводятся в удобное время, с учетом разных потребностей членов клубов. Более 160 уроков в месяц в удобном, сбалансированном расписании. Все групповые тренировки включены в стоимость абонемента.</div>
                                        </p>
                    </div>
                </div>
            </li>
            </ul>
            </section>
  <!-- FAQ -->
     

  <div class="row" style="margin-top: 50px;">
    <div class="col-xl-12">
        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <h2 >КОНТАКТЫ</h2>
        </div>
    </div>
</div>
    <section class="services-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="features-icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icon/icon1.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Адрес</h3>
                            <p>Якутск, ТЦ "Апельсин"
                                ул.Дзержинского, 32 </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="features-icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icon/icon2.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Телефон</h3>
                            <p><strong>Администратор</strong> <br> +7 914 273 99 99</p>
                            <p><strong>Отдел продаж</strong> <br> +7 (4112) 250 999</p>
                            <p> +7 924 765 09 99</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="single-services mb-40 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">
                        <div class="features-icon">
                            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/icon/icon3.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <h3>Почта</h3>
                            <p>fitstudio_ykt@mail.ru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map">
    <iframe id="map_735301346" frameborder="0" width="100%" height="400px" sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"></iframe><script type="text/javascript">(function (e,t){var r=document.getElementById(e);r.contentWindow.document.open(),r.contentWindow.document.write(atob(t)),r.contentWindow.document.close()})("map_735301346", "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uIChlLHQpe3ZhciByPUpTT04ucGFyc2UoZSksbj1KU09OLnBhcnNlKHQpO2Z1bmN0aW9uIGEoZSl7cmV0dXJuIGRlY29kZVVSSUNvbXBvbmVudChhdG9iKGUpLnNwbGl0KCIiKS5tYXAoZnVuY3Rpb24oZSl7cmV0dXJuIiUiKygiMDAiK2UuY2hhckNvZGVBdCgwKS50b1N0cmluZygxNikpLnNsaWNlKC0yKX0pLmpvaW4oIiIpKX1ERy50aGVuKGZ1bmN0aW9uKCl7dmFyIGU9REcubWFwKCJtYXAiLHtjZW50ZXI6W24ubGF0LG4ubG9uXSx6b29tOm4uem9vbX0pO0RHLmdlb0pTT04ocix7c3R5bGU6ZnVuY3Rpb24oZSl7dmFyIHQscixuLGEsbztyZXR1cm57ZmlsbENvbG9yOm51bGw9PT0odD1lKXx8dm9pZCAwPT09dD92b2lkIDA6dC5wcm9wZXJ0aWVzLmZpbGxDb2xvcixmaWxsT3BhY2l0eTpudWxsPT09KHI9ZSl8fHZvaWQgMD09PXI/dm9pZCAwOnIucHJvcGVydGllcy5maWxsT3BhY2l0eSxjb2xvcjpudWxsPT09KG49ZSl8fHZvaWQgMD09PW4/dm9pZCAwOm4ucHJvcGVydGllcy5zdHJva2VDb2xvcix3ZWlnaHQ6bnVsbD09PShhPWUpfHx2b2lkIDA9PT1hP3ZvaWQgMDphLnByb3BlcnRpZXMuc3Ryb2tlV2lkdGgsb3BhY2l0eTpudWxsPT09KG89ZSl8fHZvaWQgMD09PW8/dm9pZCAwOm8ucHJvcGVydGllcy5zdHJva2VPcGFjaXR5fX0scG9pbnRUb0xheWVyOmZ1bmN0aW9uKGUsdCl7cmV0dXJuInJhZGl1cyJpbiBlLnByb3BlcnRpZXM/REcuY2lyY2xlKHQsZS5wcm9wZXJ0aWVzLnJhZGl1cyk6REcubWFya2VyKHQse2ljb246ZnVuY3Rpb24oZSl7cmV0dXJuIERHLmRpdkljb24oe2h0bWw6IjxkaXYgY2xhc3M9J2J1bGxldC1tYXJrZXInIHN0eWxlPSdib3JkZXItY29sb3I6ICIrZSsiOyc+PC9kaXY+IixjbGFzc05hbWU6Im92ZXJyaWRlLWRlZmF1bHQiLGljb25TaXplOlsyMCwyMF0saWNvbkFuY2hvcjpbMTAsMTBdfSl9KGUucHJvcGVydGllcy5jb2xvcil9KX0sb25FYWNoRmVhdHVyZTpmdW5jdGlvbihlLHQpe2UucHJvcGVydGllcy5kZXNjcmlwdGlvbiYmdC5iaW5kUG9wdXAoYShlLnByb3BlcnRpZXMuZGVzY3JpcHRpb24pLHtjbG9zZUJ1dHRvbjohMCxjbG9zZU9uRXNjYXBlS2V5OiEwfSksZS5wcm9wZXJ0aWVzLnRpdGxlJiZ0LmJpbmRUb29sdGlwKGEoZS5wcm9wZXJ0aWVzLnRpdGxlKSx7cGVybWFuZW50OiEwLG9wYWNpdHk6MSxjbGFzc05hbWU6InBlcm1hbmVudC10b29sdGlwIn0pfX0pLmFkZFRvKGUpfSl9KSgnW3sidHlwZSI6IkZlYXR1cmUiLCJwcm9wZXJ0aWVzIjp7ImNvbG9yIjoiIzc1YmY0MiIsInRpdGxlIjoiUm1sMExWTjBkV1JwYnc9PSIsImRlc2NyaXB0aW9uIjoiUEhBKzBMTXUwSy9RdXRHRDBZTFJnZEM2TENEUW90Q21JQ0xRa05DLzBMWFF1OUdNMFlIUXVOQzlJaXdnMFlQUXV5NGcwSlRRdDlDMTBZRFF0dEM0MEwzUmdkQzYwTDdRczlDK0xDQXpNZ295TlRBdE9UazVDdENSMFlQUXROQzkwTGc2SU5HQklEQTNPakF3TFRJek9qQXdDdENTMFl2UmhkQyswTFRRdmRHTDBMVTZJTkdCSURBNU9qQXdJQzBnTWpJNk1EQThMM0ErIiwiekluZGV4IjoxMDAwMDAwMDAwfSwiZ2VvbWV0cnkiOnsidHlwZSI6IlBvaW50IiwiY29vcmRpbmF0ZXMiOlsxMjkuNzQxMDQzLDYyLjA0NTg5OF19LCJpZCI6ODcyfV0nLCd7ImxhdCI6NjIuMDQ1Njc4NTU3OTYzMjUsImxvbiI6MTI5Ljc0MDkzOTE0MDMxOTg1LCJ6b29tIjoxN30nKTwvc2NyaXB0PjxzY3JpcHQgYXN5bmM9IiIgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Imh0dHBzOi8vd3d3Lmdvb2dsZXRhZ21hbmFnZXIuY29tL2d0YWcvanM/aWQ9VUEtMTU4ODY2MTY4LTEiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4oZnVuY3Rpb24gKGUpe2Z1bmN0aW9uIHQoKXtkYXRhTGF5ZXIucHVzaChhcmd1bWVudHMpfXdpbmRvdy5kYXRhTGF5ZXI9d2luZG93LmRhdGFMYXllcnx8W10sdCgianMiLG5ldyBEYXRlKSx0KCJjb25maWciLGUpLHdpbmRvdy5ndGFnPXR9KSgnVUEtMTU4ODY2MTY4LTEnKTwvc2NyaXB0PjwvYm9keT4=")</script>
    </div>

             
        <!-- Contact Area End -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>