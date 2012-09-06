<?php

echo "<ul>";
foreach ($weeks AS $week) {
    echo "<li><a href='javascript:updateViewByOption(\"{$week['WeekID']}\")'>&#187;{$week['Name']}</a></li>";
}
echo "</ul>";