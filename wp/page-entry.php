<?php
/*
Template Name: エントリー
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <div class="c-breadcrumb">
      <nav class="c-breadcrumb__nav"> 
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-breadcrumb__link">ホーム</a>
          </li>
          <li class="c-breadcrumb__item">
            <span class="c-breadcrumb__link">エントリー</span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-entry-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">ENTRY</span>
              <h1 class="c-under-fv__ja">
                <span class="p-entry-fv__txt-obj u-fs-28">エントリー</span>
              </h1>
            </hgroup>
          </div>
        </div>
      </div>
    </section>

    <section class="p-entry-cont">
      <div class="p-entry-cont__inner">

        <?php echo do_shortcode('[mwform_formkey key="45"]'); ?>

      </div>
    </section>
    
  </main>

  <?php get_footer(); ?>