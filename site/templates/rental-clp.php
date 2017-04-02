<?php snippet('head') ?>

<?php snippet('header-custom') ?>

<section class="c-section c--no-padding" role="main">
    <div class="c-grid u-clip" style="margin-bottom:-1rem;">

        <?php foreach($page->children()->visible() as $subpage): ?>
            <a class="t-rental-clp__category u-context u-clip u-bg-black u-bg-cover u-bg-center u-white u-align-center u-flexbox u-align-middle u-justify-middle" href="<?php echo $subpage->url() ?>" style="background-image: url('<?php if($image = $subpage->image()): ?><?php echo $image->url() ?><?php endif ?>');">
                <h3 class="u-regular u-tracked-slightly u-context u-z-stack u-block u-white u-uppercase u-thick-text-shadow"><?php echo $subpage->title()->html() ?></h3>
            </a>
        <?php endforeach ?>

    </div>
</section>

<style>
    .t-rental-clp__category {
        padding: 20em 5em 2em;
        transition: all 0.25s ease-out;
    }
    .t-rental-clp__category:hover {
        padding: 19em 5em 3em;
    }
    .t-rental-clp__category::after {
        content:'';
        background: linear-gradient(to bottom, transparent, transparent, black);
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        display: block;
        transition: all 0.25s ease-out;
        opacity: 0.5;
    }
    .t-rental-clp__category:hover::after {
        opacity: 0.1;
    }
</style>

<?php snippet('footer') ?>
