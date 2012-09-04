<?php

echo "<ul>";
foreach ($events as $event) {
    echo "<li><a href='javascript:updateDetailView(\"{$event['EventID']}\")'>&#187;{$event['Title']}</a></li>";
}
echo "</ul>";