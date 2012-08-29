<div class="content" id="BrainTeaser">

    <div id="leftMain">
        <div id="QuizList" class="content-box">
            <ul>
                <li><h2>Quiz List</h2></li>
                <div id="QuizListings"></div>
            </ul>
        </div>
    </div>

    <div id="rightMain">
        <input name="QuizIDVal" type="hidden" value="" id="QuizIDVal"/>

        <div id="QuestionLists" class="content-box">

            <div class="content-inner">
                <div class="title_border_nopadd">
                    <h1>Quiz Questions</h1>

                    <div class="dash-sub-menu">
                        <ul>
                            <li><a class="active" href="<?php echo site_url('quiz/add') ?>"
                                   rel="facebox"><span><span>Add Quiz</span></span></a></li>

                            <li><a href="<?php echo site_url('questions/add') ?>" rel="facebox">
                                <span><span>Add Question</span></span></a></li>

                            <li><a href="<?php echo site_url('quiz/confirmDelete') ?>"
                                   rel="facebox"><span><span>Delete Quiz</span></span></a></li>

                            <li><a href="javascript:updateQuizData();">
                                <span><span>Modify Quiz</span></span></a></li>

                            <li><a href="#"><span><span>View Scores</span></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="before-after-table">
                    <ul class="select_all">
                        <li><a title="" href="#"><span><span><span class="plus">select all</span></span></span></a>
                        </li>
                        <li><a title="" href="#"><span><span><span
                            class="minus">deselect all</span></span></span></a></li>
                    </ul>

                    <ul class="nav" id="nav_top">
                        <li><a class="change" href="#">Set Status Approved</a>
                            <ul style="display: none;">
                                <li><a href="#">General Inquiry</a></li>
                                <li><a href="#">Programming </a></li>
                                <li><a href="#">Website Quote Request</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Help and Support</a></li>
                            </ul>
                        </li>
                    </ul>
                    <strong class="apply-action">Apply Action :</strong>
                </div>
                <form method="post" action="" name="frm-checkboxes" id="detailView">
                    <div id="QListings">

                        <table cellspacing="0" cellpadding="0" width="749px">
                            <tbody>
                            <tr>
                                <th width="38px" class="check"></th>
                                <th width="142px" class="photo">Question</th>
                                <th width="101px" class="item_name"><a href="#" tiptitle="Sort by name">Answer A</a>
                                </th>
                                <th width="82px" class="price"><a href="#" tiptitle="Sort by name">Answer B</a><a
                                    class="tooltip" href="#" tiptitle="Sort by price descending."></a></th>
                                <th width="110px" class="status"><a href="#" tiptitle="Sort by name">Answer C</a><a
                                    href="#" tiptitle="Sort by status"></a></th>
                                <th width="93px" class="move">Good Ans</th>
                                <th width="182px" class="quickaction">Quick Actions</th>
                            </tr>

                            <tr>
                                <td class="check"><input type="checkbox" name="check_selected[]"></td>
                                <td></td>
                                <td class="item_name">&nbsp;</td>
                                <td class="price">&nbsp;</td>
                                <td class="status">&nbsp;</td>
                                <td class="move">&nbsp;</td>
                                <td class="quickaction">
                                    <ul>
                                        <li><a class="view" href="#"><span><span>View</span></span></a></li>
                                        <li><a class="edit" href="#"><span><span>Edit</span></span></a></li>
                                        <li><a class="delete" href="#"><span><span>Delete</span></span></a></li>
                                    </ul>
                                </td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                </form>
                <div class="before-after-table">
                    <ul class="select_all">
                        <li><a title="" href="#"><span><span><span class="plus">select all</span></span></span></a>
                        </li>
                        <li><a title="" href="#"><span><span><span class="minus">deselect all</span></span></span></a></li>
                    </ul>

                    <ul class="nav" id="nav_bottom">
                        <li><a class="change" href="#">Set Status Approved</a>
                            <ul>
                                <li><a href="#">General Inquiry</a></li>
                                <li><a href="#">Programming </a></li>
                                <li><a href="#">Website Quote Request</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Help and Support</a></li>
                            </ul>
                        </li>
                    </ul>
                    <strong class="apply-action">Apply Action :</strong>
                </div>
            </div>
        </div>

    </div>

</div>

<script language="javascript" type="text/javascript">

    (function ($) {

        updateQuiz();
        updateQuestions(1);

        $('ul#nav_top > li').hover(function () {
                $('a.change').html('Choose an action below');
                $('ul:first', this).show();
            },
            function () {
                $('a.change').html('Set Status Approved');
                $('ul:first', this).hide();
            });

        $('ul#nav_top li li').hover(function () {
                $('ul:first', this).each(function () {
                    $(this).css('top', $(this).parent().position().top);
                    $(this).css('left', $(this).parent().position().left + $(this).parent().width());
                    $(this).show();
                });
            },
            function () {
                $('ul:first', this).hide();
            });

        $('ul#nav_bottom > li').hover(function () {
                $('a.change').html('Choose an action below');
                $('ul:first', this).show();
            },
            function () {
                $('a.change').html('Set Status Approved');
                $('ul:first', this).hide();
            });

        $('ul#nav_bottom li li').hover(function () {
                $('ul:first', this).each(function () {
                    $(this).css('top', $(this).parent().position().top);
                    $(this).css('left', $(this).parent().position().left + $(this).parent().width());
                    $(this).show();
                });
            },
            function () {
                $('ul:first', this).hide();
            });

    })(jQuery);

    function updateQuiz() {
        $('#QuizListings').load('quiz/get');
    }

    function updateQuestions(quizID) {
        $('#QuizIDVal').val(quizID);
        $('#QListings').fadeOut('fast');
        $('#QListings').load('questions/getByQuiz/' + quizID, function () {
            $('#QListings').fadeIn('slow');
        });
    }

    function delRec() {
        $('#facebox .content').load('Ajax/QuizAdd.php?q=del&quizID=' + $('#QuizIDVal').val(), function () {
            updateQuiz();
            updateQuestions($('#QuizIDVal').val());
        });
    }

    function delQues($id) {
        jQuery.facebox({ ajax:'Ajax/QuestionsAdd.php?q=delete&quesID=' + $id});
    }

    function delQuestion($id) {
        $('#facebox .content').load('Ajax/QuestionsAdd.php?q=del&quesID=' + $id, function () {
            updateQuiz();
            updateQuestions($('#QuizIDVal').val());
        });
    }

    function viewQuestion($id) {
        jQuery.facebox({ ajax:'questions/view/id/' + $id});
    }

    function updateQues($id) {
        jQuery.facebox({ ajax:'questions/update/id/' + $id});
    }

    function updateQuizData() {
        jQuery.facebox({ ajax:'Ajax/QuizUpdate.php?QuizID=' + $('#QuizIDVal').val()});
    }

    function refreshAll() {
        updateQuiz();
        updateQuestions($('#QuizIDVal').val());
    }

</script>