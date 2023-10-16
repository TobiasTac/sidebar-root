<?php
$minify = filter_input(INPUT_GET, "minify", FILTER_VALIDATE_BOOLEAN);

if ($_SERVER["SERVER_NAME"] == 'localhost' || $minify) {

  $minCSS = new \MatthiasMullie\Minify\CSS();
  $cssDir = scandir(dirname(__DIR__, 1) . "/assets/css/");
  foreach ($cssDir as $cssItem) {
    $cssFile = dirname(__DIR__, 1) . "/assets/css/{$cssItem}";

    if (is_file($cssFile) && pathinfo($cssFile)["extension"] == "css") {
      $minCSS->add($cssFile);
    }
  }
  $minCSS->minify(dirname(__DIR__, 1) . "/assets/style.min.css");


  $minJS = new \MatthiasMullie\Minify\JS();
  $minJS->add(dirname(__DIR__, 1) . "/assets/js/script.js");
  $minJS->minify(dirname(__DIR__, 1) . "/assets/scripts.min.js");
}
