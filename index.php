<?php require("quote-logic.php"); ?>
<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project 1 - Phil Plencner</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="body-container">
            <h1>Phil Plencner</h1>
            <div id="image-container" class="div-inner">
                <img src="/images/phil.jpg" alt="Phil wearing Cubs hat" width="200">
            </div>
            <div id="about-container" class="div-inner">
                <h2>About Phil!</h2>
                <p>
                    Hello. My name is Phil Plencner. I'm currently in Baltimore, MD, but I am moving to the Boston/Cambridge area early this year.
                </p>
                <p>
                    I recently started working for Harvard Library, as part of their Digital Strategies and Innovation team.
                </p>
                <p>
                    Specifically this means I'm working on their Digital Collections as well as the main Harvard Library website: <a href="https://library.harvard.edu">https://library.harvard.edu</a>. This site is built (mostly) in PHP using the Drupal framework.
                </p>
            </div>
            <div id="quote-container" class="div-inner">
                <h2>Awesome Quotes!</h2>
                <p>
                    <?=$quote ?>
                </p>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
