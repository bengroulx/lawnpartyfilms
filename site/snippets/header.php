<?php snippet('menu') ?>

<?php if($page->isHomePage()): ?>
    <?php snippet('homeSlider') ?>
<?php else: ?>
    <header class="c-section c--header c--large u-bg-black u-bg-cover u-bg-center" style="background-image: url('<?php echo $page->url() ?>/<?php echo $page->headerImage()->html() ?>');">
        <h1 class="u-regular u-white u-align-center u-thick-text-shadow"><?php echo $page->h1()->html() ?></h1>
    </header>
<?php endif ?>
