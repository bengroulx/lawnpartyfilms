<?php snippet('head') ?>


<article class="c-contain u-align-center">

    <header>
        <div style="opacity:0;line-height:0;height:0;overflow:hidden;">
            <h1><?php echo $page->title()->html() ?></h1>
            <h2><?php echo $page->artist()->html() ?></h2>
        </div>
    </header>

    <section class="c-section c--no-padding a-fade-in u-context">
        <div class="c-ratio c--16x9 u-context u-clip u-bg-center u-bg-cover u-width-full u-z-basic js-lazy" style="background-color:rgba(255,255,255,0.075);">
            <?php if($page->VideoLinkYouTube()->isNotEmpty()): ?>
                <div class="t-video__youtube" data-embed="<?php echo $page->VideoLinkYouTube() ?>">
                    <div class="play-button"></div>
                </div>
            <?php elseif($page->VideolinkVimeo()->isNotEmpty()): ?>
                <iframe class="vimeoXtra" src="http://player.vimeo.com/video/<?php echo $page->VideolinkVimeo() ?>?api=1&background=1&autoplay=1&loop=1" frameborder="0"></iframe>
            <?php else: ?>
                <div class="t-video__youtube" data-embed="<?php echo $page->VideoLinkYouTube() ?>" style="pointer-events:none;">
                </div>
            <?php endif ?>
        </div>
    </section>

    <?php if($page->credits1b()->isNotEmpty()): ?>
        <section class="c-section a-fade-in">
            <div class="t-video__credits u-flexbox--grande-up u-justify-middle u-align-end">
                <?php if($page->credits1b()->isNotEmpty()): ?>
                    <div class="u-flex">
                        <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent"><?php echo $page->credits1a() ?></h3>
                        <p><?php echo $page->credits1b() ?></p>
                    </div>
                <?php endif ?>
                <?php if($page->credits2b()->isNotEmpty()): ?>
                    <div class="u-flex">
                        <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent"><?php echo $page->credits2a() ?></h3>
                        <p><?php echo $page->credits2b() ?></p>
                    </div>
                <?php endif ?>
                <?php if($page->credits3b()->isNotEmpty()): ?>
                    <div class="u-flex">
                        <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent"><?php echo $page->credits3a() ?></h3>
                        <p><?php echo $page->credits3b() ?></p>
                    </div>
                <?php endif ?>
                <?php if($page->credits4b()->isNotEmpty()): ?>
                    <div class="u-flex">
                        <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly u-half-transparent"><?php echo $page->credits4a() ?></h3>
                        <p><?php echo $page->credits4b() ?></p>
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
                <?php if($img = $page->image($image)): ?>
                    <li>
                        <img class="u-block" src="<?= $img->url() ?>" alt="<?= $page->title()->html() ?>, a <?= $page->type()->html() ?> by Devon Mussett" style="width:100%; margin-top:1rem;" />
                    </li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </section>

</article>


<aside class="c-section c--large">
    <div class="c-contain u-flexbox u-justify-middle">
        <?php snippet('next-link') ?>
    </div>
</aside>


<div hidden class="t-<?php echo $page->template() ?>">
  <style>
    @media(max-width:40em){
      .t-video__credits {
        padding-top:2rem;
      }
      .t-video__credits > div+div {
        margin-top:2rem;
      }
    }
    @media(min-width:40em){
      .t-video__credits {

      }
      .t-video__credits > div+div {
      }
    }
    .t-video__youtube {
    	overflow: hidden;
    	cursor: pointer;
    }
    .t-video__youtube img,
    .t-video__youtube .play-button,
    .t-video__youtube .play-button:before {
      cursor: pointer;
      position: absolute;
    }
    .t-video__youtube img {
    	min-width: 100%;
      max-width: none;
      height: 100%;
    	top: 50%;
    	left: 0;
      transition: all linear 300ms;
      transform: translate(0, -50%);
    }
    .t-video__youtube .play-button {
    	width: 90px;
    	height: 60px;
    	z-index: 1;
    	opacity: 0.8;
      transition: all ease-out 200ms;
    }
    .t-video__youtube:hover .play-button {
      transform: scale(1.25) translate3d(-40%, -40%, 0);
      opacity: 1;
    }
    .t-video__youtube .play-button:before {
    	content: "";
    	border-style: solid;
    	border-width: 15px 0 15px 26px;
    	border-color: transparent transparent transparent #fff;
    }
    .t-video__youtube .play-button,
    .t-video__youtube .play-button:before {
    	top: 50%;
    	left: 50%;
    	transform: translate3d(-50%, -50%, 0);
    }
    .vimeoXtra {
      background: black;
    }
  </style>
  <script>
    ( function() {

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
                iframe.setAttribute("src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&autoplay=1&hd=1&iv_load_policy=3&mute=1");

                this.innerHTML = "";
                this.appendChild( iframe );
          } );
      };
    } )();
  </script>
</div>


<?php snippet('footer') ?>
