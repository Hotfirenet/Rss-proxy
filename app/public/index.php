<?php
header('Content-Type: application/rss+xml; charset=utf-8');
header("Access-Control-Allow-Origin: *");
$rss = 'https://hotfirenet.com/feed';

// $opts = array(
//     'http'=> array(
//         'method'=>   "GET",
//       )
// );

// $context = stream_context_create($opts);
// $result = file_get_contents($rss, NULL, $context);
// $output = simplexml_load_string($result);

// echo $output;
$string = file_get_contents($rss);
echo $string;