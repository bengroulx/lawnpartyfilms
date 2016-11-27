<?php snippet('head') ?>

<div class="u-text-clip">
    <h2><?php echo $page->h2()->html() ?></h2>
    <p><?php echo $page->brief()->html()?></p>
</div>

<section class="c-section t-about__bios">
    <div class="c-contain">
        <div class="c-grid u-flexbox u-flex-wrap">
            <div class="c-text-content u-flex-expand">
                <p><?php echo $page->creator1()->kirbytext() ?></p>
            </div>
            <div class="c-text-content u-flex-expand">
                <p><?php echo $page->creator2()->kirbytext() ?></p>
            </div>
            <div class="c-text-content u-flex-expand">
                <p><?php echo $page->creator3()->kirbytext() ?></p>
            </div>
        </div>
    </div>
</section>

<div hidden id="template-<?php echo $page->template() ?>">
    <style><?php readfile('assets/css/about.css'); ?></style>
</div>

<?php snippet('footer') ?>
