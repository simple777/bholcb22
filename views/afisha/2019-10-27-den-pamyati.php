<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/afisha.css?v17">
    <link rel="stylesheet" href="<? echo SITEURL; ?>css/simplelightbox.min.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/news.css">
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

            <div class="afisha-wrapper custom5">
                <div class="afisha">

                    <div class="p-big-text">



                        <div class="afisha-single">
                            <div class="afisha-single-content">

                                <h1>День памяти жертв политических репрессий</h1>

                                    <img src="<?php echo SITEURL;?>media/afisha/2019-10-27/2019-10-27-den-pamyati.jpg">

                                <p style="text-align: center; font-size: 1em">Администрация</p>

                                <br>

                            </div>
                        </div> <!-- news-single -->


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
<script src="<?php echo SITEURL; ?>js/simple-lightbox.min.js"></script>
<script>
    $(document).ready(function () {

        var gallery = $('.gallery a').simpleLightbox();

    });
</script>


<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>