<?php snippet('GlobalHead') ?>

<section class="c-section c--no-padding" role="main">
    <div class="c-contain">

        <div class="c-grid">

            <div class="c-text-content">
                <figure>

                    <div style="background-color:#111;">
                        <div class="u-context u-clip u-bg-center u-bg-cover u-width-full js-lazy"
                        data-src="content/<?= $page->diruri() ?>/<?php echo $page->coverImage()?>"
                        style="padding-bottom:100%; margin-bottom:1rem;">
                        </div>
                    </div>

                    <div class="u-half-transparent a-fade-in">
                        <?php echo $page->column1()->kirbytext()->widont() ?>
                    </div>

                </figure>
            </div>

            <div class="c-text-content a-fade-in">
                <?php echo $page->column2()->kirbytext()->widont() ?>
            </div>

            <div class="c-text-content a-fade-in">
                <?php echo $page->column3()->kirbytext()->widont() ?>
            </div>

        </div>

    </div>
</section>

<div hidden class="t-<?php echo $page->template() ?>">
    <!-- This element is reserved for template-specific scripts and styles -->
</div>

<?php snippet('GlobalFooter') ?>
