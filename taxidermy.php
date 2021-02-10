<?php

$db = new PDO('mysql:host=db; dbname=collector_project', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$fullQuery = $db->prepare("SELECT * FROM `taxidermy_collection`;");
$fullQuery->execute();
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
    <title>Taxidermy Collection</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <h1>Life in Death</h1>
    <h2>Curios & Oddities</h2>
</header>
<section id="intro">
    <p>Here is a nice gallery of my Taxidermy Collection so far.
        Items are sorted by their Name/ID and include details about their origin,
        as well as an overall rating out of 10.</p>
</section>
<ul class="collection">
    <? while ($row = $fullQuery->fetch()) { ?>
        <li class="collection_item ">
            <div class="stats">
                    <span class="image_wrapper">
                        <img src="<?=$row['image']?>">
                    </span>
                <h3><?=$row['name']?></h3>
                <ul>
                    <li class="origin">Origin: <?=$row['origin']?></li>
                    <li class="family">Family: <?=$row['family']?></li>
                    <li class="preservation_type"><?=$row['method']?></li>
                    <li class="quality">Rating: <?=$row['rating']?>/10</li>
                </ul>
            </div>
        </li>
    <? } ?>
</ul>
</body>
</html>