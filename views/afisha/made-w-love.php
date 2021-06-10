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

                                <h1>Сделано с любовью</h1>

                                <p>У каждого человека есть потребность делать что-то своими руками. Любой способен создать
                                красивые и полезные вещи, используя для этого разные материалы и техники. И часто
                                бывает так, что хобби человека никак не связано с его профессиональной деятельностью.
                                Центральная библиотека приглашает всех желающих посетить выставку декоративно-прикладного
                                творчества «Сделано с любовью».</p>

                                <p>На ней представлены работы, изготовленные руками
                                библиотекарей: вязаные игрушки и вещи; картины, вышитые бисером и выполненные в технике
                                алмазной вышивки; плетенные из газетных трубочек вазы и корзинки и многое другое.
                                Приходите и оцените мастерство библиотечных работников!</p>

                                <div class='gallery-wrapper'>
                                    <div class='gallery'>
                                        <a href='http://bholcb.ru/media/news/sdelano-s-ljubovju/gallery/DSCN2940.JPG'>
                                            <img src='http://bholcb.ru/media/news/sdelano-s-ljubovju/thumb/DSCN2940.JPG' title='сделано с любовью 1' alt='сделано с любовью'>
                                        </a>
                                        <a href='http://bholcb.ru/media/news/sdelano-s-ljubovju/gallery/DSCN2941.JPG'>
                                            <img src='http://bholcb.ru/media/news/sdelano-s-ljubovju/thumb/DSCN2941.JPG' title='сделано с любовью 2' alt='сделано с любовью'>
                                        </a>
                                        <a href='http://bholcb.ru/media/news/sdelano-s-ljubovju/gallery/DSCN2942.JPG'>
                                            <img src='http://bholcb.ru/media/news/sdelano-s-ljubovju/thumb/DSCN2942.JPG' title='сделано с любовью 3' alt='сделано с любовью'>
                                        </a>
                                        <a href='http://bholcb.ru/media/news/sdelano-s-ljubovju/gallery/DSCN2943.JPG'>
                                            <img src='http://bholcb.ru/media/news/sdelano-s-ljubovju/thumb/DSCN2943.JPG' title='сделано с любовью 4' alt='сделано с любовью'>
                                        </a>
                                        <a href='http://bholcb.ru/media/news/sdelano-s-ljubovju/gallery/DSCN2944.JPG'>
                                            <img src='http://bholcb.ru/media/news/sdelano-s-ljubovju/thumb/DSCN2944.JPG' title='сделано с любовью 5' alt='сделано с любовью'>
                                        </a>
                                        <a href='http://bholcb.ru/media/news/sdelano-s-ljubovju/gallery/DSCN2945.JPG'>
                                            <img src='http://bholcb.ru/media/news/sdelano-s-ljubovju/thumb/DSCN2945.JPG' title='сделано с любовью 6' alt='сделано с любовью'>
                                        </a>
                                    </div>
                                </div>


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