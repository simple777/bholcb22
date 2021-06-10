$(document).ready(function(){


    /* Main code */
    /******************************************************************************************************************/



    var pr_type_of_vote = $(".vote").attr("id");
    var pr_lsname = '';



        switch ( pr_type_of_vote )
        {
            case '2019-pr-pictures':
                {
                    pr_lsname = 'vote-2019-pr-pictures';
                    break;
                }

            case '2019-pr-works':
                {
                    pr_lsname = 'vote-2019-pr-works';
                    break;
                }
        }



        if ( (localStorage.getItem('vote-2019-pr-pictures') == "voted") && ( pr_type_of_vote == '2019-pr-pictures' ) )

        {
            $('.vote-btn, #vote-note').remove();

        }

        if ( localStorage.getItem('vote-2019-pr-works') == "voted" && ( pr_type_of_vote == '2019-pr-works' ) )

        {
            $('.vote-btn, #vote-note').remove();
        }




    $('.vote-btn').click( function(e){

        e.preventDefault();

        var work_id = this.id;


        $.ajax({
            type: "POST",
            async: true,
            url: "../../ajax/concurs_vote.php",
            data: "id="+work_id+"&page=" + pr_type_of_vote,

            success: function(res) {

                if (res)
                {

                    //console.log(res);

                    /* 1 vote for 1 user */

                    $('#v'+work_id).text('Голосов: '+res);
                    localStorage.setItem( pr_lsname, 'voted' );

                    $('.vote-btn').remove();

                    $( "#modal-windows-vote" ).show().animate({ top: "0px" }).delay(1000).fadeOut();

                }


            },//success

            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                alert(msg);
            }

        });//ajax


    });


    /* Ajax load content when bottom of page */
    /*****************************************************************************************************************/

    if ( pr_type_of_vote ==  '2019-pr-pictures'  || pr_type_of_vote ==  '2019-pr-works'  )

    {

        var inProcess = false;
        var num = 30;

        $(window).scroll(function () {

            if ($(window).scrollTop() + $(window).height() + $(".ci-services-wrapper").outerHeight() + $(".footer-main-wrapper").outerHeight() >= $(document).height() && !inProcess) {

                $.ajax({
                    url: "../../ajax/vote_load.php",
                    method: 'POST',
                    data: {"num": num, "page": pr_type_of_vote},
                    beforeSend: function () {
                        inProcess = true;
                    }
                }).done(function (data)

                {

                    data = jQuery.parseJSON(data);

                    if ( data.length > 0 )

                    {

                        var vote_btn;
                        var vote_btn_enable = true;

                        if ( (localStorage.getItem('vote-2019-pr-pictures') == "voted") && ( pr_type_of_vote == '2019-pr-pictures' ) )
                        {
                            vote_btn_enable = false;
                        }


                        if ( (localStorage.getItem('vote-2019-pr-works') == "voted") && ( pr_type_of_vote == '2019-pr-works' ) )
                        {
                            vote_btn_enable = false;
                        }

                        $.each(data, function (index, data) {

                            if (vote_btn_enable == true)
                            {
                                //vote_btn = "\t \t <div class='vote-btn' id='" + data.id + "'>Нравится эта!</div> \n";
                                vote_btn = '';
                            }

                            else

                            {
                                vote_btn = '';
                            }

                            $(".vote").append("\t <div class='vote-image-wrapper'>\n" +

                                "\t \t <img src='" + data.work_img + "' class='minimized' alt='" + data.work_title + "'><br>\n" +
                                "\t \t <span>" + data.work_title + "</span>\n" +
                                "\t \t <div class='vote-count' id='v" + data.id + "'>Голосов:&nbsp;" + data.voices_count + "</div> \n" +

                                vote_btn +

                                "\t </div>");
                        });


                        inProcess = false;
                        num += 30;



                                $('.vote-btn').click( function(e){

                                    e.preventDefault();

                                    var work_id = this.id;


                                    $.ajax({
                                        type: "POST",
                                        async: true,
                                        url: "../../ajax/concurs_vote.php",
                                        data: "id="+work_id+"&page=" + pr_type_of_vote,

                                        success: function(res) {

                                            if (res)
                                            {

                                                /* 1 vote for 1 user */

                                                //$('#v'+work_id).text('Голосов: '+res);
                                                localStorage.setItem( pr_lsname, 'voted' );

                                                $('.vote-btn').remove();

                                                $( "#modal-windows-vote" ).show().animate({ top: "0px" }).delay(1000).fadeOut();

                                            }


                                        },//success

                                        error: function (jqXHR, exception) {
                                            var msg = '';
                                            if (jqXHR.status === 0) {
                                                msg = 'Not connect.\n Verify Network.';
                                            } else if (jqXHR.status == 404) {
                                                msg = 'Requested page not found. [404]';
                                            } else if (jqXHR.status == 500) {
                                                msg = 'Internal Server Error [500].';
                                            } else if (exception === 'parsererror') {
                                                msg = 'Requested JSON parse failed.';
                                            } else if (exception === 'timeout') {
                                                msg = 'Time out error.';
                                            } else if (exception === 'abort') {
                                                msg = 'Ajax request aborted.';
                                            } else {
                                                msg = 'Uncaught Error.\n' + jqXHR.responseText;
                                            }
                                            alert(msg);
                                        }

                                    });//ajax


                                });

                                $('.minimized').click(function(event) {
                                    var i_path = $(this).attr('src');
                                    $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
                                    $('#magnify').css({
                                        left: ($(document).width() - $('#magnify').outerWidth())/2,
                                        // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
                                        top: ($(window).height() - $('#magnify').outerHeight())/2
                                    });
                                    $('#overlay, #magnify').fadeIn('fast');
                                });

                                $('body').on('click', '#close-popup, #overlay', function(event) {
                                    event.preventDefault();

                                    $('#overlay, #magnify').fadeOut('fast', function() {
                                        $('#close-popup, #magnify, #overlay').remove();
                                    });
                                });

                    }

                });

            }
        });

        }

}); //jQuery