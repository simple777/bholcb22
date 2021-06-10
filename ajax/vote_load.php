<?php


    require_once __DIR__.'/../config.php';
    require_once SITEROOTDIR.'functions/sql.php';
    require_once SITEROOTDIR.'models/vote.php';


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


        if ( isset ( $_POST['num'] ) && ( $tablename != 'none' ))
        {
            $num = $_POST['num'];

            $mysqli = sql_Connect();

            $vote_array = vote_Get_Load_ORDERBY_VOICES($mysqli, $tablename, $num);

            echo json_encode( $vote_array );
        }

        else echo 'vote_error';


    }

    else echo 'vote_error';

