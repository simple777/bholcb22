<?php

require_once __DIR__.'/../config.php';
require_once __DIR__.'/../functions/sql.php';

$dbh = sql_Connect();

if (!empty($_POST['search'])) {
	$search = $_POST['search'];
	$search = mb_eregi_replace("[^a-zа-яё0-9 ]", '', $search);
	$search = trim($search);
 
	$sth = "SELECT * FROM `lib777_news` WHERE ( `text` LIKE '%{$search}%'  OR `title` LIKE '%{$search}%' ) ORDER BY `news_date` DESC LIMIT 10";
	$result = sql_Query_assoc($dbh, $sth);
	
	/*
	$sth = $dbh->prepare("SELECT * FROM `city` WHERE `name` LIKE '{$search}%' ORDER BY `name`");
	$sth->execute();
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	*/
 
	if ($result) {
		?>
		<div class="search_result">
			<table>
				<?php foreach ($result as $row): ?>
				<tr>
					<td class="search_result-name">
						<p><?php echo '<strong>'.$row['title'].'</strong>'; ?></p>
						<p><?php echo mb_strimwidth(strip_tags($row['text']), 0, 100, "..."); ?></p>
					</td>
					<td class="search_result-btn">
						<a href="<?php echo '/news/'.$row['link'].'.html'; ?>">Перейти</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
		<?php
	}
}
