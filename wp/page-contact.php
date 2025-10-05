<?php
/*
Template Name: お問い合わせ
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <div class="p-contact">
      <section class="c-under-fv c-under-fv--contact">
        <div class="c-inner">
          <div class="c-under-ttl">
            <span class="c-under-ttl__en">Contact</span>
            <h1 class="c-under-ttl__ja">お問い合わせ</h1>
          </div>
        </div>
      </section>

      <?php echo do_shortcode('[mwform_formkey key="27"]'); ?>

    </div>
  </main>

  <?php get_footer(); ?>