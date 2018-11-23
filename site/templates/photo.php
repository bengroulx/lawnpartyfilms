<?php snippet('GlobalHead') ?>

<section class="c-section c--no-padding" role="main">
    <div class="+c-contain">

        <ul class="a-fade-in js-slick">

            <?php foreach($page->pictures()->yaml() as $image): ?>
                <?php if($img = $page->image($image)): ?>
                    <li>
                        <img class="a-fade-in" src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>" style="width:100%;max-width:none;" />
                    </li>
                <?php endif ?>
            <?php endforeach ?>

        </ul>

    </div>
</section>

<div hidden id="t-<?php echo $page->template() ?>">
    <script><?php readfile('assets/js/jquery.slider.js'); ?></script>
    <script>
      $(document).ready(function(){
        $('.js-slick').slick({
          dots: false,
          infinite: true,
          speed: 600,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1280,
              settings: {
                speed: 300,
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 880,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 1,
              }
            }
          ]
        });
      });
    </script>
</div>

<?php snippet('GlobalFooter') ?>
