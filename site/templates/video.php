<?php snippet('head') ?>

<header class="c-section c--large a-fade-in">
    <div class="c-contain">
        <h1 class="u-regular" style="margin-bottom:1rem;"><?php echo $page->title()->html() ?></h1>
        <h2 class="u-regular u-uppercase u-small-text u-uppercase u-tracked-slightly u-grey"><?php echo $page->artist()->html() ?></h2>
    </div>
</header>

<section class="c-section c--no-padding a-fade-in">
    <div class="+c-contain">

        <?php if($page->VideoLinkYouTube()->isNotEmpty()): ?>

            <div class="c-ratio c--16x9 u-context u-clip u-bg-center u-bg-cover u-width-full js-lazy">

                <div id="js-film-reel">
                    <iframe class="a-fade-in" style="z-index:1001;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay; encrypted-media"
                        src="https://youtube.com/embed/<?php echo $page->VideoLinkYouTube() ?>?rel=0&amp;showinfo=0&amp;autoplay=1&amp;mute=1&amp;hd=1&amp;&iv_load_policy=3&amp;controls=0">
                    </iframe>
                </div>

            </div>

        <?php elseif($page->VideolinkVimeo()->isNotEmpty()): ?>

            <div class="c-ratio c--16x9 u-context u-clip u-bg-center u-bg-cover u-width-full js-lazy">

                <div id="js-film-reel">
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

                  var player = new Vimeo.Player('js-film-reel', options);
                </script>

            </div>

        <?php else: ?>

            <div class="c-ratio c--16x9 u-context u-clip u-bg-center u-bg-cover u-width-full js-lazy"
              <?php if($page->coverImage()->isNotEmpty()): ?>
                  data-src="/content/<?= $page->diruri() ?>/<?php echo $page->coverImage()?>"
              <?php else: ?>
                  data-src="<?php echo $page->image()->url() ?>"
              <?php endif ?>
            >
            </div>

        <?php endif ?>

    </div>
</section>

<section class="c-section">
    <div class="c-contain">

        <div class="u-flexbox--grande-up u-justify-between">

            <div class="c-text-content" style="padding-top:0.5rem; margin-right:5rem; margin-bottom:calc(10vh); white-space:nowrap;">
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent">Film Type</h3>
                    <p><?php echo $page->type() ?></p>
                </div>
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent">Directed By</h3>
                    <p><?php echo $page->director() ?></p>
                </div>
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent">Produced By</h3>
                    <p><?php echo $page->producer() ?></p>
                </div>
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent">Cinematography By</h3>
                    <p><?php echo $page->cinematographer() ?></p>
                </div>
            </div>

            <div style="max-width:640px;">
                <?php echo $page->description()->widont() ?>
            </div>

        </div>

        <ul class="a-fade-in">

            <?php foreach($page->pictures()->yaml() as $image): ?>
                <?php if($img = $page->image($image)): ?>
                    <li>
                        <img src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>" style="width:100%; margin-top:25vh;" />
                    </li>
                <?php endif ?>
            <?php endforeach ?>

        </ul>

    </div>
</section>


<section class="c-section">
    <div class="c-contain">
        <?php snippet('next-link') ?>
    </div>
</section>


<div hidden class="t-<?php echo $page->template() ?>">
    <!-- This element is reserved for template-specific scripts and styles -->
</div>


<?php snippet('footer') ?>



<!--
<section class="c-section c--no-padding">
    <div class="c-video-grid u-flexbox">

        <?php foreach($page->children() as $subpage): ?>
            <a class="c-video-grid__item u-context u-clip u-bg-cover u-bg-center u-white u-align-center u-flexbox u-align-middle u-justify-middle" href="<?php echo $subpage->url() ?>" style="background-image: url('<?php if($image = $subpage->image()): ?><?php echo $image->url() ?><?php endif ?>');">

                <div class="c-video-grid__text u-context u-z-stack u-block u-white u-uppercase u-tracked-slightly u-thick-text-shadow">

                    <h3 class="u-regular">
                        <?php echo $subpage->title()->html() ?>
                    </h3>

                    <h5 class="u-regular u-uppercase u-grey">
                        <?php echo $subpage->artist()->html() ?>
                    </h5>

                </div>

            </a>
        <?php endforeach ?>

    </div>
</section>
-->
