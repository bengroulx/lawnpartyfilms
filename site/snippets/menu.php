<nav class="c-nav u-position u-top-0 u-left-0 u-right-0 u-width-full u-align-center">
    <div class="c-contain">

        <a class="c-nav__logo u-inline-block u-bg-black u-circle u-text-clip u-bg-center u-bg-cover" href="/" style="margin-top:1rem;" data-type="page-transition">
            Lawn Party Films
        </a>

        <ul class="c-nav__list u-flexbox">
            <?php foreach($pages->visible() as $p): ?>
            <li class="c-nav__list-item u-flex-expand <?php ecco($p->isOpen(), 'u-linethrough') ?>" id="nav<?php echo $p->title()->html() ?>">
                <a class="u-flexbox u-align-middle u-justify-middle" href="<?php echo $p->url() ?>" data-type="page-transition">
                    <?php echo $p->title()->html() ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>

    </div>
</nav>
