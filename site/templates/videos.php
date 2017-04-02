<?php snippet('head') ?>

<?php snippet('header-custom') ?>

<section class="c-section c--no-padding u-bg-gradient">
    <div class="c-video-grid u-flexbox">
        <?php foreach($page->children() as $subpage): ?>
            <a class="c-video-grid__item u-context u-clip u-bg-black u-bg-cover u-bg-center u-white u-align-center u-flexbox u-align-middle u-justify-middle" href="<?php echo $subpage->url() ?>" style="background-image: url('<?php if($image = $subpage->image()): ?><?php echo $image->url() ?><?php endif ?>');">
                <div class="c-video-grid__text u-context u-z-stack u-block u-white u-uppercase  u-tracked-slightly u-thick-text-shadow">
                    <h3 class="u-regular">
                        <?php echo $subpage->title()->html() ?>
                    </h3>
                    <h5 class="u-regular u-mono u-grey">
                        <?php echo $subpage->artist()->html() ?>
                    </h5>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</section>

<div hidden id="template-<?php echo $page->template() ?>">
    <style><?php readfile('assets/css/templates/videos.css'); ?></style>
    <script src="<?php echo url('assets/js/magnific.js') ?>"></script>
</div>

<?php snippet('footer') ?>
