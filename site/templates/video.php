<?php snippet('head') ?>

<header class="c-section c--large u-align-center">
    <h1 class="u-regular" style="margin-bottom:1rem;"><?php echo $page->title()->html() ?></h1>
    <h2 class="u-regular u-mono u-small-text u-uppercase u-tracked-slightly u-grey"><?php echo $page->artist()->html() ?></h2>
</header>

<section class="c-section c--no-padding" role="main">
    <div class="c-contain">

        <?php if($video = $page->VideolinkA()): ?>
        <div class="c-ratio c--16x9 u-gradient u-clip u-bg-grey u-bg-center u-bg-cover u-width-full js-lazy"
          data-src="<?php echo $page->image()->url() ?>"><iframe src="https://www.youtube.com/embed/<?php echo $video ?>"></iframe>

            <div class="u-position u-left-0 u-bottom-0 u-right-0" style="margin:1rem; z-index:10;">
                <figcaption class="u-position u-bottom-0 u-left-0 u-mono u-regular u-small-text u-white" style="line-height:1;">
                    Watch “<?php echo $page->title()->html() ?>”
                </figcaption>
                <div class="c-play u-context u-float-end u-white u-text-clip">
                    Play This Video
                </div>
            </div>

</div>

<?php elseif($video = $page->VideolinkB()): ?>
<div class="c-ratio c--16x9 u-gradient u-clip u-bg-grey u-bg-center u-bg-cover u-width-full js-lazy"
    data-src="<?php echo $page->image()->url() ?>"><iframe src="https://vimeo.com/<?php echo $video ?>"></iframe>

      <div class="u-position u-left-0 u-bottom-0 u-right-0" style="margin:1rem; z-index:10;">
          <figcaption class="u-position u-bottom-0 u-left-0 u-mono u-regular u-small-text u-white" style="line-height:1;">
              Watch “<?php echo $page->title()->html() ?>”
          </figcaption>
          <div class="c-play u-context u-float-end u-white u-text-clip">
              Play This Video
          </div>
      </div>

  </div>

        <?php else: ?>

        <figure class="c-ratio c--16x9 u-gradient u-clip u-bg-grey u-bg-center u-bg-cover u-width-full js-lazy"
        data-src="<?php echo $page->image()->url() ?>">
        </figure>

        <?php endif ?>

    </div>
</section>

<section class="c-section">
    <div class="c-contain">

        <div class="c-grid">

            <div class="c-text-content" style="margin-right:2rem; white-space:nowrap;">
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">Film Type</h3>
                    <p><?php echo $page->type() ?></p>
                </div>
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">Directed By</h3>
                    <p><?php echo $page->director() ?></p>
                </div>
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">Produced By</h3>
                    <p><?php echo $page->producer() ?></p>
                </div>
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">Cinematography By</h3>
                    <p><?php echo $page->cinematographer() ?></p>
                </div>
            </div>

            <div class="u-mono u-small-text">
                <?php echo $page->description()->markdown() ?>
            </div>

        </div>

    </div>
</section>

<section class="c-section c--no-padding u-bg-gradient">
    <div class="c-video-grid u-flexbox">

        <?php foreach($page->children() as $subpage): ?>
            <a class="c-video-grid__item u-context u-clip u-bg-cover u-bg-center u-white u-align-center u-flexbox u-align-middle u-justify-middle" href="<?php echo $subpage->url() ?>" style="background-image: url('<?php if($image = $subpage->image()): ?><?php echo $image->url() ?><?php endif ?>');">
                <div class="c-video-grid__text u-context u-z-stack u-block u-white u-uppercase u-tracked-slightly u-thick-text-shadow">
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
