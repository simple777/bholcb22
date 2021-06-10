<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/vote.css?v01">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/larger.css">
    <?php include_once  SITEROOTDIR.'views/main/head_font.php'; ?>
    <?php include_once  SITEROOTDIR.'views/main/head_add_libs.php'; ?>
</head>

<body>

	<div class="page-wrapper">

        <div class="modal-windows" id="modal-windows-vote"><p>Спасибо за ваш голос!</p></div>

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

                <div class="vote-wrapper">
                    <div class="vote">

                        <h2>Выбор голосования: рисунки и поделки</h2>


                        <p style="color: #e0dcd7; text-align: center" id="vote-note">Можно проголосовать за одну работу и один рисунок</p><br>

                        <div class="content-line-wrapper-2">

                            <div class="content-line-block-2">

                                <div class="content-line-block-content">
                                    <div class="content-line-block-content-in">
                                        <div class="content-line-block-content-in-text">
                                            <h2 class="content-line-block-header">Рисунки (43)</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-line-block-bg">
                                    <img src="<?php echo SITEURL;?>media/vote/pashalnaja-radost-risunki/risunki_logo_.jpg" style="margin: 0 !important;">
                                </div>

                                <a href="<?php echo SITEURL;?>concurs/2019-pr/vote-pictures.html" class="content-line-block-link" target="_blank"></a>

                            </div>

                            <div class="content-line-block-2">

                                <div class="content-line-block-content">
                                    <div class="content-line-block-content-in">
                                        <div class="content-line-block-content-in-text">
                                            <h2 class="content-line-block-header">Поделки (317)</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-line-block-bg">
                                    <img src="<?php echo SITEURL;?>media/vote/pashalnaja-radost-podelki/podelki_logo_.jpg" style="margin: 0 !important;">
                                </div>

                                <a href="<?php echo SITEURL;?>concurs/2019-pr/vote-works.html" class="content-line-block-link" target="_blank"></a>

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
<script src="<?php echo SITEURL; ?>js/jquery.lazyload.min.js"></script>
<script src="<?php echo SITEURL;?>js/slider.js"></script>
<script src="<?php echo SITEURL;?>js/main.js"></script>
<script src="<?php echo SITEURL;?>js/goodvision.js"></script>
<script src="<?php echo SITEURL;?>js/larger.js"></script>
<script>
     $(document).ready(function () {
         $("img.lazy").lazyload({
             effect : "fadeIn"
         });
     });
</script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>