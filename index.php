<?php
    require_once('bootstrap.php');
    $posts = new Post;
    $posts = $posts->show();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Spotless</title>
</head>
<body>
<?php include 'nav.inc.php'; ?>
<h1>Recent posts</h1>
<?php foreach($posts as $p): ?>
<!--
<h2></h2>
<img>
<p>text</p>
<div><ul>lijst gegevens</ul></div>
<div><ul>bijdrage gemeente</ul></div>
 -->
<?php endforeach;?>
</body>
</html>