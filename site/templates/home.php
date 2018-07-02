<?php snippet('head') ?>
<?php snippet('header-custom') ?>



<section class="c-section c--no-padding" role="main" style="height: 100vh;">
    <div class="c-contain" style="height: 100vh;">

        <?php if($video = $page->Videolink()): ?>
        <div class="c-ratio c--16x9 u-gradient u-clip u-bg-grey u-bg-center u-bg-cover u-width-full js-lazy" style="height: 100vh;" ><iframe style="object-fit: cover;position: absolute;width: 100%; height: 100%;" src="https://player.vimeo.com/video/<?php echo $video ?>"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
          <div class="u-position u-left-0 u-bottom-0 u-right-0" style="margin:1rem; z-index:10;">
              <figcaption class="u-position u-bottom-0 u-left-0 u-mono u-regular u-small-text u-white" style="line-height:1;">
                  Watch “<?php echo $page->title()->html() ?>”
              </figcaption>
              <div class="c-play u-context u-float-end u-white u-text-clip">
                  Play This Video
              </div>
            </div>

      <?php else: ?>

      <figure class="c-ratio c--16x9 u-gradient u-clip u-bg-grey u-bg-center u-bg-cover u-width-full js-lazy"
      data-src="<?php echo $page->image()->url() ?>">
      </figure>

      <?php endif ?>




  </div>
</section>




<?php snippet('footer') ?>
