<?php snippet('head') ?>

<?php snippet('header-custom') ?>

<section class="c-section c--no-padding">
    <div class="c-text-content u-align-center u-mono u-small-text u-grey" style="margin:auto;max-width:550px;">
        <p><?php echo $page->brief()->html()?></p>
    </div>
</section>

<section class="c-section">
    <div class="c-contain">
        <div class="c-grid">
            <div class="c-text-content" style="padding:0 1rem;">
                <?php echo $page->creator1()->kirbytext() ?>
            </div>
            <div class="c-text-content" style="padding:0 1rem;">
                <?php echo $page->creator2()->kirbytext() ?>
            </div>
            <div class="c-text-content" style="padding:0 1rem;">
                <?php echo $page->creator3()->kirbytext() ?>
            </div>
        </div>
    </div>
</section>

<div hidden id="template-<?php echo $page->template() ?>">
    <style><?php readfile('assets/css/templates/about.css'); ?></style>
</div>

<?php snippet('footer') ?>
