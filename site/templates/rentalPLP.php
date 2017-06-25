<?php snippet('head') ?>

<?php snippet('header-custom') ?>

<section class="c-section c--no-padding" role="main">
    <div class="c-contain">

        <div class="c-text-content" style="line-height:1;">
            <?php foreach($page->children()->visible() as $subpage): ?>
                <a class="u-block" style="border:1px solid #ccc; padding:2rem;" href="<?php echo $subpage->url() ?>">
                    <h3 class="u-regular" style="margin-bottom:1rem;">
                        <?php echo $subpage->title()->html() ?>
                    </h3>

                    <div class="u-clip">
                        <p class="u-float-start u-mono u-small-text u-grey">
                            $<?php echo $subpage->costPrice()->raw() ?>
                            / <?php echo $subpage->costTime()->raw() ?>
                        </p>
                        <div class="u-float-end">
                            &rarr;
                        </div>
                    </div>

                </a>
            <?php endforeach ?>
        </div>

    </div>
</section>

<section class="c-section">
    <div class="c-contain">

        <div class="c-grid">
            <?php $items = false;
                if($root = $pages->findOpen()) { $items = $root->children()->visible(); }
                if($items && $items->count() > 0): ?>
                <?php foreach($items as $item): ?>
                    <div class="" style="padding:1rem">
                        <a class="t-rental-plp__category u-context u-clip u-bg-grey u-bg-cover u-bg-center u-white u-align-center u-flexbox u-align-middle u-justify-middle js-lazy" href="<?php echo $item->url() ?>" data-src="<?php if($image = $item->image()): ?><?php echo $image->url() ?><?php endif ?>">
                            <h3 class="u-regular u-tracked-slightly u-context u-z-stack u-block u-white u-uppercase u-thick-text-shadow"><?php echo $item->title()->html() ?></h3>
                        </a>
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>

    </div>
</section>

<?php snippet('footer') ?>
