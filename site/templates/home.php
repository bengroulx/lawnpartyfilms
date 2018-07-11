<?php snippet('head') ?>

<section class="c-section c--no-padding">
    <div class="+c-contain" style="background-color:rgba(255,255,255,0.1);">

        <?php if($page->VideoLinkYouTube()->isNotEmpty()): ?>

            <div class="c-ratio c--16x9 u-context u-clip u-bg-center u-bg-cover u-width-full js-lazy">

                <div id="js-demo-reel">
                    <iframe class="a-fade-in" style="z-index:1001;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay; encrypted-media"
                        src="https://youtube.com/embed/<?php echo $page->VideoLinkYouTube() ?>?rel=0&amp;showinfo=0&amp;autoplay=1&amp;mute=1&amp;hd=1&amp;&iv_load_policy=3&amp;controls=0">
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
</section>

<?php snippet('footer') ?>
