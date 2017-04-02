<?php function sanitize_output($buffer) {$search = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s');$replace = array('>','<','\\1'); $buffer = preg_replace($search, $replace, $buffer); return $buffer; } ob_start("sanitize_output"); ?>
<!DOCTYPE html>
<!--[if IE 7]> <html lang="en-ca" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]> <html lang="en-ca" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en-ca" class="no-js"><!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $page->metatitle()->html() ?> | <?php echo $site->title()->html() ?></title>
    <meta name="description" content="<?php echo $page->metadesc()->html() ?>"/>
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>"/>
    <meta name="author" content="<?php echo $site->title()->html() ?>"/>

    <!--[if IEMobile]><meta http-equiv="cleartype" content="on"><![endif]-->

    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script async src="<?php echo url('assets/js/jquery.mobile.custom.js') ?>"></script>

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
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $page->url() ?>" />
    <meta property="og:title" content="<?php echo $page->metatitle()->bool() ?>" />
    <meta property="og:author" content="https://facebook.com/LawnPartyFilms/" />
    <meta property="og:site_name" content="Lawn Party Films" />
    <meta property="og:description" content="<?php echo $page->metadesc()->html() ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="<?php echo $page->url() ?>" />
    <meta name="twitter:title" content="<?php echo $page->metatitle()->bool() ?> | <?php echo $site->title()->html() ?>" />
    <meta name="twitter:creator" content="@devonmussett" />
    <meta name="twitter:site" content="@devonmussett" />
    <meta name="twitter:description" content="<?php echo $page->metadesc()->html() ?>" />

</head>

<body class="t-<?php echo $page->template() ?>">

    <?php snippet('menu') ?>
