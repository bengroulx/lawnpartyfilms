<?php snippet('head') ?>

<?php snippet('header-title') ?>

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

<?php snippet('footer') ?>
