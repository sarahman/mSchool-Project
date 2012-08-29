<?php
foreach ($quiz as $items) {
    echo "<li><a href='javascript:updateQuestions(\"{$items['QuizID']}\")'>&#187;{$items['Title']}</a></li>";
}