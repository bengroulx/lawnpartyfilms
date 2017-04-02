<?php snippet('head') ?>

<?php snippet('header-custom') ?>

<section class="c-section c--no-padding">
    <div class="c-text-content u-align-center u-mono u-small-text u-grey" style="margin:auto;max-width:550px;">
        <p><?php echo $page->brief()->markdown()?></p>
    </div>
</section>

<section class="c-section">
    <div class="c-contain">
        <div class="c-grid">
            <div class="c-text-content" style="padding:0 1rem;">
                <?php echo $page->creator1()->kirbytext() ?>
            </div>
            <div class="c-text-content" style="padding:0 1rem;">
                <?php echo $page->creator2()->kirbytext() ?>
            </div>
            <div class="c-text-content" style="padding:0 1rem;">
                <?php echo $page->creator3()->kirbytext() ?>
            </div>
        </div>
    </div>
</section>

<section class="c-section u-context">
    <div class="c-grid">
        <div class="">
            <img src="/content/3-about/lawn-party-films--on-set.1.jpg"
            style="transform:translate(3rem,0) scale(1.2); border:1rem solid white; z-index:3;" class="u-context">
        </div>
        <div class="">
            <img src="/content/3-about/lawn-party-films--on-set.2.jpg"
            style="transform:translate(0,-4rem) scale(1.2); border:1rem solid white; z-index:2;">
        </div>
        <div class="">
            <img src="/content/3-about/lawn-party-films--on-set.3.png"
            style="transform:translate(-3rem,0) scale(1.2); border:1rem solid white; z-index:1;">
        </div>
    </div>
    <a class="t-about__work-link u-block u-bg-white u-black u-uppercase u-mono u-tracked-slightly" href="/work/"
    style="padding:1rem; line-height:1; z-index:4; border:1px dashed black">Watch Our Work &rarr;</a>
</section>

<style>
    .t-about__work-link {
        position: absolute;

        top: 60%;
        left: 30%;
        box-shadow: 0.5rem 0.5rem 0 rgba(0, 0, 0, 0.5);

        transition: all 0.125s ease-out;
    }

    @media (min-width: 40em) {
        .t-about__work-link {
            top: 70%;
        }
    }

    .t-about__work-link:hover {
        margin-left: -0.25rem;
        margin-top: -0.25rem;

        box-shadow: 0.75rem 0.75rem 0 rgba(0, 0, 0, 0.5);
    }
</style>

<?php snippet('footer') ?>
