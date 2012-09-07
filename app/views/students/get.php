<?php

echo "<ul>";
foreach ($students AS $student) {
    echo "<li><a href='javascript:updateDetailView(\"{$student['StudentID']}\")'>&#187;{$student['Name']}</a></li>";;
}
echo "</ul>";