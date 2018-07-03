<?php snippet('head') ?>
<?php snippet('header-custom') ?>


  <section class="c-section" role="main">
      <div class="c-contain">
    <div class="c-grid">
      <div class="left-half c-text-content" style="padding:0 1rem;">
        <img src="/content/4-info/devon.jpg" class="u-context"
        style="border:0rem solid white;">
      </div>
        <div class="right-half">
            <?php echo $page->creator1()->html() ?>
        </div>
    </div>

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
