<?php namespace ProcessWire;

/**
 * @var Page $page
 *
 * @var Pages $pages
 * @var User $user
 * @var Languages $languages
 * @var WireFileTools $files
 * @var Config $config
 * @var Modules $modules
 */

?>

<!DOCTYPE html>
<html lang="<?= $user->language->iso_code ?? 'de' ?>">
<head>
    <meta charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= $config->urls->templates . 'images/favicon-fruitcake-2023.svg' ?>">
    <?php foreach ($config->styles as $file) {
        echo "<link type=\"text/css\" href=\"$file\" rel=\"stylesheet\">";
    } ?>
    <?php if ($page->hasField('seo')):
        echo $page->seo->render();
    else: ?>
        <title><?php echo $page->title; ?> &ndash; <?= __('Fruitcake') ?></title>
        <?php if ($modules->isInstalled('LanguageSupportPageNames')):
            foreach ($languages ?? [] as $language) {
                echo "<link rel=\"alternate\" href=\"{$page->localHttpUrl($language)}\" hreflang=\"$language->subtitle\">";
            }
        else: ?>
            <link rel="alternate" href="<?= $page->httpUrl ?>" hreflang="de">
        <?php endif; ?>
    <?php endif; ?>
</head>
<body>
<div id="header">

</div>
<div id="content">
    <h1><?= $page->title ?></h1>
</div>
<div id="footer">

</div>
<?php foreach ($config->scripts as $file) {
    echo "<script type=\"text/javascript\" src=\"$file\"></script>";
} ?>
</body>
</html>
