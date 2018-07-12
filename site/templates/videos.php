<?php snippet('head') ?>

<section class="c-section c--no-padding">
    <div class="+c-contain">

      <div class="c-video-grid u-flexbox a-fade-in">

          <?php foreach($page->children() as $subpage): ?>
              <a class="c-video-grid__item u-context u-clip u-bg-cover u-bg-center u-white u-align-left u-flexbox js-lazy"
                href="<?php echo $subpage->url() ?>"

                <?php if($subpage->coverImage()->isNotEmpty()): ?>
                    data-src="content/<?= $subpage->diruri() ?>/<?php echo $subpage->coverImage()?>"
                <?php else: ?>
                    data-src="<?php echo $subpage->image()->url() ?>"
                <?php endif ?>
              >

                  <div class="c-video-grid__text u-context u-z-stack u-block u-white u-uppercase u-tracked-slightly u-thick-text-shadow">
                      <h3 class="u-regular"><?php echo $subpage->title()->html() ?></h3>
                      <h5 class="u-regular u-half-transparent"><?php echo $subpage->artist()->html() ?></h5>
                  </div>

              </a>
          <?php endforeach ?>

      </div>

    </div>
</section>

<div hidden class="t-<?php echo $page->template() ?>">
    <!-- This element is reserved for template-specific scripts and styles -->
</div>

<?php snippet('footer') ?>
