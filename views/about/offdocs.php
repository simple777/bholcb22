<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/about.css">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/larger.css">
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

                <div class="about-success-wrapper">
                    <div class="about-success">

                        <h2>Официальные документы</h2>

						<div class="about-success-image-wrapper">
                            <img src="<?php echo SITEURL;?>images/pages/about/offdocs/egrul.jpg" class="minimized" alt="Cвидетельство о внесении в ЕГРЮЛ"><br>
                            <span style="padding: 0;">Cвидетельство о внесении в ЕГРЮЛ</span>
                        </div>
						
						<div class="about-success-image-wrapper">
                            <a href="<?php echo SITEURL;?>media/about/offdocs/ustav.docx"><img src="<?php echo SITEURL;?>images/pages/about/offdocs/ustav.jpg" width="200px" alt="Устав"></a><br>
                            <span style="padding: 0;">Устав<br></span>
                        </div>
						
						<div class="about-success-image-wrapper">
                            <a href="<?php echo SITEURL;?>media/about/offdocs/plan_fhd_2021-2023.pdf"><img src="<?php echo SITEURL;?>images/pages/about/offdocs/plan_fhd_2021-2023.jpg" width="200px" alt="План ФХД 2021-2023гг"></a><br>
                            <span style="padding: 0;">План ФХД 2021-2023гг</span>
                        </div>
						
						<div class="about-success-image-wrapper">
                            <a href="<?php echo SITEURL;?>media/about/offdocs/pol_plat_usl_2019.pdf"><img src="<?php echo SITEURL;?>images/pages/about/offdocs/pay_usl.jpg" width="200px" alt="Положение о платных услугах 2019г"></a><br>
                            <span style="padding: 0;">Положение о платных услугах 2019г</span>
                        </div>
						
						<div class="about-success-image-wrapper">
                            <a href="<?php echo SITEURL;?>media/about/offdocs/prikaz_dir.pdf"><img src="<?php echo SITEURL;?>images/pages/about/offdocs/prikaz_dir.jpg" width="200px" alt="Приказ о назначении директора"></a><br>
                            <span style="padding: 0;">Приказ о назначении директора</span>
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