<?php
$html = trim(fgets(STDIN));

preg_match('/<title>(.*?)<\/title>/', $html, $titleMatches);
preg_match_all('/<body.*?>(.*?)<\/body>/', $html, $bodyMatches);

$title = isset($titleMatches[1]) ? $titleMatches[1] : '';
$body = isset($bodyMatches[1]) ? strip_tags($bodyMatches[1][0]) : '';

echo "Title: " . $title . "\n";
echo "Content: " . $body . "\n";
?>