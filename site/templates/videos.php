<?php snippet('head') ?>

<div class="u-text-clip">
    <?php echo $page->introduction()->kirbytext() ?>
</div>

<section class="c-section c--no-padding u-bg-gradient">
    <div class="c-video-grid u-flexbox">
        <?php foreach($page->children() as $subpage): ?>
            <a class="c-video-grid__item u-context u-clip u-bg-black u-bg-cover u-bg-center u-white u-align-center u-flexbox u-align-middle u-justify-middle js-magnific" href="<?php echo $subpage->videoLink() ?>" style="background-image: url('<?php if($image = $subpage->image()): ?><?php echo $image->url() ?><?php endif ?>');">
                <div class="c-video-grid__text u-context u-z-stack u-block u-white u-uppercase u-thick-text-shadow">
                    <h3 class="u-regular u-tracked-slightly"><?php echo $subpage->title()->html() ?></h3>
                    <h5 class="u-bold u-tracked-loose u-half-transparent"><?php echo $subpage->artist()->html() ?></h5>
                </div>
            </a>
        <?php endforeach ?>
    </div>
</section>

<div hidden id="template-<?php echo $page->template() ?>">
    <style><?php readfile('assets/css/videos.css'); ?></style>
    <script src="<?php echo url('assets/js/magnific.js') ?>"></script>
</div>

<?php snippet('footer') ?>
