<?php

$quote = random_quote();


function random_quote() {

    $quotes = array(
        "Some scientists claim that hydrogen, because it is so plentiful, is the basic building block of the universe. I dispute that. I say there is more stupidity than hydrogen, and that is the basic building block of the universe. - Frank Zappa",
        "A composer is a guy who goes around forcing his will on unsuspecting air molecules, often with the assistance of unsuspecting musicians. - Frank Zappa",
        "You can't be a real country unless you have a beer and an airline. It helps if you have some kind of a football team, or some nuclear weapons, but at the very least you need a beer. - Frank Zappa",
        "Act with courtesy - Otherwise, be polite, but always be kind. - Robert Fripp",
        "A squid eating dough in a polyethylene bag is fast and bulbous. Got me? - Captain Beefheart"
    );

    $quote = $quotes[rand(0,count($quotes)-1)];
    return $quote;

}