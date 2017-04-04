<nav class="c-nav u-position u-top-0 u-width-full u-align-center">
    <div class="c-contain">
        <a href="/" class="c-nav__logo">
            Lawn Party Films
        </a>
        <ul class="c-nav__list u-flexbox">
            <?php foreach($pages->visible() as $p): ?>
            <li class="c-nav__list-item u-flex-expand <?php ecco($p->isOpen(), 'u-linethrough') ?>" id="nav<?php echo $p->title()->html() ?>">
                <a class="u-flexbox u-align-middle u-justify-middle" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</nav>
