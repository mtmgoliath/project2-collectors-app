<?php
session_start();

if (isset($_POST['item-name'])) {
    header('location:/project-collectors-app/data-items.php');
}
?>

<html>
    <form action="data-items.php" method="post" name="upload-form">
        <label for="item-name">Name</label>
        <input name="item-name" type="text"/>
        <label for="item-origin">Country of Origin</label>
        <input name="item-origin" type="text"/>
        <label for="item-family">Family</label>
        <input name="item-family" type="text"/>
        <label for="item-method">Method</label>
        <input name="item-method" type="text"/>
        <label for="item-rating">Rating /10:</label>
        <input name="item-rating" type="text"/>
        <label for="item-image">Image URL:</label>
        <input name="item-image" type="text"/>
        <label for="item-description">Brief description:</label>
        <input name="item-description" type="text"/>
        <input type="submit">
    </form>
</html>
