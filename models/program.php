<?php

require_once __DIR__.'/../functions/sql.php';

/**********************************************************************************************************************/

function program_Get_all_ex_archive ($mysqli, $limit)
{
    $query = "SELECT `id`, `department`, `program_name`, `program_desc`, `program_year`, `is_archive` 
              FROM `lib777_program`  
              WHERE `is_archive` = 0
              ORDER BY `id` 
              DESC LIMIT ".$limit;

    return $ret = sql_Query_assoc($mysqli, $query);
}

/**********************************************************************************************************************/

/* add later Insert func */