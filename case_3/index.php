<?php declare(strict_types=1);

require 'WebContent.php';

$webContent = array(
    array('Type' => 'Article', 'Breaking News' => true, 'Title' => 'Web3 is there', 'Text' => 'They just announced web3, the succesor of web2'),
    array('Type' => 'Article', 'Breaking News' => false, 'Title' => 'Rumours that Apple will introduce a 15 inch macbook air', 'Text' => 'It will also come with a new m3 chip'),
    array('Type' => 'Ad', 'Title' => '50 procent off gift baskets', 'Text' => 'Get now a discount of fifty procent on a gift basket with fruit and wine'),
    array('Type' => 'Vacancy', 'Title' => 'Job alert: freelance php developer', 'Text' => 'You will be responsible to rewrite all the websites made with the older php 5.3 version')
);

foreach($webContent as $content) {
    $webContent = new WebContent($content['Title'], $content['Text']);
    switch ($content['Type']) {
        case 'Article':
            $webContent->showArticle($content['Breaking News']);
            break;
        case 'Ad':
            $webContent->showAd();
            break;
        case 'Vacancy':
            $webContent->showVacancy();
            break;
        default:
            echo "Nothing found";
    }
}