<?php
session_start();
if (isset($_POST['item-name'])) {
    header('location:/project-collectors-app/data-items.php');
}
?>
<html>
<head>
    <title>Add to Collection</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="form-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <h1>Life in Death</h1>
    <h2>Curios & Oddities</h2>
</header>
<section class="intro">
    <h2>Add item to collection</h2>
    <h3>Please enter the details of the new specimen below:</h3>
</section>
<div class="form-container">
    <form action="data-items.php" method="post" name="upload-form">
        <label for="item-name">Name</label>
        <input name="item-name" type="text" placeholder="i.e. Red Colobus"/>
        <label for="item-origin">Country of Origin</label>
        <input name="item-origin" type="text" placeholder="i.e. Zanzibar"/>
        <label for="item-family">Family</label>
        <input name="item-family" type="text" placeholder="i.e. Mammal"/>
        <label for="item-method">Preservation Method</label>
        <input name="item-method" type="text" placeholder="i.e. Wet Specimen"/>
        <label for="item-rating">Rating /10:</label>
        <input name="item-rating" type="text" placeholder="enter a number from 1-10"/>
        <label for="item-image">Image URL:</label>
        <input name="item-image" type="text" placeholder="250 characters max"/>
        <label for="item-description">Brief description:</label>
        <input name="item-description" type="text" placeholder="250 characters max"/>
        <input name="submit" type="submit">
    </form>
</div>
</body>
</html>