<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт - Издания</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/news.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/projects.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/video.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/wowanimate.css">
    <?php include_once  SITEROOTDIR.'views/main/head_font.php'; ?>
    <?php include_once  SITEROOTDIR.'views/main/head_add_libs.php'; ?>
</head>

<body>

<div class="page-wrapper">

    <?php include_once  SITEROOTDIR.'views/main/header.php'; ?>

    <?php include_once  SITEROOTDIR.'views/main/nav.php'; ?>

    <div class="content-wrapper clearfix">

        <section class="notice-hidden">
            <p>Позиция для срочных объявлений [скрытая]</p>
        </section>

        <section class="breadcrumbs">
            <div class="breadcrumbs-text"></div>
        </section>

        <main role="main" class="content">

            <div class="play-wrapper">
			
                <div class="play">

					<h2>Поиграем?</h2>

					
					<div class="play-games">

                        <div class="play-info">
                            <p>*Чтобы развернуть игру на весь экран -> нажмите кнопку <img src="<?php echo SITEURL;?>images/pages/projects/play/play-full-screen	.jpg"> в правом верхнем углу.</p>
                        </div>

                        <div class="play-nymosaic-frame">
                            <h3>«Вперед, к звездам!»: электронная викторина</h3>
                            <iframe src="https://learningapps.org/watch?v=pbud0gu2j21" style="border:0px;width:100%;height:800px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                        </div>

                        <div class="play-nymosaic-frame">
                            <h3>«Дорога в космос»: электронная викторина</h3>
                            <iframe src="https://learningapps.org/watch?app=19144815" style="border:0px;width:100%;height:800px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                        </div>

                        <div class="play-nymosaic-frame">
                            <h3>«Удивительный мир космоса»: Кроссворд – онлайн</h3>
                            <iframe src="https://learningapps.org/watch?v=pwindc5ok21" style="border:0px;width:100%;height:800px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                        </div>

                        <div class="play-nymosaic-frame">
                            <h3>«Шагнувшие в космос»: Онлайн игра (Узнай по портрету)</h3>
                            <iframe src="https://learningapps.org/watch?app=18967969" style="border:0px;width:100%;height:800px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                        </div>

					</div>

				</div>
			</div>	

        </main>

    </div>


    <?php include_once  SITEROOTDIR.'views/main/section_services_ci.php'; ?>

    <?php include_once  SITEROOTDIR.'views/main/footer.php'; ?>

    <?php include_once  SITEROOTDIR.'views/main/back_top.php'; ?>

</div>



<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo SITEURL;?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo SITEURL;?>js/project-lit-map.js"></script>
<script src="<?php echo SITEURL;?>js/slider.js"></script>
<script src="<?php echo SITEURL;?>js/main.js"></script>
<script src="<?php echo SITEURL;?>js/goodvision.js"></script>
<script src="<?php echo SITEURL;?>js/wow.min.js"></script>

<script>
    new WOW().init();
</script>


<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>