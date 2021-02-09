<?php

$db = new PDO('mysql:host=db; dbname=collector_project', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$nameQuery = $db->prepare("SELECT `name` FROM `taxidermy_collection`;");
$nameQuery->execute();

$originQuery = $db->prepare("SELECT `origin` FROM `taxidermy_collection`;");
$originQuery->execute();

$familyQuery = $db->prepare("SELECT `family` FROM `taxidermy_collection`;");
$familyQuery->execute();

$methodQuery = $db->prepare("SELECT `method` FROM `taxidermy_collection`;");
$methodQuery->execute();

$ratingQuery = $db->prepare("SELECT `rating` FROM `taxidermy_collection`;");
$ratingQuery->execute();

$descriptionQuery = $db->prepare("SELECT `description` FROM `taxidermy_collection`;");
$descriptionQuery->execute();

$imageQuery = $db->prepare("SELECT `image` FROM `taxidermy_collection`;");
$imageQuery->execute();

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
        <section class="collection">
            <div class="collection_item">
                <img src="<?//image path
                $imageVariable = $imageQuery->fetch();
                foreach($imageVariable as $value) {
                    echo $value;
                } ?>"  alt="<? //description
                $descriptionVariable = $descriptionQuery->fetch();
                foreach($descriptionVariable as $value) {
                    echo $value;
                } ?>">
                <div class="stats">
                    <h3><? //just the name value
                        $nameVariable = $nameQuery->fetch();
                        foreach($nameVariable as $value) {
                            echo $value;
                        } ?></h3>
                    <ul>
                        <li class="origin">Origin: <? //origin
                            $originVariable = $originQuery->fetch();
                            foreach($originVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="family">Family: <? //family
                            $familyVariable = $familyQuery->fetch();
                            foreach($familyVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="preservation_method"><? //method
                            $methodVariable = $methodQuery->fetch();
                            foreach($methodVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="quality">Rating: <? //rating
                            $ratingVariable = $ratingQuery->fetch();
                            foreach($ratingVariable as $value) {
                                echo $value;
                            } ?>/10</li>
                    </ul>
                </div>
            </div>
            <div class="collection_item">
                <img src="<?//image path
                $imageVariable = $imageQuery->fetch();
                foreach($imageVariable as $value) {
                    echo $value;
                } ?>"  alt="<? //description
                $descriptionVariable = $descriptionQuery->fetch();
                foreach($descriptionVariable as $value) {
                    echo $value;
                } ?>">
                <div class="stats">
                    <h3><? //just the name value
                        $nameVariable = $nameQuery->fetch();
                        foreach($nameVariable as $value) {
                            echo $value;
                        } ?></h3>
                    <ul>
                        <li class="origin">Origin: <? //origin
                            $originVariable = $originQuery->fetch();
                            foreach($originVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="family">Family: <? //family
                            $familyVariable = $familyQuery->fetch();
                            foreach($familyVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="preservation_method"><? //method
                            $methodVariable = $methodQuery->fetch();
                            foreach($methodVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="quality">Rating: <? //rating
                            $ratingVariable = $ratingQuery->fetch();
                            foreach($ratingVariable as $value) {
                                echo $value;
                            } ?>/10</li>
                    </ul>
                </div>
            </div>
            <div class="collection_item">
                <img src="<?//image path
                $imageVariable = $imageQuery->fetch();
                foreach($imageVariable as $value) {
                    echo $value;
                } ?>"  alt="<? //description
                $descriptionVariable = $descriptionQuery->fetch();
                foreach($descriptionVariable as $value) {
                    echo $value;
                } ?>">
                <div class="stats">
                    <h3><? //just the name value
                        $nameVariable = $nameQuery->fetch();
                        foreach($nameVariable as $value) {
                            echo $value;
                        } ?></h3>
                    <ul>
                        <li class="origin">Origin: <? //origin
                            $originVariable = $originQuery->fetch();
                            foreach($originVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="family">Family: <? //family
                            $familyVariable = $familyQuery->fetch();
                            foreach($familyVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="preservation_method"><? //method
                            $methodVariable = $methodQuery->fetch();
                            foreach($methodVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="quality">Rating: <? //rating
                            $ratingVariable = $ratingQuery->fetch();
                            foreach($ratingVariable as $value) {
                                echo $value;
                            } ?>/10</li>
                    </ul>
                </div>
            </div>
            <div class="collection_item">
                <img src="<?//image path
                $imageVariable = $imageQuery->fetch();
                foreach($imageVariable as $value) {
                    echo $value;
                } ?>"  alt="<? //description
                $descriptionVariable = $descriptionQuery->fetch();
                foreach($descriptionVariable as $value) {
                    echo $value;
                } ?>">
                <div class="stats">
                    <h3><? //just the name value
                        $nameVariable = $nameQuery->fetch();
                        foreach($nameVariable as $value) {
                            echo $value;
                        } ?></h3>
                    <ul>
                        <li class="origin">Origin: <? //origin
                            $originVariable = $originQuery->fetch();
                            foreach($originVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="family">Family: <? //family
                            $familyVariable = $familyQuery->fetch();
                            foreach($familyVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="preservation_method"><? //method
                            $methodVariable = $methodQuery->fetch();
                            foreach($methodVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="quality">Rating: <? //rating
                            $ratingVariable = $ratingQuery->fetch();
                            foreach($ratingVariable as $value) {
                                echo $value;
                            } ?>/10</li>
                    </ul>
                </div>
            </div>
            <div class="collection_item">
                <img src="<?//image path
                $imageVariable = $imageQuery->fetch();
                foreach($imageVariable as $value) {
                    echo $value;
                } ?>"  alt="<? //description
                $descriptionVariable = $descriptionQuery->fetch();
                foreach($descriptionVariable as $value) {
                    echo $value;
                } ?>">
                <div class="stats">
                    <h3><? //just the name value
                        $nameVariable = $nameQuery->fetch();
                        foreach($nameVariable as $value) {
                            echo $value;
                        } ?></h3>
                    <ul>
                        <li class="origin">Origin: <? //origin
                            $originVariable = $originQuery->fetch();
                            foreach($originVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="family">Family: <? //family
                            $familyVariable = $familyQuery->fetch();
                            foreach($familyVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="preservation_method"><? //method
                            $methodVariable = $methodQuery->fetch();
                            foreach($methodVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="quality">Rating: <? //rating
                            $ratingVariable = $ratingQuery->fetch();
                            foreach($ratingVariable as $value) {
                                echo $value;
                            } ?>/10</li>
                    </ul>
                </div>
            </div>
            <div class="collection_item">
                <img src="<?//image path
                $imageVariable = $imageQuery->fetch();
                foreach($imageVariable as $value) {
                    echo $value;
                } ?>"  alt="<? //description
                $descriptionVariable = $descriptionQuery->fetch();
                foreach($descriptionVariable as $value) {
                    echo $value;
                } ?>">
                <div class="stats">
                    <h3><? //just the name value
                        $nameVariable = $nameQuery->fetch();
                        foreach($nameVariable as $value) {
                            echo $value;
                        } ?></h3>
                    <ul>
                        <li class="origin">Origin: <? //origin
                            $originVariable = $originQuery->fetch();
                            foreach($originVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="family">Family: <? //family
                            $familyVariable = $familyQuery->fetch();
                            foreach($familyVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="preservation_method"><? //method
                            $methodVariable = $methodQuery->fetch();
                            foreach($methodVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="quality">Rating: <? //rating
                            $ratingVariable = $ratingQuery->fetch();
                            foreach($ratingVariable as $value) {
                                echo $value;
                            } ?>/10</li>
                    </ul>
                </div>
            </div>
            <div class="collection_item">
                <img src="<?//image path
                $imageVariable = $imageQuery->fetch();
                foreach($imageVariable as $value) {
                    echo $value;
                } ?>"  alt="<? //description
                $descriptionVariable = $descriptionQuery->fetch();
                foreach($descriptionVariable as $value) {
                    echo $value;
                } ?>">
                <div class="stats">
                    <h3><? //just the name value
                        $nameVariable = $nameQuery->fetch();
                        foreach($nameVariable as $value) {
                            echo $value;
                        } ?></h3>
                    <ul>
                        <li class="origin">Origin: <? //origin
                            $originVariable = $originQuery->fetch();
                            foreach($originVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="family">Family: <? //family
                            $familyVariable = $familyQuery->fetch();
                            foreach($familyVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="preservation_method"><? //method
                            $methodVariable = $methodQuery->fetch();
                            foreach($methodVariable as $value) {
                                echo $value;
                            } ?></li>
                        <li class="quality">Rating: <? //rating
                            $ratingVariable = $ratingQuery->fetch();
                            foreach($ratingVariable as $value) {
                                echo $value;
                            } ?>/10</li>
                    </ul>
                </div>
            </div>

        </section>
    </body>

</html>
