<?php function sanitize_output($buffer) {$search = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s');$replace = array('>','<','\\1'); $buffer = preg_replace($search, $replace, $buffer); return $buffer; } ob_start("sanitize_output"); ?>
<!DOCTYPE html>
<!--[if IE 7]> <html lang="en-ca" class="lt-ie9 lt-ie8"/><![endif]-->
<!--[if IE 8]> <html lang="en-ca" class="lt-ie9"/><![endif]-->
<!--[if gt IE 8]><!--><html lang="en-ca" class="no-js"/><!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!--[if IEMobile]><meta http-equiv="cleartype" content="on"/><![endif]-->

    <script><?php readfile('assets/js/jquery.js'); ?></script>
    <script><?php readfile('assets/js/jquery.lazy.js'); ?></script>

    <?php snippet('scss') ?>

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Lawn Party Films" />
    <link rel="icon" sizes="192x192" href="<?php echo url('assets/icons/touch-icon-192.png') ?>" />
    <link rel="icon" sizes="128x128" href="<?php echo url('assets/icons/touch-icon-128.png') ?>" />
    <link rel="icon" sizes="32x32" href="<?php echo url('assets/icons/favicon-32.png') ?>" />
    <link rel="icon" sizes="16x16" href="<?php echo url('assets/icons/favicon-16.png') ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo url('assets/icons/touch-icon-180.png') ?>" />
    <link rel="apple-touch-icon" sizes="128x128" href="<?php echo url('assets/icons/touch-icon-128.png') ?>" />
    <link rel="mask-icon" href="<?php echo url('assets/icons/safari-pinned-tab.svg') ?>" color="#000" />
    <link rel="manifest" href="/manifest.json" />
    <meta name="msapplication-TileColor" content="#000" />
    <meta name="msapplication-TileImage" content="<?php echo url('assets/icons/touch-icon-144.png') ?>" />

    <title><?php echo $page->metatitle()->html() ?> | <?php echo $site->title()->html() ?></title>
    <meta name="description" content="<?php echo $page->metadesc()->html() ?>"/>
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>"/>
    <meta name="author" content="<?php echo $site->title()->html() ?>"/>

    <!-- Search Engine -->
    <title><?php echo $page->metatitle()->html() ?> | <?php echo $site->title()->html() ?></title>
    <meta name="description" content="<?php echo $page->metadesc()->html() ?>"/>
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>"/>
    <meta name="author" content="<?php echo $site->title()->html() ?>"/>
    <meta name="image" content="XXXimage"/>
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="<?php echo $page->metatitle()->html() ?>"/>
    <meta itemprop="description" content="<?php echo $page->metadesc()->html() ?>"/>
    <meta itemprop="image" content="XXXimage"/>
    <!-- Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="<?php echo $page->metatitle()->html() ?>"/>
    <meta name="twitter:description" content="<?php echo $page->metadesc()->html() ?>"/>
    <meta name="twitter:site" content="devonmussett"/>
    <meta name="twitter:creator" content="devonmussett"/>
    <meta name="twitter:image:src" content="XXXimage"/>
    <meta name="twitter:player" content="XXXvideo"/>
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="<?php echo $page->metatitle()->html() ?>"/>
    <meta name="og:description" content="<?php echo $page->metadesc()->html() ?>"/>
    <meta name="og:image" content="XXXimage"/>
    <meta name="og:url" content="<?php echo $page->url() ?>"/>
    <meta name="og:locale" content="en_CA"/>
    <meta name="og:video" content="XXXvideo"/>
    <meta name="og:type" content="website"/>

</head>

<body class="t-<?php echo $page->template() ?>"/>

<!-- OPEN MAIN :: closed in footer.php -->
<main>

    <div class="js-replace-content u-clip"/>

        <?php snippet('menu') ?>
