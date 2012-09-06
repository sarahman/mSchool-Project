<?php

echo "<ul>";
foreach ($courses AS $course => $courseModules) {
    echo "<li>{$course}<ul>";
    foreach ($courseModules AS $courseModule => $students) {
        foreach ($students AS $student) {
            echo "<li>{$courseModule}<ul>";
            echo "<li><a href='javascript:updateDetailView(\"{$student['StudentID']}\")'>&#187;{$student['Surname']}</a></li>";
        }
    }
    echo "</ul></li>";
}
echo "</ul>";