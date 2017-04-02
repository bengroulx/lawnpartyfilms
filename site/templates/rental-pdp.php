<?php snippet('head') ?>

<?php snippet('header-title') ?>

<section class="c-section c--no-padding" role="main">
    <div class="c-contain">
        <article class="c-grid">

            <div style="">
                <figure class="u-align-center" style="border:1px solid #ccc; padding:1rem; min-height:10em;">
                    <?php if($image = $page->image()): ?>
                        <img class="u-inline-block" src="<?php echo $image->url() ?>" alt="">
                    <?php endif ?>
                </figure>
            </div>

            <div class="c-text-content">
                <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">Description:</h3>
                <?php echo $page->description()->markdown() ?>
            </div>

            <div class="c-text-content">
                <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">Specs:</h3>
                <div class="c-text-content u-mono u-small-text ">
                    <?php echo $page->specs()->markdown() ?>
                    <a href="">Official Website &rarr;</a>
                </div>
                <p class="u-bold">
                    <?php echo $page->text()->markdown() ?>
                    $<?php echo $page->costPrice()->raw() ?> / <?php echo $page->costTime()->raw() ?>
                </p>

                <button class="c-button js-cta-trigger u-tracked-slightly" id="modal-trigger">Rent This Item</button>
            </div>

        </article>
    </div>
</section>

<section class="c-section">
    <div class="c-contain">

        <div class="c-text-content">
            <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">
                You might also like:
            </h3>

            <div class="u-flexbox" style="line-height:1;">

                <?php if($page->hasPrevVisible()): ?>
                    <a class="u-block u-width-half" style="border:1px solid #ccc; padding:1rem; margin-right:1rem;" href="<?php echo $page->prevVisible()->url() ?>" >
                        <h3 class="u-regular" style="margin-bottom:1rem;">
                            <?php echo $page->prevVisible()->title()->html() ?>
                        </h3>
                        <div class="u-clip">
                            <p class="u-float-start u-mono u-small-text u-grey">
                                $<?php echo $page->prevVisible()->costPrice()->raw() ?>
                                / <?php echo $page->prevVisible()->costTime()->raw() ?>
                            </p>
                            <div class="u-float-end">
                                &rarr;
                            </div>
                        </div>
                    </a>
                <?php endif ?>

                <?php if($page->hasNextVisible()): ?>
                    <a class="u-block u-width-half" style="border:1px solid #ccc; padding:1rem;" href="<?php echo $page->nextVisible()->url() ?>">
                        <h3 class="u-regular" style="margin-bottom:1rem;">
                            <?php echo $page->nextVisible()->title()->html() ?>
                        </h3>
                        <div class="u-clip">
                            <p class="u-float-start u-mono u-small-text u-grey">
                                $<?php echo $page->nextVisible()->costPrice()->raw() ?>
                                / <?php echo $page->nextVisible()->costTime()->raw() ?>
                            </p>
                            <div class="u-float-end">
                                &rarr;
                            </div>
                        </div>
                    </a>
                <?php endif ?>

            </div>

        </div>

    </div>
</section>

<div class="c-modal u-white" id="modal-contact">
    <span class="c-modal__close u-position u-bold">&times;</span>
    <div class="c-text-content c-contain">
        <p class="u-mono">
            Thanks for your interest. Please <a href="tel:1-604-813-0496">call us</a> or <a href="/contact/">send a message</a> to book the <?php echo $page->title()->raw() ?>.
        </p>
    </div>
</div>

<script>
    var modal = document.getElementById('modal-contact');
    var span = document.getElementsByClassName('c-modal__close')[0];
    var btn = document.getElementById('modal-trigger');

    btn.onclick = function() {
        modal.style.display = "flex";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<?php snippet('footer') ?>
