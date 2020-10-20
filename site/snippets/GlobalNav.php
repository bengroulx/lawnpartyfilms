<nav class="c-nav u-width-full">
    <div class="c-contain u-flexbox--grande-up u-justify-between u-align-middle u-tracked-slightly">

        <div class="c-nav__title">

            <a href="/">
                <span class="u-uppercase"><?php echo $site->author() ?></span>
                <span class="u-uppercase u-half-transparent"><?php echo $site->role() ?></span>
            </a>

        </div>

        <ul class="c-nav__list u-flexbox">

            <?php foreach ($pages->listed() as $p) : ?>
                <li class="c-nav__list-item u-uppercase <?php echo ($p->isOpen() && 'u-linethrough') ?>" id="nav<?php echo $p->title()->escape() ?>">

                    <a class="u-flexbox u-align-middle u-justify-middle" href="<?php echo $p->url() ?>" data-type="page-transition">
                        <?php echo $p->title()->html() ?>
                    </a>

                </li>
            <?php endforeach ?>

        </ul>

    </div>
</nav>