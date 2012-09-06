<?php

echo "<ul>";
foreach ($notes as $item) {
    echo "<li>{$item['date']}<ul>";
    foreach ($item['notes'] AS $note) {
        echo "<li><a href='javascript:updateDetailView(\"{$note['NotesID']}\")'>&#187;{$note['Title']}</a></li>";
    }
    echo "</ul></li>";
}
echo "</ul>";