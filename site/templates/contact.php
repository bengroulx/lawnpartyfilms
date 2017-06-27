<?php snippet('head') ?>

<?php snippet('header-custom') ?>

<section class="c-section u-bg-gradient">
    <div class="c-contain">

        <form class="c-form c-text-content">
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
                <input id="_formButton" type="button" name="Submit" value="Send Message" class="c-form__buttton u-tracked-slightly u-uppercase" style="max-width:320px;" />
            </div>
        </form>

    </div>
</section>

<?php snippet('footer') ?>
