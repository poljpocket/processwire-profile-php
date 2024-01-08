<?php namespace ProcessWire;

/**
 * @var Config $config
 * @var Pages $pages
 * @var User $user
 */

$config->styles->add($config->urls->templates . "styles/main.css?v=$config->themeVersion");

$config->scripts->add($config->urls->templates . "scripts/main.js?v=$config->themeVersion");
