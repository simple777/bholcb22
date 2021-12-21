<!DOCTYPE html>
<html>
<head>
    <?php include_once  SITEROOTDIR.'views/main/head_meta.php'; ?>
    <meta name="description" content="официальный сайт МБУК Белохолуницкая центральная библиотека">
    <meta name="keywords" content="белохолуницкая, библиотека, официальный сайт, библиотека, белая холуница">
    <title>МБУК Белохолуницкая центральная библиотека официальный сайт</title>
    <?php include_once  SITEROOTDIR.'views/main/head_libs.php'; ?>
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/work.css?v01">
    <link rel="stylesheet" href="<?php echo SITEURL;?>css/tables.css?v01">
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

                <div class="work-programs-wrapper">
                    <div class="work-programs">

                        <h2>Программы</h2>
						
						<table class="table-4-cols">
						
							<?php foreach ($program as $item): ?>
							
								<tr>
								
									<td class="td-min-width145px">
										<?php echo $item['department']; ?>
									</td>
									
									<td>
										<div class="table-content-title"><?php echo '&laquo;'.trim($item['program_name'], ' ').'&raquo;'; ?></div>
									</td>
									
									<td>
										 <div class="table-content-desc"><?php echo $item['program_desc']; ?></div>
									</td>
									
									<td class="td-width5">
										<?php echo $item['program_year']; ?>
									</td>
								
								</tr>

							<?php endforeach; ?>							

                        </table>
						
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
<script src="<?php echo SITEURL;?>js/readers.js"></script>

<!-- Image preload -->
<div class="img_preload"></div>

</body>

</html>