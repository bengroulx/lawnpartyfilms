<?php snippet('GlobalHead') ?>

<article class="c-contain u-align-center">

    <header>
        <div style="opacity:0;line-height:0;height:0;overflow:hidden;">
            <h1><?php echo $page->title()->html() ?></h1>
            <h2><?php echo $page->artist()->html() ?></h2>
        </div>
    </header>

    <section class="c-section c--no-padding a-fade-in u-context">

        <div class="c-ratio <?php if($page->aspectRatio() == '2x1'): ?>c--2x1<?php elseif($page->aspectRatio() == '3x1'): ?>c--3x1<?php else: ?>c--16x9<?php endif ?> u-context u-z-basic u-clip u-width-full u-bg-center u-bg-cover js-lazy">

            <?php if($page->VideoLinkYouTube()->isNotEmpty()): ?>
                <div class="t-video__youtube" data-embed="<?php echo $page->VideoLinkYouTube() ?>">
                    <div class="t-video__play-button"></div>
                </div>
            <?php elseif($page->VideolinkVimeo()->isNotEmpty()): ?>
                <div class="t-video__vimeo" id="js-vimeo-video">
                    <div class="t-video__play-button"></div>
                    <div class="t-video__vimeo-img u-bg-center u-bg-cover a-fade-in js-lazy"
                        <?php if($page->coverImage()->isNotEmpty()): ?>
                            style="background-image:url('<?= $page->contentURL() ?>/<?php echo $page->coverImage()?>')"
                        <?php else: ?>
                            style="background-image:url('<?php echo $page->image()->resize(1500)->url() ?>');"
                        <?php endif ?>
                      ></div>
                </div>
            <?php else: ?>
            <?php endif ?>

        </div>

    </section>

    <?php if($page->credits1b()->isNotEmpty()): ?>
        <section class="c-section a-fade-in">
            <div class="t-video__credits u-flexbox--grande-up u-align-end">
                <?php if($page->credits1b()->isNotEmpty()): ?>
                    <div class="c-text-content">
                        <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent"><?php echo $page->credits1a()->widont() ?></h3>
                        <p><?php echo $page->credits1b()->widont() ?></p>
                    </div>
                <?php endif ?>
                <?php if($page->credits2b()->isNotEmpty()): ?>
                    <div class="c-text-content">
                        <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent"><?php echo $page->credits2a()->widont() ?></h3>
                        <p><?php echo $page->credits2b()->widont() ?></p>
                    </div>
                <?php endif ?>
                <?php if($page->credits3b()->isNotEmpty()): ?>
                    <div class="c-text-content">
                        <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent"><?php echo $page->credits3a()->widont() ?></h3>
                        <p><?php echo $page->credits3b()->widont() ?></p>
                    </div>
                <?php endif ?>
                <?php if($page->credits4b()->isNotEmpty()): ?>
                    <div class="c-text-content">
                        <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent"><?php echo $page->credits4a()->widont() ?></h3>
                        <p><?php echo $page->credits4b()->widont() ?></p>
                    </div>
              <?php endif ?>
            </div>
        </section>
    <?php endif ?>

    <?php if($page->description()->isNotEmpty()): ?>
        <section class="c-section a-fade-in" style="padding-top:0;">
            <div class="t-video__description c-text-content" style="max-width:700px; margin:0 auto;">
                <?php echo $page->description()->kirbytext()->widont() ?>
            </div>
        </section>
    <?php endif ?>

    <section class="c-section c--no-padding a-fade-in">
        <ul class="t-video__stills">
            <?php foreach($page->pictures()->yaml() as $image): ?>
                <?php if($img = $page->image($image)->resize(1500)): ?>
                    <li style="margin-top:1rem;">
                        <img class="u-block u-width-full" src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>, a <?= $page->type()->html() ?> by Devon Mussett"/>
                    </li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </section>

</article>


<aside class="c-section c--large">
    <div class="c-contain u-flexbox u-justify-middle">
        <?php snippet('VideoPrevNext') ?>
    </div>
</aside>


<div hidden class="t-<?php echo $page->template() ?>">
    <style>
      @media(max-width:40em){
        .t-video__credits {
          padding-top:1rem;
        }
        .t-video__credits > div+div {
          margin-top:1rem;
        }
      }
      @media(min-width:40em){
        .t-video__credits {
          text-align: left;
        }
        .t-video__credits > div+div {
          margin-left: calc(2rem + 2vw);
        }
      }
      .t-video__youtube {
      	overflow: hidden;
      	cursor: pointer;
      }
      .t-video__youtube img,
      .t-video__vimeo-img,
      .t-video__play-button,
      .t-video__play-button:before {
        position: absolute;
        transition: all ease-out 200ms;
    }
      .t-video__youtube img,
      .t-video__vimeo-img {
        top: 50%;
      	left: 0;
        z-index: 10;
        width: 100%;
        height: 100%;
        transition: all linear 300ms;
        transform: translate(0, -50%);
        cursor: pointer;
      }
      .c--2x1 .t-video__youtube img,
      .c--2x1 .t-video__vimeo-img {
        max-height: 78%;
      }
      .c--3x1 .t-video__vimeo-img {
        max-height: 68%;
      }
      .t-video__play-button {
        z-index: 100;
      	width: 5rem;
      	height: 5rem;
        border-radius: 50%;
        opacity: 0.8;
        pointer-events: none;
      }
      .t-video__youtube:hover .t-video__play-button,
      .t-video__vimeo:hover .t-video__play-button {
        transform: scale(1.25) translate3d(-40%, -40%, 0) rotate(-3deg);
        opacity: 1;
      }
      .t-video__play-button:before {
      	content: "";
      	border-style: solid;
      	border-width: 15px 0 15px 26px;
      	border-color: transparent transparent transparent #fff;
      }
      .t-video__play-button,
      .t-video__play-button:before {
      	top: 50%;
      	left: 50%;
      	transform: translate(-50%, -50%);
      }
    </style>
    <script>
      <?php readfile('assets/js/player-vimeo.js'); ?>
    </script>
    <script>
      (function() {

        var youtube = document.querySelectorAll(".t-video__youtube");

        for (var i = 0; i < youtube.length; i++) {

          <?php if($page->coverImage()->isNotEmpty()): ?>
              var source = "/content/<?= $page->diruri() ?>/<?php echo $page->coverImage()?>";
          <?php else: ?>
              var source = "<?php echo $page->image()->url() ?>";
          <?php endif ?>

          var image = new Image();
              image.src = source;
              image.addEventListener("load", function() {
                youtube[ i ].appendChild( image );
              }( i ) );

              youtube[i].addEventListener("click", function() {

                var iframe = document.createElement("iframe");

                    iframe.setAttribute("frameborder", "0");
                    iframe.setAttribute("allowfullscreen", "");
                    iframe.setAttribute("src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&autoplay=1&hd=1&iv_load_policy=3");

                    this.innerHTML = "";
                    this.appendChild( iframe );
              } );
          };
        } )();
      </script>
      <script>
      $(".t-video__vimeo-img").click(function(event) {
        event.preventDefault();
        $(this).fadeOut(1000);
        $(".t-video__play-button").fadeOut(1000);

        var options = {
          id: <?php echo $page->VideolinkVimeo() ?>,
          color: '999',
          autoplay: true,
        };
        var player = new Vimeo.Player('js-vimeo-video', options);

      });
      </script>
</div>


<?php snippet('GlobalFooter') ?>
