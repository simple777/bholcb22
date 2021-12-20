<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/readers.css?v01">
	<link rel="stylesheet" href="<?php echo SITEURL;?>css/larger_1000px.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/tabs.css">
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

                <div class="readers-clubs-wrapper">
                    <div class="readers-clubs">

                        <h2>Наши клубы</h2>
						
						<div class="content-line-block-2">
							<h3>Для детей</h3>
							<img src="<?php echo SITEURL;?>images/pages/readers/clubs/2021/clubs-deti.jpg" class="minimized" alt="Кружки для детей">
							<img src="<?php echo SITEURL;?>images/pages/readers/clubs/2021/clubs-deti-current.jpg" class="minimized" alt="Кружки для детей">
							<div>(Нажмите, чтобы увеличить)</div>
						</div>
						
						<div class="content-line-block-2">
							<h3>Для взрослых</h3>
							<img src="<?php echo SITEURL;?>images/pages/readers/clubs/2021/clubs-old.jpg" class="minimized" alt="Кружки для взрослых">
							<img src="<?php echo SITEURL;?>images/pages/readers/clubs/2021/clubs-old-current.jpg" class="minimized" alt="Кружки для взрослых">
							<div>(Нажмите, чтобы увеличить)</div>
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
<!--<script src="<?php //echo SITEURL;?>js/readers.js"></script> 2021-09-21 -->
<script src="<?php echo SITEURL;?>js/larger.js"></script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>