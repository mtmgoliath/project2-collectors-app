<?php

$db = new PDO('mysql:host=db; dbname=collector_project', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en-GB">
    <header>
        <h1>Life in Death</h1>
        <h2>Curios & Oddities</h2>
    </header>
    <section id="intro">
        <p>Here is a nice gallery of my Taxidermy Collection so far.
        Items are sorted by their Name/ID and include details about their origin,
        as well as an overall rating out of 10.</p>
    </section>
    <section class="collection">
        <div class="collection_item">
            <img src="images/brown-owl.jpeg">
            <h3>Brown Owl</h3>
            <ul>
                <li class="origin">Origin: UK</li>
                <li class="family">Family: Bird</li>
                <li class="preservation_type">Preservation Type: Dry</li>
                <li class="quality">Rating: 3/10</li>
            </ul>
        </div>
        <div class="collection_item">
            <img src="images/fox.jpg">
            <h3>Red Fox</h3>
            <ul>
                <li class="origin">Origin: Siberia</li>
                <li class="family">Family: Mammal</li>
                <li class="preservation_type">Preservation Type: Dry</li>
                <li class="quality">Rating: 7/10</li>
            </ul>
        </div>
        <div class="collection_item">
            <img src="images/elephant-fetus.jpg">
            <h3>Elephant Fetus</h3>
            <ul>
                <li class="origin">Origin: India</li>
                <li class="family">Family: Mammal</li>
                <li class="preservation_type">Preservation Type: Wet</li>
                <li class="quality">Rating: 8/10</li>
            </ul>
        </div>
        <div class="collection_item">
            <img src="images/nile-crocodile.jpg">
            <h3>Crocodile (Nile)</h3>
            <ul>
                <li class="origin">Origin: Egypt</li>
                <li class="family">Family: Reptile</li>
                <li class="preservation_type">Preservation Type: Dry</li>
                <li class="quality">Rating: 9/10</li>
            </ul>
        </div>
        <div class="collection_item">
            <img src="images/magpie.jpeg">
            <h3>Magpie</h3>
            <ul>
                <li class="origin">Origin: U.K.</li>
                <li class="family">Family: Bird</li>
                <li class="preservation_type">Preservation Type: Dry</li>
                <li class="quality">Rating: 5/10</li>
            </ul>
        </div>
        <div class="collection_item">
            <img src="images/rhino-beetle.jpeg">
            <h3>Rhino Beetle</h3>
            <ul>
                <li class="origin">Origin: Indonesia</li>
                <li class="family">Family: Insect</li>
                <li class="preservation_type">Preservation Type: Dry</li>
                <li class="quality">Rating: 10/10</li>
            </ul>
        </div>
        <div class="collection_item">
            <img src="images/jumping-spider.jpeg">
            <h3>Jumping Spider</h3>
            <ul>
                <li class="origin">Origin: Indonesia</li>
                <li class="family">Family: Insect</li>
                <li class="preservation_type">Preservation Type: Resin</li>
                <li class="quality">Rating: 10/10</li>
            </ul>
        </div>
    </section>

</html>
