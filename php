<?php

$url = "https://example.com";
$keyword = "Example";
$logFile = "log.txt";

$content = file_get_contents($url);

if ($content === false) {
    exit("Connection failed\n");
}

if (strpos($content, $keyword) !== false) {
    $message = date("Y-m-d H:i:s") . " - Keyword found\n";
} else {
    $message = date("Y-m-d H:i:s") . " - Keyword not found\n";
}

file_put_contents($logFile, $message, FILE_APPEND);

echo "Check completed\n";

?>
