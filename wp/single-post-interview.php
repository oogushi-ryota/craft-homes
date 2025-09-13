<?php
/*
Template Name: 職員インタビュー詳細
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
            <a href="<?php echo esc_url( home_url( '/interview/' ) ); ?>" class="c-breadcrumb__link">職員インタビュー</a>            
          </li>
          <li class="c-breadcrumb__item">
            <span class="c-breadcrumb__link"><?php the_title(); ?></span>
          </li>
        </ul>
      </nav>
    </div>

    <section class="p-interview-fv c-under-fv">
      <div class="c-under-fv__inner">
        <div class="c-under-fv__cont">
          <div class="c-under-fv__txtarea">
            <hgroup class="c-under-fv__hgroup">
              <span class="c-under-fv__en">INTERVIEW</span>
              <h1 class="c-under-fv__ja">
                <span class="p-interview-fv__txt-obj u-fs-28">職員インタビュー</span>
              </h1>
            </hgroup>
          </div>
        </div>
      </div>
    </section>

    <section class="p-interview-details">
      <div class="p-interview-details__inner">
        <div class="p-interview-details__thumb">
          <?php if (has_post_thumbnail()) : ?>
            <picture class="p-interview-details__img">
              <source srcset="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" type="image/webp">
              <img src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" alt="職員インタビューのサムネイル">
            </picture>
          <?php endif; ?>
          <div class="p-interview-details__ttlarea">
            <span class="p-interview-details__name" style="color: #852A17;"><?php the_field('year'); ?>年入職 : <?php the_field('teacher'); ?></span>
            <h2 class="p-interview-details__ttl"><?php the_title(); ?></h2>
          </div>
        </div>
        <div class="p-interview-details__cont">
        <?php the_content(); ?>
        </div>
        <div class="p-interview-details__btn-wrap">
          <a href="<?php echo esc_url( home_url( '/interview/' ) ); ?>" class="p-interview-details__btn c-btn">
            <span class="c-btn__txt">職員インタビュー一覧へ</span>
            <svg class="p-interview-details__svg c-btn__svg" width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.2324 5.68066L0.704101 11.1807L0.704102 0.180664L10.2324 5.68066Z" fill="white"/>
            </svg>                  
          </a>
        </div>
      </div>
    </section>

    <?php get_template_part( 'parts/parts', 'entry' ); ?>
    
  </main>

  <?php get_footer(); ?>