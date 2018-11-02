<?php snippet('head') ?>

<section class="c-section" style="margin-bottom:-4rem;">
    <div class="c-contain">

      <div class="t-home__demo-reel">

        <?php if($page->VideoLinkYouTube()->isNotEmpty()): ?>

            <div class="c-ratio c--16x9 u-context u-clip u-bg-center u-bg-cover u-width-full js-lazy">

                <div id="js-demo-reel">
                    <iframe class="a-fade-in" style="z-index:1001;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay; encrypted-media"
                        src="https://youtube.com/embed/<?php echo $page->VideoLinkYouTube() ?>?rel=0&amp;background=1">
                    </iframe>
                </div>

            </div>

        <?php elseif($page->VideolinkVimeo()->isNotEmpty()): ?>

            <div class="c-ratio c--16x9 u-context u-clip u-bg-center u-bg-cover u-width-full js-lazy">

                <div id="js-demo-reel">
                    <!-- Filled in with a video from the script below-->
                </div>

                <script>
                  <?php readfile('assets/js/player-vimeo.js'); ?>

                  var options = {
                    id: <?php echo $page->VideolinkVimeo() ?>,
                    color: '999',
                    autoplay: true,
                    muted: true,
                    loop: true,
                  };

                  var player = new Vimeo.Player('js-demo-reel', options);
                </script>
            </div>

        <?php else: ?>

            <div class="c-ratio c--16x9 u-context u-clip u-bg-center u-bg-cover u-width-full js-lazy"
              <?php if($page->coverImage()->isNotEmpty()): ?>
                  data-src="content/<?= $page->diruri() ?>/<?php echo $page->coverImage()?>"
              <?php else: ?>
                  data-src="<?php echo $page->image()->url() ?>"
              <?php endif ?>
            >
            </div>

        <?php endif ?>

      </div>

    </div>
</section>

<div hidden class="t-<?php echo $page->template() ?>">
    <style>
        .t-home__demo-reel {
            background:linear-gradient(#000 12.5%, rgba(255,255,255,0.1) 12.5%, rgba(255,255,255,0.1) 87.5%, #000 87.5%);
        }
    </style>
</div>

<?php snippet('footer') ?>
