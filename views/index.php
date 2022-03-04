<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
	<meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
	<meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
	<title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/news.css?v24">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/form.css?v02">
    <?php include_once  SITEROOTDIR.'views/main/head_font.php'; ?>
    <?php include_once  SITEROOTDIR.'views/main/head_add_libs.php'; ?>
	
</head>

<body>

	<div class="page-wrapper">

		<?php include_once  __DIR__.'/main/header.php'; ?>

        <?php include_once  __DIR__.'/main/nav.php'; ?>

		<div class="content-wrapper clearfix">

            <section class="notice-hidden">
                <p>Позиция для срочных объявлений [скрытая]</p>
            </section>

            <section class="breadcrumbs">
                <div class="breadcrumbs-text"></div>
            </section>


			<main role="main" class="content">

				<div class="news-wrapper-main-page">
                    <section class="news-main-page">
                        <?php if ($news) { include __DIR__ . '/news_limit_main_page.php'; } else { echo "<div class='news-item-empty'>Извините, новостей в этом месяце не было!</div>"; }?>
                    </section>
                    <aside class="main-page-side-menu">
					
						<div class="search_box">
							<form action="">
								<table>
								<input type="text" name="search" id="search" placeholder="Поиск">
								<!--<input type="submit">-->
								</table>
							</form>
							<div id="search_box-result"></div>
						</div>
						
                        <ul class="main-page-side-menu-ul">
                            <li><p><a href="<?php echo SITEURL; ?>about/nok.html"><span class="nok-text">Оценка качества</span></a></p>
                            <li><p><a href="#" data-hystmodal="#modal-vspravka">Виртуальная справка</a></p></li>
                            <li><p><a href="#" data-hystmodal="#modal-renew-book">Продление онлайн</a></p></li>
                        </ul>

                        <div class="main-page-banners">
                            <a href="https://svetapp.rusneb.ru" target="_blank"><img src="<?php echo SITEURL;?>images/banners/nebsvet.jpg"></a>
                        </div>

                        <div class="main-page-banners">
                            <a href="https://trk.mail.ru/c/zdras5?mt_campaign=dd&mt_adset=all&mt_network=federal&mt_creative=banner&mt_sub1=social#mt_campaign=dd&mt_adset=all&mt_network=federal&mt_creative=banner&mt_sub1=social" target="_blank"><img src="<?php echo SITEURL;?>images/banners/ddelo.jpg" width="200px"></a>
                        </div>

                    </aside>

				</div>

                <div class="main-page-button"><a href="news.html">Читать все новости</a></div>

                <!-- pro.culture -->
				<div class="news-pro-culture" style="border-bottom: 1px solid #000">
					<div id="eipsk-eventslist"></div>
					<!-- EIPSK Widget -->
				</div>

			</main>

		</div>


        <?php include_once  __DIR__.'/main/main_blocks.php'; ?>

        <?php include_once  __DIR__.'/main/section_services_ci.php'; ?>

		<?php include_once  __DIR__.'/main/footer.php'; ?>

        <?php include_once  SITEROOTDIR.'views/main/back_top.php'; ?>



	</div>

    <!-- modal -->

    <?php include_once  __DIR__.'/modal/modal-vspravka.php'; ?>

    <?php include_once  __DIR__.'/modal/modal-renew-book.php'; ?>



    <!-- Scripts -->
    <script src="<?php echo SITEURL;?>js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo SITEURL;?>js/slider.js?v54"></script>
    <script src="<?php echo SITEURL;?>js/main.js?v01"></script>
    <script src="<?php echo SITEURL;?>js/goodvision.js?v10"></script>
    <script src="<?php echo SITEURL;?>js/hystmodal.min.js"></script>
    <script src="<?php echo SITEURL;?>js/jquery.sendmail.js?v19"></script>

    <script type="text/javascript">
        $('form.feedback').sendMail({
        // Параметры...
        });
    </script>

    <!-- pro.culture banner -->
    <script type="text/javascript" src="https://pro.culture.ru/scripts/widgets/api.js?6450"></script>
    <script type="text/javascript">
        EIPSK.Widgets.Inline('bbnpchvybb84nf2n', 'eipsk-eventslist');
    </script>

    <script src="<?php echo SITEURL;?>js/maskinput.js"</script>

    <script type="text/javascript">
        $(function() {
            $("#tel1").mask("+7 (999) 999-9999");
        });
    </script>

    <?php include_once  __DIR__.'/modal/modal-appeals-form.php'; ?>

    <script type="text/javascript">
        const myModal = new HystModal({
            linkAttributeName: "data-hystmodal",
            // настройки (не обязательно), см. API
        });
    </script>


<div class="img_preload"></div>

</body>

</html>
