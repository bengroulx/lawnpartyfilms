<?php snippet('head') ?>

<h1 class="u-text-clip"><?php echo $page->h1() ?></h1>

<div hidden id="template-<?php echo $page->template() ?>">
    <style><?php readfile('assets/css/templates/home.css'); ?></style>
    <script async src="<?php echo url('assets/js/snap.svg.js') ?>"></script>
    <script async src="<?php echo url('assets/js/slider.js') ?>"></script>
</div>

<?php snippet('footer') ?>
