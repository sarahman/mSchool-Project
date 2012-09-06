<?php
$imageUrl = site_url('assets/images/closelabel.png');
$deleteAddress = site_url('lectures/delete');

$output = '';
foreach ($attachments as $attachment) {
    $output .= <<<EOF
        <li>
            <div>
                <a href='javascript:updateDetailView("{$attachment['AttachmentID']}")'>&#187;{$attachment['Description']}</a>
                <a rel='facebox' href='{$deleteAddress}' onclick='callFacebox($);'>
                    <img src='{$imageUrl}' alt='' />
                </a>
            </div>
        </li>
EOF;
}

if (empty($output)) {
    $output = "<li><p>Lecture is not available.</p></li>";
}

echo <<<EOF
<fieldset>
    <h1><acronym>View Lectures</acronym></h1>
    <p></p><ul>{$output}</ul>
</fieldset>
EOF;
