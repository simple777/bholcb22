<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/afisha.css?v11">
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

            <div class="afisha-wrapper custom4">
                <div class="afisha">

                    <div class="p-big-text">
                        <h2>Уважаемые пользователи!</h2>
<!--
                        <p style="color: #333 !important;">Бибилиотека работает:</p>
                        <p style="color: #333 !important;"><span class="border-dashed">28 апреля</span> - с 8 до 15 час.</p>
                        <p style="color: #333 !important;"><span class="border-dashed">29 апреля, 2, 6 мая</span> -  с 10 до 16 час.</p>
                        <p style="color: #333 !important;"><span class="border-dashed">30 апреля, 5 мая</span> - выходной</p>
                        <p style="color: #333 !important;"><span style="color: red">1, 9 мая - праздничный день!</span></p>
						
-->

						<img src="<?php echo SITEURL;?>media/afisha/rezhim-raboty-v-prazdniki/2021-05/2021-05.png">

                        <p style="color: #333 !important;">&#9998;&nbsp;Администрация</p>
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
<script src="<?php echo SITEURL;?>js/slider.js"></script>
<script src="<?php echo SITEURL;?>js/main.js"></script>
<script src="<?php echo SITEURL;?>js/goodvision.js"></script>


<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>