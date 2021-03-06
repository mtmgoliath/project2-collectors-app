<?php
session_start();
if (isset($_POST['item-name'])) {
    header('location:/project-collectors-app/docs/data-items.php');
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
        <div class="form-row">
            <label for="item-name">Name</label>
            <input name="item-name" type="text" placeholder="i.e. Red Colobus"/>
        </div>
        <div class="form-row">
            <label for="item-origin">Country of Origin</label>
            <input name="item-origin" type="text" placeholder="i.e. Zanzibar"/>
        </div>
        <div class="form-row">
            <label for="item-family">Family</label>
            <input name="item-family" type="text" placeholder="i.e. Mammal"/>
        </div>
        <div class="form-row">
            <label for="item-method">Preservation Method</label>
            <input name="item-method" type="text" placeholder="i.e. Wet Specimen"/>
        </div>
        <div class="form-row">
            <label for="item-rating">Rating /10:</label>
            <input name="item-rating" type="number" placeholder="enter a number from 1-10" min="1" max="10"/>
        </div>
        <div class="form-row">
            <label for="item-image">Image URL:</label>
            <input name="item-image" type="text" placeholder="250 characters max"/>
        </div>
        <div class="form-row">
            <label for="item-description">Brief description:</label>
            <textarea name="item-description"  placeholder="250 characters max" maxlength="250"></textarea>
        </div>
        <input name="submit" type="submit">
    </form>
    <nav>
        <a href="../index.php">Return to collection</a>
    </nav>
</div>
</body>
</html>