<?php
// Your code here!
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://cdnneedtv.ru/hustlerhd.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 'http://sweet-tv.net/brazzers-tv-europe.html');
$html = curl_exec($ch);

preg_match_all(
    '(http://5.*?wmsAuthSign\=[^\&\">]+)',

    $html,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);

foreach ($posts as $post) {
    $link = $post[0];

header("Location: $link");
}
?>
