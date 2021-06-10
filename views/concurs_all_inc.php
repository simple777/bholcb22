<? require_once __DIR__.'/../config.php'; ?>

<?php $row_Count = 1; ?>


<?php //session is open ?>
<?php //get page number from session, cause we can change it by ajax ?>
<?php //get all vars from session ?>


<?php foreach ($_SESSION['concurs_Array'][$_SESSION['concurs_Page']] as $item): ?>

<div class="concurs-row">

    <article class="concurs-item-wrapper">

        <header class="concurs-item-header">
            <div class="concurs-item-title"><h2><?php echo '&laquo;'.trim($item['title'], ' ').'&raquo;'; ?></h2></div>
        </header>

        <div class="concurs-item-content-img">
            <img src="<?php echo $item['imgprev_medium']; ?>" width="800" height="600" class="lazy news-item-imgprev" alt="<?php echo $item['title']; ?>">
        </div>

        <div class="concurs-item-date">
            <p>Срок проведения: с <?php echo date("d.m.Y", strtotime($item['concurs_date'])); ?> по <?php echo date("d.m.Y", strtotime($item['concurs_off_date'])); ?></p>
        </div>

        <div class="concurs-item-desciption"><?php echo $item['description']; ?></div>
        <div class="concurs-item-link"><a href="<?php echo SITEURL;?>concurs/<?php echo $item['link'].'.html'; ?>">Подробнее</a></div>

        <?php if ( $item['vote_exist'] == 1 ) : ?>

            <?php if ( $item['vote_status'] == 1 ) : ?>
                 <div class="concurs-item-link"><a href="<?php echo $item['vote_link'];?>" style="background: #50a52d;" target="_blank">Онлайн-голосование</a></div>
                    <?php else: ?>
                        <div class="concurs-item-link"><a href="<?php echo SITEURL.$item['vote_link'];?>" style="background: #50a52d;" target="_blank">Результаты онлайн-голосования</a></div>
            <?php endif; ?>

        <?php endif; ?>

         <?php if ( !empty($item['concurs_result_link']) ) : ?>

            <div class="concurs-item-link"><a href="<?php echo $item['concurs_result_link'];?>" style="background: #50a52d;" target="_blank">Итоги конкурса</a></div>

         <?php endif; ?>

        <?php if ( !empty($item['winners_link']) ) : ?>

            <div class="concurs-item-link"><a href="<?php echo $item['winners_link'];?>" style="background: #50a52d;" target="_blank">Победители</a></div>

        <?php endif; ?>

        <?php if ( !empty($item['news_link']) ) : ?>

            <div class="concurs-item-link"><a href="<?php echo $item['news_link'];?>" style="background: #50a52d;" target="_blank">Читать о конкурсе в "Новостях"</a></div>

        <?php endif; ?>

    </article>

</div>

    <?php $row_Count++; ?>

<?php endforeach; ?>

<?php if ($_SESSION['concurs_Count'] > $_SESSION['concurs_Page'] * CONCURS_ONPAGE) : ?>

    <div class="concurs-show-more">
        <div class="concurs-show-more-but" id="concurs-show-more-but-id">Показать еще</div>
    </div>

<?php endif; ?>
