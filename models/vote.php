<?php

/*
 *
//get news with date-filter
function news_Get_ByDate ($mysqli, $limit, $year, $month)
{

    $query = "
      SELECT `id`, `title`, `imgprev_small`, `imgprev_medium`, `news_date`, `description` , `link`
      FROM `lib777_news` 
      WHERE YEAR(`news_date`) = ".mysqli_real_escape_string($mysqli, $year)." 
      AND MONTH(`news_date`) = ".mysqli_real_escape_string($mysqli, $month)." 
      ORDER BY `news_date` 
      DESC LIMIT ".$limit;

    return $ret = sql_Query_assoc($mysqli, $query);
}

*/



function vote_Get_All ($mysqli, $tablename)
{
    $query = "
      SELECT `id`, `work_title`, `work_img`, `voices_count`
      FROM `".$tablename."`";

    return $ret = sql_Query_assoc($mysqli, $query);
}

function vote_Get_All_TOP ($mysqli, $tablename)
{
    $query = "
      SELECT `id`, `work_title`, `work_img`, `voices_count`
      FROM `".$tablename."`
      ORDER BY `voices_count` DESC";

    return $ret = sql_Query_assoc($mysqli, $query);
}

function vote_Get_All_Load ($mysqli, $tablename)
{
    $query = "
      SELECT `id`, `work_title`, `work_img`, `voices_count`
      FROM `".$tablename."`  
      LIMIT 30";

    return $ret = sql_Query_assoc($mysqli, $query);
}

function vote_Get_Load ($mysqli, $tablename, $num)
{
    $query = "
      SELECT `id`, `work_title`, `work_img`, `voices_count`
      FROM `".$tablename."`  
      LIMIT ".$num.", 30";

    return $ret = sql_Query_assoc($mysqli, $query);
}

/* ORDER VY VOICES COUNT - FOR RESULTS */

function vote_Get_All_Load_ORDERBY_VOICES ($mysqli, $tablename)
{
    $query = "
      SELECT `id`, `work_title`, `work_img`, `voices_count`
      FROM `".$tablename."`  
      ORDER BY `voices_count` DESC LIMIT 30";

    return $ret = sql_Query_assoc($mysqli, $query);
}

function vote_Get_Load_ORDERBY_VOICES ($mysqli, $tablename, $num)
{
    $query = "
      SELECT `id`, `work_title`, `work_img`, `voices_count`
      FROM `".$tablename."`  
      ORDER BY `voices_count` DESC LIMIT ".$num.", 30";

    return $ret = sql_Query_assoc($mysqli, $query);
}

function vote_Insert ($mysqli, $work_title, $work_url, $tablename)
{
    $stmt = $mysqli->prepare("INSERT INTO ".$tablename." (work_title, work_img) VALUES (?, ?)");
    $stmt->bind_param("ss", $work_title, $work_url);

// set parameters and execute

    $stmt->execute();

    $stmt->close();
    $mysqli->close();

    return true;
}

function vote_Set_Voices ($mysqli, $id, $tablename)
{
        $query = "
          UPDATE ".$tablename." SET `voices_count` = `voices_count` + 1 
          WHERE id = ".$id;

        /*$query = "
          UPDATE `".$tablename."` SET `voices_count` = `voices_count` + 1
          WHERE id = ".(int)$id;*/

        $res = $mysqli->query($query);

        if ($res)
        {
            $query = "
          SELECT `voices_count` 
          FROM ".$tablename." 
          WHERE id = ".$id;


            return $ret = sql_Query_assoc($mysqli, $query);
        }

        else return false;
}