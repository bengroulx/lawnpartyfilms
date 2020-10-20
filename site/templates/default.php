<?php snippet('GlobalHead') ?>

<header class="c-section c--large">
    <div class="c-contain">

        <h1 class="u-regular">
            <?php echo $page->title()->html() ?>
        </h1>

    </div>
</header>

<section class="c-section" role="main">
    <div class="c-contain c-text-content">

        <div class="c-text-content">
            <?php echo $page->text()->kirbytext() ?>
        </div>

    </div>
</section>

<div hidden class="t-<?php echo $page->template() ?>">
    <!-- This element is reserved for template-specific scripts and styles -->
</div>

<?php snippet('GlobalFooter') ?>
