<?php
require_once 'docs/database-object.php';
require_once 'docs/populate-taxidermy-content.php';
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <title>Taxidermy Collection</title>
    <link rel="stylesheet" type="text/css" href="docs/normalize.css">
    <link rel="stylesheet" type="text/css" href="docs/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <h1>Life in Death</h1>
    <h2>Curios & Oddities</h2>
</header>
<section class="intro">
    <p>Here is a nice gallery of my Taxidermy Collection so far.
        Items are sorted by their Name/ID and include details about their origin,
        as well as an overall rating out of 10.</p>
</section>
<ul class="collection">
    <? echo populateItems($results);?>
</ul>
<nav>
    <a href="docs/upload-form.php">Add items to collection</a>
</nav>
</body
</html>

