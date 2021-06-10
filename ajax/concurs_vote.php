<?php


    require_once __DIR__.'/../config.php';
    require_once SITEROOTDIR.'functions/sql.php';
    require_once SITEROOTDIR.'models/vote.php';

    if (isset($_POST['id']))
    {

        $mysqli = sql_Connect();

        if ( isset( $_POST['page'] ) ) {

            switch ( $_POST['page'] )
            {
                case '2019-pr-pictures': {

                    $tablename = 'lib777_vote_2019_pr_pictures';
                    break;

                }

                case '2019-pr-works': {

                    $tablename = 'lib777_vote_2019_pr_works';
                    break;

                }

                default:
                    {
                        $tablename = 'none';
                        break;
                    }
            }
        }


        if ( $tablename != 'none' )

        {
            $res = vote_Set_Voices($mysqli, $_POST['id'], $tablename);

            if ( $res ) echo $res[0]['voices_count'];
        }


    }

    else
        {
            echo "Ошибка: скрипт голосования";
        }
