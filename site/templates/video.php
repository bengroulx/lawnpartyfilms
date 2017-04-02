<?php snippet('head') ?>

<header class="c-section c--large u-align-center">
    <h1 class="u-regular" style="margin-bottom:1rem;"><?php echo $page->title()->html() ?></h1>
    <h2 class="u-regular u-mono u-small-text u-uppercase u-tracked-slightly u-grey"><?php echo $page->artist()->html() ?></h2>
</header>

<section class="c-section c--no-padding" role="main">
    <div class="c-contain">

        <figure class="c-ratio c--16x9 u-clip u-context u-bg-black">
            <?php if($video = $page->videoLink()): ?>
                <?php echo youtube($video, 1280, 720) ?>
            <?php endif ?>
        </figure>

    </div>
</section>

<section class="c-section">
    <div class="c-contain">

        <div class="c-grid">

            <div class="c-text-content" style="margin-right:2rem; white-space:nowrap;">
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">Film Type</h3>
                    <p><?php echo $page->type() ?></p>
                </div>
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">Directed By</h3>
                    <p><?php echo $page->director() ?></p>
                </div>
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">Produced By</h3>
                    <p><?php echo $page->producer() ?></p>
                </div>
                <div>
                    <h3 class="u-regular u-uppercase u-small-text u-tracked-slightly">Cinematography By</h3>
                    <p><?php echo $page->cinematographer() ?></p>
                </div>
            </div>

            <div class="u-mono u-small-text">
                <?php echo $page->description()->markdown() ?>
            </div>

        </div>

    </div>
</section>

<style>
    .c-ratio.c--16x9 {
        height: 0;
        padding-bottom: 56.25%;
    }

    .c-ratio iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;

        width: 100%;
        height: 100%;
    }
</style>

<?php snippet('footer') ?>
