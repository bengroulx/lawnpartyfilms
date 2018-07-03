<?php snippet('head') ?>

<?php snippet('header-custom') ?>

<section class="c-section c--no-padding" role="main">
    <div class="c-grid u-clip" style="margin-bottom:-1rem;">

        <?php foreach($page->children()->visible() as $subpage): ?>
            <a class="t-rental-clp__category u-gradient u-clip u-bg-grey u-bg-cover u-bg-center u-white u-align-center u-flexbox u-align-middle u-justify-middle js-lazy" href="<?php echo $subpage->url() ?>"
            data-src="<?php if($image = $subpage->image()): ?><?php echo $image->url() ?><?php endif ?>">
                <h3 class="u-regular u-tracked-slightly u-context u-z-stack u-block u-white u-uppercase u-thick-text-shadow"><?php echo $subpage->title()->html() ?></h3>
            </a>
        <?php endforeach ?>

    </div>
</section>

<?php snippet('footer') ?>
