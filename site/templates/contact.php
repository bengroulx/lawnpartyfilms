<?php snippet('head') ?>

<section class="c-section u-bg-gradient">
    <div class="c-contain">
        <div class="c-grid u-flexbox u-flex-wrap">

            <div class="u-flex-expand c-text-content">
                <?php echo $page->text()->kirbytext() ?>
                <div style="height:1rem;"></div>
            </div>
            <div class="u-flex t-contact__form-container">
                <form class="c-form">
                    <div class="c-form__row">
                        <label class="u-block" for="_formName">Your name</label>
                        <input id="_formName" type="text" name="name" placeholder="e.g. Jane Smith" />
                    </div>
                    <div class="c-form__row">
                        <label class="u-block" for="_formEmail">Your email</label>
                        <input id="_formEmail" type="text" name="email" placeholder="e.g. name@email.com" />
                    </div>
                    <div class="c-form__row">
                        <label class="u-block" for="_formTopic">Topic/Subject</label>
                        <input id="_formTopic" type="text" name="topic" placeholder="e.g. Film Work" />
                    </div>
                    <div class="c-form__row">
                        <label class="u-block" for="_formMessage">Your message</label>
                        <textarea id="_formMessage" rows="11" placeholder="e.g. We’d love to work with you…"></textarea>
                    </div>
                    <div class="c-form__row">
                        <input id="_formButton" type="button" name="Submit" value="Submit" class="c-form__buttton" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<div hidden id="template-<?php echo $page->template() ?>">
    <style><?php readfile('assets/css/templates/contact.css'); ?></style>
</div>

<?php snippet('footer') ?>
